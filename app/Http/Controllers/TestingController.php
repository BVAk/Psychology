<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function test(Request $request)
    {
        $testing_mark = 0;
        for ($i = 1; $i++; $i < 30) {
            if(isset($request[$i])){
            $testing_mark += $request[$i];
            } else break;
            return redirect()->route('home')->with(['mark' => $testing_mark]);
        }
    }
}
