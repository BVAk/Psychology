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
        TestStudent::insert( ['users_id' => Auth::user()->id, 'categories_id' => $request['category'],'mark'=>$testing_mark]);
        return $testing_mark;
    }
}
