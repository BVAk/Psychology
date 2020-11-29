<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::where('role', 'client')->where('group','IT')->get();
        foreach ($users as $user) {
            DB::table('teststudent')->insert([
                ['users_id' => $user->id, 'categories_id' => 3,'mark'=>rand(1,21)]
            ]);
        }
    }
}
