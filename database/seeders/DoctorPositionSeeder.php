<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctorPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctor_positions')->insert([
            "doctor_id" =>3,
            "position_id" => 1,
        ]);
        DB::table('doctor_positions')->insert([
            "doctor_id" =>4,
            "position_id" => 3,
        ]);
    }
}
