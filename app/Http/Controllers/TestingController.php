<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Results;
use App\Models\TestStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestingController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function test(Request $request)
    {
        $testing_mark=0;
      
        $testStudent = new TestStudent();
        $testStudent->users_id = Auth::user()->id;
        $testStudent->categories_id = $request['category'];
        $sum1=0;
        $sum2=0;
        if ($request['category']=='4'){
            $testing_mark =$request[3]+$request[4]+$request[6]+$request[7]+$request[9]+$request[12]+$request[13]+$request[14]+$request[17]+$request[18]-$request[1]-$request[2]-$request[5]-$request[8]-$request[10]-$request[11]-$request[15]-$request[16]-$request[19]-$request[20]+35;
        } else if ($request['category']=='5'){
            $testing_mark =$request[2]+$request[3]+$request[4]+$request[5]+$request[8]+$request[9]+$request[11]+$request[12]+$request[14]+$request[15]+$request[18]+$request[20]-$request[1]-$request[6]-$request[7]-$request[10]-$request[13]-$request[16]-$request[39]+35;
        }
        else
        for ($i = 1; $i < 30; $i++) {
            $testing_mark +=$request[$i];
        }
        $testStudent->mark = $testing_mark;
        $testStudent->save();
        $category =$request['category']; 

        return redirect()->route('test.result',[$testing_mark,$category]);
    }
    public function result($testing_mark, $category){
        $categories = Categories::where('id', $category)->first();
        $results=Results::where('categories_id', $category)->where('from','<=',$testing_mark)->where('to','>=',$testing_mark)->first();
        return view('result_test', compact('categories','results','testing_mark'));
    
    }
}
