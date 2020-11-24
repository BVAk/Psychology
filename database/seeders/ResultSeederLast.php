<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultSeederLast extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions=DB::table('questions')->where('categories_id','4')->get();
        foreach ($questions as $question){
            DB::table('answers')->insert([
                ['answer' => "Ні, це не так", 'correctness' => 1, "questions_id" => $question->id],
                ['answer' => "Можливо так", 'correctness' => 2, "questions_id" => $question->id],
                ['answer' => "Вірно", 'correctness' => 3, "questions_id" => $question->id],
                ['answer' => "Цілком вірно", 'correctness' => 4, "questions_id" => $question->id]
            ]);
        }
        $questions=DB::table('questions')->where('categories_id','5')->get();
        foreach ($questions as $question){
            DB::table('answers')->insert([
                ['answer' => "Ні, це не так", 'correctness' => 1, "questions_id" => $question->id],
                ['answer' => "Можливо так", 'correctness' => 2, "questions_id" => $question->id],
                ['answer' => "Вірно", 'correctness' => 3, "questions_id" => $question->id],
                ['answer' => "Цілком вірно", 'correctness' => 4, "questions_id" => $question->id]
            ]);
        }
    }
}
