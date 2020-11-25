<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TimeResult extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $results=DB::table('teststudent')->get();
        $start = strtotime('2020-01-10 11:12:00');
        $end = strtotime('now');
         foreach($results as $result){
            $date1 = mt_rand($start, $end);
            $date = date('Y-m-d H:i:s', strtotime('+1day', $date1));    
            DB::table('teststudent')->where('id',$result->id)->where('created_at',null)->update(['created_at'=>$date]);
        }
    }
}
