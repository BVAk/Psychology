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
            ['name' => "Client1", 'surname'=>"Іванова","group"=>"IT","age"=>"20","role"=>"client",'email' => "client1@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client2", 'surname'=>"Іванова","group"=>"IT","age"=>"21","role"=>"client",'email' => "client2@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client3", 'surname'=>"Іванова","group"=>"IT","age"=>"22","role"=>"client",'email' => "client3@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client4", 'surname'=>"Іванова","group"=>"IT","age"=>"23","role"=>"client",'email' => "client4@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client5", 'surname'=>"Іванова","group"=>"IT","age"=>"24","role"=>"client",'email' => "client5@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client6", 'surname'=>"Іванова","group"=>"IT","age"=>"25","role"=>"client",'email' => "client6@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client7", 'surname'=>"Іванова","group"=>"IT","age"=>"26","role"=>"client",'email' => "client7@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client8", 'surname'=>"Іванова","group"=>"IT","age"=>"27","role"=>"client",'email' => "client8@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client9", 'surname'=>"Іванова","group"=>"IT","age"=>"28","role"=>"client",'email' => "client9@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client10", 'surname'=>"Іванова","group"=>"IT","age"=>"29","role"=>"client",'email' => "client10@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client11", 'surname'=>"Іванова","group"=>"IT","age"=>"30","role"=>"client",'email' => "client11@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client12", 'surname'=>"Іванова","group"=>"IT","age"=>"31","role"=>"client",'email' => "client12@gmail.com", "password" => Hash::make("1234")],
        
            ['name' => "Client13", 'surname'=>"Іванова","group"=>"Економісти","age"=>"20","role"=>"client",'email' => "client13@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client14", 'surname'=>"Іванова","group"=>"Економісти","age"=>"21","role"=>"client",'email' => "client14@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client15", 'surname'=>"Іванова","group"=>"Економісти","age"=>"22","role"=>"client",'email' => "client15@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client16", 'surname'=>"Іванова","group"=>"Економісти","age"=>"23","role"=>"client",'email' => "client16@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client17", 'surname'=>"Іванова","group"=>"Економісти","age"=>"24","role"=>"client",'email' => "client17@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client18", 'surname'=>"Іванова","group"=>"Економісти","age"=>"25","role"=>"client",'email' => "client18@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client19", 'surname'=>"Іванова","group"=>"Економісти","age"=>"26","role"=>"client",'email' => "client19@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client20", 'surname'=>"Іванова","group"=>"Економісти","age"=>"27","role"=>"client",'email' => "client20@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client21", 'surname'=>"Іванова","group"=>"Економісти","age"=>"28","role"=>"client",'email' => "client21@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client22", 'surname'=>"Іванова","group"=>"Економісти","age"=>"29","role"=>"client",'email' => "client22@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client23", 'surname'=>"Іванова","group"=>"Економісти","age"=>"30","role"=>"client",'email' => "client23@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client24", 'surname'=>"Іванова","group"=>"Економісти","age"=>"31","role"=>"client",'email' => "client24@gmail.com", "password" => Hash::make("1234")],

            ['name' => "Client25", 'surname'=>"Іванова","group"=>"Фізики","age"=>"20","role"=>"client",'email' => "client25@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client26", 'surname'=>"Іванова","group"=>"Фізики","age"=>"21","role"=>"client",'email' => "client26@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client27", 'surname'=>"Іванова","group"=>"Фізики","age"=>"22","role"=>"client",'email' => "client27@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client28", 'surname'=>"Іванова","group"=>"Фізики","age"=>"23","role"=>"client",'email' => "client28@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client29", 'surname'=>"Іванова","group"=>"Фізики","age"=>"24","role"=>"client",'email' => "client29@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client30", 'surname'=>"Іванова","group"=>"Фізики","age"=>"25","role"=>"client",'email' => "client30@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client31", 'surname'=>"Іванова","group"=>"Фізики","age"=>"26","role"=>"client",'email' => "client31@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client32", 'surname'=>"Іванова","group"=>"Фізики","age"=>"27","role"=>"client",'email' => "client32@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client33", 'surname'=>"Іванова","group"=>"Фізики","age"=>"28","role"=>"client",'email' => "client33@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client34", 'surname'=>"Іванова","group"=>"Фізики","age"=>"29","role"=>"client",'email' => "client34@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client35", 'surname'=>"Іванова","group"=>"Фізики","age"=>"30","role"=>"client",'email' => "client35@gmail.com", "password" => Hash::make("1234")],
            ['name' => "Client36", 'surname'=>"Іванова","group"=>"Фізики","age"=>"31","role"=>"client",'email' => "client36@gmail.com", "password" => Hash::make("1234")],
            ]);
    }
}
