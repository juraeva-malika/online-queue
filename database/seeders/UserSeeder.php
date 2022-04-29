<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([
            "name"=>"admin",
            "email"=>"juraeva-malika@mail.ru",
            "email_verified_at"=>NULL,
            "password"=>Hash::make("Admin@1990"),
            "remember_token"=> NULL
        ]);
        
    }
}
