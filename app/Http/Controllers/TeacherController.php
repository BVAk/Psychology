<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\GroupTeacher;
use App\Models\Results;
use App\Models\TestStudent;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct()
{
    $this->middleware('auth');
}
    public function themes()
    {
        $themes = Categories::get();
        return view('psychologic_categories', compact('themes'));
    }
    public function results()
    {
        $results = TestStudent::get();
        return view('categories', compact('categories'));
    }
    public function clients()
    {
        $groups=GroupTeacher::where('users_id',Auth::user()->id)->get();
        $clients = User::where('role','client')->get();
        return view('psyhologic_groups', compact('clients','groups'));
    }
    public function groupShow($group){
        $group=GroupTeacher::find($group);
        $users=User::where('role','client')->where('group',$group->group)->get();
        return view('psyhologic_users',compact('group','users'));    
    }
     public function profileShow($client)
    {
        $user=User::find($client);
        $test=TestStudent::where('users_id',$user->id)->orderBy('id' ,'DESC')->get();
        $results=Results::get();
        $groups=GroupTeacher::get();
        $allTests=Categories::get();
        return view('psychologic_client',compact('user','test','groups','allTests','results'));
    }

    public function groupCreate(Request $request){
        GroupTeacher::insert(['users_id'=>Auth::user()->id,'group'=>$request->group]);
        return redirect()->route('psychologic.clients');
    }

}
