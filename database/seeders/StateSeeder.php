<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('states')->insert([
            "name" => "Trarza",
            "name_fr" => "Trarza",
            "description" => "Trarza",
            "status" => 1
        ]);
    }
}
