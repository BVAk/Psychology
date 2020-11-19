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
            ['users_id' => 1, 'group'=>"IT"],
            ['users_id' => 1, 'group'=>"Економісти"],
            ['users_id' => 1, 'group'=>"Фізики"],
            
        ]);
    }
}
