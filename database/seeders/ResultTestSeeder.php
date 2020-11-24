<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultTestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('results')->insert([
            [
                'categories_id' => "4",                
                'from' => 0,
                'to' => 30,
                'text' => "Низька тривога. Потребуж збільшення почуття відповідальності і уваги до мотивів діяльності. Інколи низька тривога автивного витиснення особистості ставить за ціль показати себе з найкращого боку ",
            ],
            [
                'categories_id' => "4",                
                'from' => 31,
                'to' => 45,
                'text' => "Середня тривога.",
            ],
            [
                'categories_id' => "4",                
                'from' => 46,
                'to' => 150 ,
                'text' => "Висока тривога. Можлива поява стану тривоги у людини в ситуації оцінки компитентності. Потрібно знизити суб'єктивність значущості ситуації і задач і сконцентруватися на осмислення діяльності і формування почуття впевненості в собі.",
            ],
            
            [
                'categories_id' => "5",                
                'from' => 0,
                'to' => 30,
                'text' => "Низька тривога. Потребуж збільшення почуття відповідальності і уваги до мотивів діяльності. Інколи низька тривога автивного витиснення особистості ставить за ціль показати себе з найкращого боку ",
            ],
            [
                'categories_id' => "5",                
                'from' => 31,
                'to' => 45,
                'text' => "Середня тривога.",
            ],
            [
                'categories_id' => "5",                
                'from' => 46,
                'to' => 150 ,
                'text' => "Висока тривога. Можлива поява стану тривоги у людини в ситуації оцінки компитентності. Потрібно знизити суб'єктивність значущості ситуації і задач і сконцентруватися на осмислення діяльності і формування почуття впевненості в собі.",
            ],
        ]);
    }
}