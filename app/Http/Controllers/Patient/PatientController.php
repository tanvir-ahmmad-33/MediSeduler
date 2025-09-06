<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Report;

class PatientController extends Controller
{
    public function dashboard() {
        $user = Auth::user();
        $phone = $user->phone;
        $formattedPhone = substr($phone, 0, 4) . ' ' . substr($phone, 4, 10);
        $patient = [
            'name'  => $user->name,
            'email' => $user->email,
            'phone' => $formattedPhone,
        ];

        $reports = Report::where('user_id', $user->id)
                                ->orderByDesc('report_date')
                                ->get();

        return view('patient.dashboard', ['patient' => $patient]);
    }

    public function reports() {
        $reports = Report::where('user_id', Auth::id())
                        ->orderByDesc('report_date')
                        ->get();
        return view('patient.load_reports', ['reports' => $reports]);
    }
}
