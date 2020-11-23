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
        $results = array();
        $groups = GroupTeacher::where('users_id', Auth::user()->id)->get();
        foreach ($groups as $group) {
            $marks = [];
            $results[] = ($group->group);
            $mark = [];
            $userId = [];
            $rang = [];
            $count = 0;
            $clients = User::where('role', 'client')->where('group', $group->group)->get();
            $marksTotal = TestStudent::where('categories_id', 2)->orderBy('mark')->get();
            foreach ($clients as $client) {
                $client = TestStudent::where('users_id', $client->id)->where('categories_id', 1)->first();
                if ($client) {
                    $marks[] = $client->mark;
                    $count++;

                    
                }
            }
            foreach ($marksTotal as $markOne) {
                if (User::where('id',$markOne->user_id)->where('group','IT')->orWhere('group', 'Фізики')) {                
                $mark[] = $markOne->mark;
                $userId[] = $markOne->users_id;
                }
            }
            $rangcount = 0;
            $countrepeat = 1;
            $change = 1;
            for ($i = 0; $i < count($mark); $i++) {
                $next = 0;
                if (($i + 1) < count($mark)) {
                    $next = $i + 1;
                }
                if ($mark[$i] == $mark[$next]) {
                    $countrepeat = $countrepeat + 1;
                    $change = $change + 1;
                    $rangcount = $rangcount + 1;
                    $rang[$i] = $rangcount + 1;
                } else {
                    $rang[$i] = $rangcount + 1;

                    $j = $i;
                    while ($countrepeat > 1) {
                        $j = $j - 1;
                        $countrepeat = $countrepeat - 1;
                    }
                    $result_rang = ($rang[$i] + $rang[$j]) / 2;
                    $j = $i;
                    $rang[$j] = $result_rang;
                    while ($change > 1) {
                        $j = $j - 1;
                        $rang[$j] = $result_rang;
                        $change = $change - 1;
                    }
                    $countrepeat = 1;
                    $change = 1;
                    $rangcount = $rangcount + 1;
                }
            }
            $results[$group->group][] = min($marks);
            $results[$group->group][] = max($marks);
            $results[$group->group][] = $count;
        }
        $clientsIT = User::where('role', 'client')->where('group', 'IT')->get();
        $countIT = 0;
        $sumRangIT = 0;
        $sumMarkIT = 0;
        foreach ($clientsIT as $client) {
            for ($i = 1; $i <= count($mark) - 1; $i++) {
                if ($client->id == $userId[$i]) {
                    $sumMarkIT = $sumMarkIT + $mark[$i];
                    $sumRangIT = $sumRangIT + $rang[$i];
                    $countIT++;
                }
            }
        }

        $clientsPhysic = User::where('role', 'client')->where('group', 'Фізики')->get();
        $countPhysic = 0;
        $sumRangPhysic = 0;
        $sumMarkPhysic = 0;
        foreach ($clientsPhysic as $client) {
            for ($i = 1; $i <= count($mark) - 1; $i++) {
                if ($client->id == $userId[$i]) {
                    $sumMarkPhysic = $sumMarkPhysic + $mark[$i];
                    $sumRangPhysic = $sumRangPhysic + $rang[$i];
                    $countPhysic++;
                }
            }
        }

        return view('psyhologic_groups', compact(
            'clients',
            'groups',
            'results',
            'mark',
            'rang',
            'userId',
            'sumMarkIT',
            'sumRangIT',
            'countIT',
            'sumMarkPhysic',
            'sumRangPhysic',
            'countPhysic'
        ));
    }
    public function groupShow($group)
    {
        $group = GroupTeacher::find($group);
        $users = User::where('role', 'client')->where('group', $group->group)->get();
        $marks = [];
        $results[] = ($group->group);
        $count = 0;
        foreach ($users as $client) {
            $client = TestStudent::where('users_id', $client->id)->where('categories_id', 1)->first();
            if ($client) {
                $marks[] = $client->mark;
                $count++;
            }
        }
        $results[$group->group][] = min($marks);
        $results[$group->group][] = max($marks);
        $results[$group->group][] = $count;
        return view('psyhologic_users', compact('group', 'users'));
    }
    public function profileShow($client)
    {
        $user = User::find($client);
        $test = TestStudent::where('users_id', $user->id)->orderBy('created_at', 'DESC')->get();
        $results = Results::get();
        $groups = GroupTeacher::get();
        $allTests = Categories::get();
        return view('psychologic_client', compact('user', 'test', 'groups', 'allTests', 'results'));
    }

    public function groupCreate(Request $request)
    {
        GroupTeacher::insert(['users_id' => Auth::user()->id, 'group' => $request->group]);
        return redirect()->route('psychologic.clients');
    }
}
