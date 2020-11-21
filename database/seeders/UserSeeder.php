<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name' => "Client41", 'surname'=>"Іванова","group"=>"IT","age"=>"20","role"=>"client",'email' => "client41@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client42", 'surname'=>"Іванова","group"=>"IT","age"=>"21","role"=>"client",'email' => "client42@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client43", 'surname'=>"Іванова","group"=>"IT","age"=>"22","role"=>"client",'email' => "client43@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client44", 'surname'=>"Іванова","group"=>"IT","age"=>"23","role"=>"client",'email' => "client44@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client45", 'surname'=>"Іванова","group"=>"IT","age"=>"24","role"=>"client",'email' => "client45@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client46", 'surname'=>"Іванова","group"=>"IT","age"=>"25","role"=>"client",'email' => "client46@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client47", 'surname'=>"Іванова","group"=>"IT","age"=>"26","role"=>"client",'email' => "client47@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client48", 'surname'=>"Іванова","group"=>"IT","age"=>"27","role"=>"client",'email' => "client48@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client49", 'surname'=>"Іванова","group"=>"IT","age"=>"28","role"=>"client",'email' => "client49@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client50", 'surname'=>"Іванова","group"=>"IT","age"=>"29","role"=>"client",'email' => "client50@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client51", 'surname'=>"Іванова","group"=>"IT","age"=>"30","role"=>"client",'email' => "client51@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client52", 'surname'=>"Іванова","group"=>"IT","age"=>"31","role"=>"client",'email' => "client52@gmail.com", "password" => Hash::make("1234")],
        
            ['name' => "Client53", 'surname'=>"Іванова","group"=>"Економісти","age"=>"20","role"=>"client",'email' => "client53@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client54", 'surname'=>"Іванова","group"=>"Економісти","age"=>"21","role"=>"client",'email' => "client54@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client55", 'surname'=>"Іванова","group"=>"Економісти","age"=>"22","role"=>"client",'email' => "client55@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client56", 'surname'=>"Іванова","group"=>"Економісти","age"=>"23","role"=>"client",'email' => "client56@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client57", 'surname'=>"Іванова","group"=>"Економісти","age"=>"24","role"=>"client",'email' => "client57@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client58", 'surname'=>"Іванова","group"=>"Економісти","age"=>"25","role"=>"client",'email' => "client58@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client59", 'surname'=>"Іванова","group"=>"Економісти","age"=>"26","role"=>"client",'email' => "client59@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client60", 'surname'=>"Іванова","group"=>"Економісти","age"=>"27","role"=>"client",'email' => "client60@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client61", 'surname'=>"Іванова","group"=>"Економісти","age"=>"28","role"=>"client",'email' => "client61@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client62", 'surname'=>"Іванова","group"=>"Економісти","age"=>"29","role"=>"client",'email' => "client62@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client63", 'surname'=>"Іванова","group"=>"Економісти","age"=>"30","role"=>"client",'email' => "client63@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client64", 'surname'=>"Іванова","group"=>"Економісти","age"=>"31","role"=>"client",'email' => "client64@gmail.com", "password" => Hash::make("1234")],

            ['name' => "Client65", 'surname'=>"Іванова","group"=>"Фізики","age"=>"20","role"=>"client",'email' => "client65@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client66", 'surname'=>"Іванова","group"=>"Фізики","age"=>"21","role"=>"client",'email' => "client66@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client67", 'surname'=>"Іванова","group"=>"Фізики","age"=>"22","role"=>"client",'email' => "client67@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client68", 'surname'=>"Іванова","group"=>"Фізики","age"=>"23","role"=>"client",'email' => "client68@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client69", 'surname'=>"Іванова","group"=>"Фізики","age"=>"24","role"=>"client",'email' => "client69@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client70", 'surname'=>"Іванова","group"=>"Фізики","age"=>"25","role"=>"client",'email' => "client70@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client71", 'surname'=>"Іванова","group"=>"Фізики","age"=>"26","role"=>"client",'email' => "client71@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client72", 'surname'=>"Іванова","group"=>"Фізики","age"=>"27","role"=>"client",'email' => "client72@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client73", 'surname'=>"Іванова","group"=>"Фізики","age"=>"28","role"=>"client",'email' => "client73@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client74", 'surname'=>"Іванова","group"=>"Фізики","age"=>"29","role"=>"client",'email' => "client74@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client75", 'surname'=>"Іванова","group"=>"Фізики","age"=>"30","role"=>"client",'email' => "client75@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client76", 'surname'=>"Іванова","group"=>"Фізики","age"=>"31","role"=>"client",'email' => "client76@gmail.com", "password" => Hash::make("1234")],
            ]);
    }
}
