<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Validation\Rule;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'role'     => ['required', Rule::in(['doctor', 'staff', 'patient'])],
        ]);

        $name     = $request->name;
        $email    = $request->email;
        $password = Hash::make($request->password);
        $role     = $request->role ?? 'patient';

        $user = User::create([
            'name'        => $name,
            'email'       => $email,
            'password'    => $password,
            'role'        => $role,
            'is_approved' => ($role === 'staff') ? false : true,
        ]);

        if($user->isDoctor()) {
            Auth::login($user);
            return redirect()->route('doctor.dashboard')->with('user' , $user);
        }

        if($user->isPatient()) {
            Auth::login($user);
            return redirect()->route('patient.dashboard')->with('user' , $user);
        }

        if($user->isStaff()) {
            return redirect()->route('login')->with('status' , 'Your account is pending approval.');
        }

        return redirect()->route('home');
    }
}
