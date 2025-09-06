<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Report;
use Carbon\Carbon;

class ReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Report::create([
            'user_id'     => '3',
            'report_date' => Carbon::now()->subDays(5),
            'type'        => 'Visit',
            'findings'    => 'Routine eye checkup. Vision stable.',
            'status'      => 'Reviewed',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Report::create([
            'user_id'     => '3',
            'report_date' => Carbon::now()->subDays(2),
            'type'        => 'Imaging',
            'findings'    => 'OCT Retina normal, no abnormalities detected.',
            'status'      => 'Completed',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);

        Report::create([
            'user_id'     => '3',
            'report_date' => Carbon::now(),
            'type'        => 'Lab Report',
            'findings'    => 'Blood sugar slightly high (HbA1c 6.3%).',
            'status'      => 'Pending',
            'created_at'  => now(),
            'updated_at'  => now(),
        ]);
    }
}
