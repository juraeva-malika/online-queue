<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('doctors')->insert([
        //     'fullname' => "Bibish",
        //     'phone' => "99 309 39 20",//9979618
        //     'experience' => Str::random(20),
        // ]);
    }
}
