<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [ 'question' => "Почуття тривоги, неспокою, нервовості, бути на межі.", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Чи не в змозі припинити тривогу або контролювати її.", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Занадто багато тривоги і занепокоєння про різні речі і ситуаціях.", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Складно або неможливо розслабитися.", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Таке сильне занепокоєння, що важко всидіти на місці.", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Легко дратуюся або виходжу з себе.", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Почуття, що може трапитися щось жахливе.", 'type' => "test", "categories_id" => "1"],
            
            [ 'question' => "Коли я плачу, то завжди знаю, чому.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мрії - це втрата часу.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я хотів би бути не таким сором'язливим.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я часто важко визначити, які почуття відчуваю.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я часто мрію про майбутнє.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мені здається, я так само здатний легко заводити друзів, як і інші.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Знати, як вирішувати проблеми, важливіше, ніж розуміти причини цих рішень.?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мені важко знаходити правильні слова для вираження моїх почуттів.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мені подобається ставити людей до відома про свою позицію з тих чи інших питань.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "У мене бувають фізичні відчуття, які незрозумілі навіть лікарям.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мені недостатньо знати, що привело до такого результату, мені необхідно знати, чому і як це відбувається.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я здатний з легкістю описати свої почуття.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я віддаю перевагу аналізувати проблеми, а не просто їх описувати.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Коли я засмучений, то не знаю, сумний чи я, переляканий або зол.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я часто даю волю уяві.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я проводжу багато часу в мріях, коли чи не зайнятий нічим іншим.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мене часто спантеличують відчуття, що з'являються в моєму тілі.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я рідко мрію.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я віддаю перевагу, щоб все йшло само собою, ніж розуміти, чому сталося саме так.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "У мене бувають почуття, яким я не можу дати цілком точне визначення.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Дуже важливо вміти розбиратися в емоціях.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Мені важко описувати свої почуття по відношенню до людей.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Люди мені кажуть, щоб я більше висловлював свої почуття.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Слід шукати більш глибокі пояснення того, що відбувається.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я не знаю, що відбувається у мене всередині.", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Я часто не знаю, чому я серджуся.", 'type' => "test", "categories_id" => "2"],
            
            //[ 'question' => "", 'type' => "test", "categories_id" => "3"],
            
            
        ]);
    }
}
