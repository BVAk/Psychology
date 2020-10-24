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
            [ 'question' => "Якого кольору український прапор?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Якої форми м'яч?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Скільки місяців в році?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Для чого використовують термометр?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Скільки днів в році?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "При якій температурі закипає вода?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Назвіть прізвища будь-яких чотирьох космонавтів?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Столиця Італії?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "З чого отримують гуму?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Чому темний одяг тепліше світлого?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Де знаходиться Єгипет?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "З якими країнами межує Украіна?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "В якому напрямку ви будете їхати, якщо Вам потрібно проїхати з Києва до Болгарії?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Якого числа в Україні справляють Різдво?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Хто автор «Гамлета»?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Скільки приблизно жителів в Україні?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Назвіть три види кровоносних судин, що знаходяться в організмі людини?", 'type'=>"test"," categories_id "=>" 1 "],
            [ 'question' => "Хто такий Марко Вовчок?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Чому дріжджі піднімають тісто?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Де знаходиться Бразилія?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Що таке Ватикан?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Хто автор «Маніфесту комуністичної партії»", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "На який термін обираються депутати Державної Думи України?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Хто автор «Іліади»?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Скільки км від Одеси до Києва?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Що таке фольклор?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Хто автор «Фауста»?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Що таке етнографія?", 'type' => "test", "categories_id" => "1"],
            [ 'question' => "Що таке гносеологія?", 'type' => "test", "categories_id" => "1"],

            [ 'question' => "Чому людина носить одяг?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Для чого на автомобіль ставлять мотор?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Що потрібно зробити, якщо ви знайшли на вулиці конверт з написаним адресою і приклеєною маркою?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Чому ви повинні покинути погану компанію?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Що потрібно зробити, якщо ви, сидячи в театрі або кінотеатрі, побачили дим або вогонь?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Чому необхідно планування?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Що означає вираз 'Куй залізо, поки гаряче'?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Чому законодавство обмежує робочий день підлітків?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Якщо ви заблукали в лісі вдень, як би ви повелися, щоб вибратися з лісу?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Чому людина, глухий від народження, не може говорити?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Чому держава не дозволяє одружуватися до 18 років?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Чому повітря в селі чистіше, ніж в місті?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Що означає вираз 'Багато галасу даремно'?", 'type' => "test", "categories_id" => "2"],
            [ 'question' => "Що означає вираз 'Одна ластівка весни не робить'?", 'type' => "test", "categories_id" => "2"],

            [ 'question' => "Використовуються 7 кубиків Кооса. Розкладаються двома групами (червоний колір нагорі) по 3 і 4 кубика. Відстань між кубиками 0.5 см, а між групами - 2 см. Скільки кубиків вийде, якщо скласти їх в одне місце?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Якщо у вас було 3 книги і ви одну віддали, скільки книг у вас залишилося?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Скільки буде 4 грн. і 5 грн.", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Людина купила значок, що стоїть 6 коп., І дав 10 коп. Скільки він повинен отримати здачі?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Учень купив 6 зошитів по 25 коп. Скільки грошей він заплатив?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Скільки кг в 2.5 центнери?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Скільки пиріжків можна купити за 36 коп, якщо 1 пиріжок коштує 6 коп?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Скільки часу потрібно людині, щоб пройти 24 км, якщо він йде зі швидкістю 3 км / год?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Людина купила 7 поштових марок по 2 коп. і дав пів гривні. Скільки він повинен отримати здачі?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "З 18 грн. людина витратив 7 грн. 50 коп. Скільки грошей у нього залишилося?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Дві консервних банки разом коштують 31 коп. Скільки коштують 12 таких банок?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Старі меблі людина купила за 2/3 вартості нових меблів. Він заплатив 400 грн. Скільки коштує нові меблі?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "Пальто 1 гатунку коштує 60 грн., Пальто 2 сорту на 15% дешевше. Скільки коштує пальто 2 сорту?", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "8 осіб можуть виконати роботу за 6 днів. Скільки потрібно людей, щоб виконати цю роботу за півдня?", 'type' => "test", "categories_id" => "3"],
           
            [ 'question' => "апельсин-банан", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "пальто-плаття", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "сокиру-пила", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "собака-лев", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "стіл-стілець", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "очей-вухо", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "повітря-вода", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "поема-статуя", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "північ-захід", 'type' => "test", "categories_id" => "4"],  
            [ 'question' => "яйце-зерно", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "заохочення-покарання", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "деревина-спирт", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "муха-дерево", 'type' => "test", "categories_id" => "4"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],  
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            [ 'question' => "", 'type' => "test", "categories_id" => "3"],
            
            
        ]);
    }
}
