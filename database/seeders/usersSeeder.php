<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Armen",
            'email' => "xarmen836@gmail.com",
            'is_admin' => 1,
            "password" => hash::make("pnduk"),

        ]);
        DB::table('users')->insert([
            'name' => "notebook",
            'email' => "xarmen@gmail.com",
            "password" => hash::make("pnduk")
        ]);
    }
}
