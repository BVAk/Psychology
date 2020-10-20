<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function test(Request $request)
    {
        $testing_mark=0;
        for ($i = 1; $i < 30; $i++) {
            $testing_mark +=$request[$i];
        }
        return $testing_mark;
    }
}
