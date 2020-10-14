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
            [ 'question' => "Якого кольору український прапор?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Якої форми м'яч?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Скільки місяців в році?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Для чого використовують термометр?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Скільки днів в році?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "При якій температурі закипає вода?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Назвіть прізвища будь-яких чотирьох космонавтів?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Столиця Італії?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "З чого отримують гуму?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Чому темний одяг тепліше світлого?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Де знаходиться Єгипет?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "З якими країнами межує Украіна?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "В якому напрямку ви будете їхати, якщо Вам потрібно проїхати з Києва до Болгарії?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Якого числа в Україні справляють Різдво?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Хто автор «Гамлета»?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Скільки приблизно жителів в Україні?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Назвіть три види кровоносних судин, що знаходяться в організмі людини?", 'type'=>"test"," category_id "=>" 1 "],
            [ 'question' => "Хто такий Марко Вовчок?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Чому дріжджі піднімають тісто?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Де знаходиться Бразилія?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Що таке Ватикан?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Хто автор «Маніфесту комуністичної партії»", 'type' => "test", "category_id" => "1"],
            [ 'question' => "На який термін обираються депутати Державної Думи України?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Хто автор «Іліади»?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Скільки км від Одеси до Києва?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Що таке фольклор?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Хто автор «Фауста»?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Що таке етнографія?", 'type' => "test", "category_id" => "1"],
            [ 'question' => "Що таке гносеологія?", 'type' => "test", "category_id" => "1"]
        ]);
    }
}
