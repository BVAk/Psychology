<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\GroupTeacher;
use App\Models\TestStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $test=TestStudent::where('users_id',Auth::user()->id)->get();
        $groups=GroupTeacher::get();
        $allTests=Categories::get();
        return view('home',compact('test','groups','allTests'));
    }
    public function update(Request $data)
    {
        if($data['password']!=null)
        User::where('id', Auth::user()->id)->update([
            'surname' => $data['surname'],
            'name' => $data['name'],
            'email' => $data['email'],
            'group' => $data['group'],
            'age' => $data['age'],
            'password' => Hash::make($data['password']),
        ]);
        else  User::where('id', Auth::user()->id)->update([
            'surname' => $data['surname'],
            'name' => $data['name'],
            'email' => $data['email'],
            'group' => $data['group'],
            'age' => $data['age'],
        ]);
        return redirect()->back();
        //
    }
}
