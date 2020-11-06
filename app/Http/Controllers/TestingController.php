<?php

namespace App\Http\Controllers;

use App\Models\TestStudent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestingController extends Controller
{
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
        return redirect()->route('home');
    }
}
