<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [ 'answer' => "синій золотий", 'correctness' => 1, "questions_id" => "1"],
            [ 'answer' => "жовто блакитний", 'correctness' => 0, "questions_id" => "1"],
            [ 'answer' => "біло червоний", 'correctness' => 0, "questions_id" => "1"],
            [ 'answer' => "коло", 'correctness' => 0, "questions_id" => "2"],
            [ 'answer' => "куб", 'correctness' => 0, "questions_id" => "2"],
            [ 'answer' => "шар", 'correctness' => 1, "questions_id" => "2"],
            [ 'answer' => "365", 'correctness' => 0, "questions_id" => "3"],
            [ 'answer' => "12", 'correctness' => 1, "questions_id" => "3"],
            [ 'answer' => "366", 'correctness' => 0, "questions_id" => "3"],
            [ 'answer' => "вимірювання температури", 'correctness' => 1, "questions_id" => "4"],
            [ 'answer' => "вимірювання тиску", 'correctness' => 0, "questions_id" => "4"],
            [ 'answer' => "вимірювання освітлення", 'correctness' => 0, "questions_id" => "4"],
            [ 'answer' => "12", 'correctness' => 0, "questions_id" => "5"],
            [ 'answer' => "365", 'correctness' => 1, "questions_id" => "5"],
            [ 'answer' => "4", 'correctness' => 0, "questions_id" => "5"],
            [ 'answer' => "36.6°", 'correctness' => 0, "questions_id" => "6"],
            [ 'answer' => "100°", 'correctness' => 1, "questions_id" => "6"],
            [ 'answer' => "60°", 'correctness' => 0, "questions_id" => "6"],
            [ 'answer' => "Володимир Хомицький, Артем Ярмоленко, Анатолій Шепель, Андрій Шевченко", 'correctness' => 0, "questions_id" => "7"],
            [ 'answer' => "Леонід Каденюк, Олексій Леонов, Юрій Гагарін,  Валентина Терешкова", 'correctness' => 1, "questions_id" => "7"],
            [ 'answer' => "Блез Паскаль, Ісаак Ньютон, Еварист Галуа, Микола Іванович Лобачевський", 'correctness' => 0, "questions_id" => "7"],
            [ 'answer' => "Рим", 'correctness' => 1, "questions_id" => "8"],
            [ 'answer' => "Неаполь", 'correctness' => 0, "questions_id" => "8"],
            [ 'answer' => "Ватикан", 'correctness' => 0, "questions_id" => "8"],
            [ 'answer' => "дерево", 'correctness' => 0, "questions_id" => "9"],
            [ 'answer' => "каучук", 'correctness' => 1, "questions_id" => "9"],
            [ 'answer' => "нафта", 'correctness' => 0, "questions_id" => "9"],
            [ 'answer' => "світлий одяг поглинає сонячне тепло", 'correctness' => 0, "questions_id" => "10"],
            [ 'answer' => "темний одяг відбиває сонячні промені", 'correctness' => 0, "questions_id" => "10"],
            [ 'answer' => "темний одяг поглинає сонячне тепло", 'correctness' => 1, "questions_id" => "10"],
            [ 'answer' => "в центральній Африці", 'correctness' => 0, "questions_id" => "11"],
            [ 'answer' => "в Південній Африці", 'correctness' => 0, "questions_id" => "11"],
            [ 'answer' => "в Північній Африці", 'correctness' => 1, "questions_id" => "11"],
            [ 'answer' => "Польша, Румунія, Білорусь, Молдова", 'correctness' => 1, "questions_id" => "12"],
            [ 'answer' => "Болгарія, Туреччина, Німеччина", 'correctness' => 0, "questions_id" => "12"],
            [ 'answer' => "Китай, Казахстан, Естонія", 'correctness' => 0, "questions_id" => "12"],
            [ 'answer' => "пн-сх", 'correctness' => 0, "questions_id" => "13"],
            [ 'answer' => "пд-зх", 'correctness' => 1, "questions_id" => "13"],
            [ 'answer' => "пд-сх", 'correctness' => 0, "questions_id" => "13"],
            [ 'answer' => "27 грудня", 'correctness' => 0, "questions_id" => "14"],
            [ 'answer' => "25 грудня, 7 січня", 'correctness' => 1, "questions_id" => "14"],
            [ 'answer' => "1 січня", 'correctness' => 0, "questions_id" => "14"],
            [ 'answer' => "В. Шекспир", 'correctness' => 1, "questions_id" => "15"],
            [ 'answer' => "М. Гоголь", 'correctness' => 0, "questions_id" => "15"],
            [ 'answer' => "Т. Шевченко", 'correctness' => 0, "questions_id" => "15"],
            [ 'answer' => "10 млн", 'correctness' => 0, "questions_id" => "16"],
            [ 'answer' => "40 млн", 'correctness' => 1, "questions_id" => "16"],
            [ 'answer' => "30 млн", 'correctness' => 0, "questions_id" => "16"],
            [ 'answer' => "легені, шлунок, печінка", 'correctness' => 0, "questions_id" => "17"],
            [ 'answer' => "кров, шлунковий сік", 'correctness' => 0, "questions_id" => "17"],
            [ 'answer' => "артерії, вени, капіляри", 'correctness' => 1, "questions_id" => "17"],
            [ 'answer' => "письменник", 'correctness' => 1, "questions_id" => "18"],
            [ 'answer' => "художниця", 'correctness' => 0, "questions_id" => "18"],
            [ 'answer' => "музикант", 'correctness' => 0, "questions_id" => "18"],
            [ 'answer' => "виділяють вуглекислий газ, набухають, утворюються повітряні бульбашки", 'correctness' => 1, "questions_id" => "19"],
            [ 'answer' => "виділяють повітря, набухають", 'correctness' => 0, "questions_id" => "19"],
            [ 'answer' => "зменшують розмір", 'correctness' => 0, "questions_id" => "19"],
            [ 'answer' => "пд Америка", 'correctness' => 1, "questions_id" => "20"],
            [ 'answer' => "пд Англія", 'correctness' => 0, "questions_id" => "20"],
            [ 'answer' => "пн Америка", 'correctness' => 0, "questions_id" => "20"],
            [ 'answer' => "музей", 'correctness' => 0, "questions_id" => "21"],
            [ 'answer' => "центр католичної церкви", 'correctness' => 1, "questions_id" => "21"],
            [ 'answer' => "художник", 'correctness' => 0, "questions_id" => "21"],
            [ 'answer' => "Василь Шкляр", 'correctness' => 0, "questions_id" => "22"],
            [ 'answer' => "Юрій Косач", 'correctness' => 0, "questions_id" => "22"],
            [ 'answer' => "К.Маркс, Ф.Енгельс", 'correctness' => 1, "questions_id" => "22"],
            [ 'answer' => "1 рік", 'correctness' => 0, "questions_id" => "23"],
            [ 'answer' => "5 років", 'correctness' => 1, "questions_id" => "23"],
            [ 'answer' => "7 років", 'correctness' => 0, "questions_id" => "23"],
            [ 'answer' => "Гомер", 'correctness' => 1, "questions_id" => "24"],
            [ 'answer' => "Іван Котляревський", 'correctness' => 0, "questions_id" => "24"],
            [ 'answer' => "Панас Мирний", 'correctness' => 0, "questions_id" => "24"],
            [ 'answer' => "473км", 'correctness' => 1, "questions_id" => "25"],
            [ 'answer' => "303км", 'correctness' => 0, "questions_id" => "25"],
            [ 'answer' => "613км", 'correctness' => 0, "questions_id" => "25"],
            [ 'answer' => "наука про народ", 'correctness' => 0, "questions_id" => "26"],
            [ 'answer' => "наука про пізнання", 'correctness' => 0, "questions_id" => "26"],
            [ 'answer' => "усна народна творчість", 'correctness' => 1, "questions_id" => "26"],
            [ 'answer' => "Гете, Гуно", 'correctness' => 1, "questions_id" => "27"],
            [ 'answer' => "Альбер Камю‎", 'correctness' => 0, "questions_id" => "27"],
            [ 'answer' => "Жуль Верн‎", 'correctness' => 0, "questions_id" => "27"],
            [ 'answer' => "усна народна творчість", 'correctness' => 0, "questions_id" => "28"],
            [ 'answer' => "наука про пізнання", 'correctness' => 0, "questions_id" => "28"],
            [ 'answer' => "наука про народ", 'correctness' => 1, "questions_id" => "28"],
            [ 'answer' => "наука про пізнання", 'correctness' => 1, "questions_id" => "29"],
            [ 'answer' => "усна народна творчість", 'correctness' => 0, "questions_id" => "29"],
            [ 'answer' => "наука про народ", 'correctness' => 0, "questions_id" => "29"],
            ]);
    }
}
