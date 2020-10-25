<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\GroupTeacher;
use App\Models\TestStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function themes()
    {
        $themes = Categories::get();
        return view('categories', compact('themes'));
    }
    public function results()
    {
        $results = TestStudent::get();
        return view('categories', compact('categories'));
    }
    public function students()
    {
        $groups=GroupTeacher::where('users_id',Auth::user()->id)->get();
        $students = User::where('role','student')->get();
        return view('teacher_groups', compact('students','groups'));
    }
    public function groupShow(){
        
    }
    public function groupCreate(Request $request){
        GroupTeacher::insert(['users_id'=>Auth::user()->id,'group'=>$request->group]);
    }

}
