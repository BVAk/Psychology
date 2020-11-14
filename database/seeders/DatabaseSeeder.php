<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CategoriesSeeder::class,
            TestSeeder::class,
            AnswerSeeder::class,
            ResultSeeder::class,
            PsychologicSeeder::class,
            GroupSeeder::class,
            UserSeeder::class,
            ClientResultSeeder::class
        ]);
    }
}
