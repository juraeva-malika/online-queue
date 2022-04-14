<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('orders')->insert([
        //     "date"=>"22/08/2022",
        //     "fullname"=>"Sadaf Zamonova",
        //     "phone"=>"+998992369456",
        //     "doctor_id" => Doctor::inRandomOrder()->first()->id,
        //     "service_id" => Service::inRandomOrder()->first()->id,
        // ]);
    }
}
