<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('group_teacher')->insert([
            ['users_id' => 2, 'group'=>"IT"],
            ['users_id' => 2, 'group'=>"Economic"],
            ['users_id' => 2, 'group'=>"Physic"],
            ['users_id' => 1, 'group'=>"Mechanic"],
            ['users_id' => 1, 'group'=>"Psychologic"],
            ['users_id' => 1, 'group'=>"Artist"],
        ]);
    }
}
