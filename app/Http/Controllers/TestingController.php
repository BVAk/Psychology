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
        for ($i = 1; $i < 30; $i++) {
            $testing_mark +=$request[$i];
        }
        $testStudent = new TestStudent();
        $testStudent->users_id = Auth::user()->id;
        $testStudent->categories_id = $request['category'];
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
