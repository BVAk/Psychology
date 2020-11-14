<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PsychologicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => "Psychologic1", 'surname'=>"Іванова","role"=>"psychologic",'email' => "ivanova@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Psychologic2", 'surname'=>"Петров","role"=>"psychologic",'email' => "petrov@gmail.com", "password" => Hash::make("1234")],
        ]);
    }
}
