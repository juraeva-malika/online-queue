<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Service;
use Carbon\Carbon;
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
        //     "date"=> Carbon::now(),
        //     "time"=> Carbon::now()->toTimeString(),
        //     "fullname"=>"Sadaf Zamonova",
        //     "phone"=>"+998992369456",
        //     "doctor_id" => Doctor::inRandomOrder()->first()->id,
        //     "service_id" => Service::inRandomOrder()->first()->id,
        // ]);
    }
}
