<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentResultTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('role', 'client')->get();
        foreach ($users as $user) {
            DB::table('teststudent')->insert([
                ['users_id' => $user->id, 'categories_id' => 4,'mark'=>rand(1,61)]
            ]);
            DB::table('teststudent')->insert([
                ['users_id' => $user->id, 'categories_id' => 5,'mark'=>rand(1,61)]
            ]);
        }
    }
}
