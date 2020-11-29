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
        $groupCount = GroupTeacher::where('group', 'IT')->orWhere('group', 'Економісти')->orWhere('group', 'Фізики')->get();
        foreach ($groupCount as $group) {
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
                if (User::where('id', $markOne->user_id)->where('group', 'IT')->orWhere('group', 'Фізики')) {
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

        $markCor = [];
        $userCorId = [];
        $rangCor = [];
        $countCor = 0;
        $marksCorTotal = TestStudent::where('categories_id', 4)->orderBy('mark')->paginate(30);
        foreach ($marksCorTotal as $markOne) {
            if (User::where('id', $markOne->user_id)->where('group', 'IT')) {
                $markCor[] = $markOne->mark;
                $userCorId[] = $markOne->users_id;
            }
        }
        $rangCorcount = 0;
        $countCorrepeat = 1;
        $changeCor = 1;
        for ($i = 0; $i < count($markCor); $i++) {
            $next = 0;
            if (($i + 1) < count($markCor)) {
                $next = $i + 1;
            }
            if ($markCor[$i] == $markCor[$next]) {
                $countCorrepeat = $countCorrepeat + 1;
                $changeCor = $changeCor + 1;
                $rangCorcount = $rangCorcount + 1;
                $rangCor[$i] = $rangCorcount + 1;
            } else {
                $rangCor[$i] = $rangCorcount + 1;

                $j = $i;
                while ($countCorrepeat > 1) {
                    $j = $j - 1;
                    $countCorrepeat = $countCorrepeat - 1;
                }
                $result_rang = ($rangCor[$i] + $rangCor[$j]) / 2;
                $j = $i;
                $rangCor[$j] = $result_rang;
                while ($changeCor > 1) {
                    $j = $j - 1;
                    $rangCor[$j] = $result_rang;
                    $changeCor = $changeCor - 1;
                }
                $countCorrepeat = 1;
                $changeCor = 1;
                $rangCorcount = $rangCorcount + 1;
            }
        }
        $clientsCorIT = User::where('role', 'client')->where('group', 'IT')->get();
        $countCorIT = 0;
        $sumRangCorIT = 0;
        $sumMarkCorIT = 0;
        foreach ($clientsCorIT as $client) {
            for ($i = 1; $i <= count($markCor) - 1; $i++) {
                if ($client->id == $userCorId[$i]) {
                    $sumMarkCorIT = $sumMarkCorIT + $markCor[$i];
                    $sumRangCorIT = $sumRangCorIT + $rangCor[$i];
                    $countCorIT++;
                }
            }
        }
        $markCor2 = [];
        $userCorId2 = [];
        $rangCor2 = [];       
        $rangCorcount2 = 0;
        $countCorrepeat2 = 1;
        $changeCor2 = 1;
        $marksCorTotal2 = TestStudent::where('categories_id', 5)->orderBy('mark')->paginate(30);
        foreach ($marksCorTotal2 as $markOne) {
            if (User::where('id', $markOne->user_id)->where('group', 'IT')) {
                $markCor2[] = $markOne->mark;
                $userCorId2[] = $markOne->users_id;
            }
        }
        for ($i = 0; $i < count($markCor2); $i++) {
            $next = 0;
            if (($i + 1) < count($markCor2)) {
                $next = $i + 1;
            }
            if ($markCor2[$i] == $markCor2[$next]) {
                $countCorrepeat2 = $countCorrepeat2 + 1;
                $changeCor2 = $changeCor2 + 1;
                $rangCorcount2 = $rangCorcount2 + 1;
                $rangCor2[$i] = $rangCorcount2 + 1;
            } else {
                $rangCor2[$i] = $rangCorcount2 + 1;

                $j = $i;
                while ($countCorrepeat2 > 1) {
                    $j = $j - 1;
                    $countCorrepeat2 = $countCorrepeat2 - 1;
                }
                $result_rang = ($rangCor2[$i] + $rangCor2[$j]) / 2;
                $j = $i;
                $rangCor2[$j] = $result_rang;
                while ($changeCor2 > 1) {
                    $j = $j - 1;
                    $rangCor2[$j] = $result_rang;
                    $changeCor2 = $changeCor2 - 1;
                }
                $countCorrepeat2 = 1;
                $changeCor2 = 1;
                $rangCorcount2 = $rangCorcount2 + 1;
            }
        }
        $usersDouble = User::where('group', 'IT')->get();
        foreach ($usersDouble as $user) {
            $marksDouble1 = TestStudent::where('categories_id', 3)->where('users_id', $user->id)->orderBy('created_at')->first();
            $marksDouble2 = TestStudent::where('categories_id', 3)->where('users_id', $user->id)->orderBy('created_at', 'DESC')->first();
            if ($marksDouble1) {
                if ($marksDouble1->id != $marksDouble2->id) {
                    $user11[] = $user->name;
                    $mark1[] = $marksDouble1->mark;
                    $mark2[] = $marksDouble2->mark;
                    $markdiff[1][$i]=abs($marksDouble1->mark-$marksDouble2->mark);
                    $markdiff[0][$i]=$i;
                }
            }
        }
        $rangDD=array();
        $rangDouble = 0;
        $countrepeatDouble = 1;
        $changeDouble = 1;
        for ($i = 0; $i < count($markdiff[1])-1; $i++) {
            $next = 0;
            if (($i + 1) < count($markdiff[1])-1) {
                $next = $i + 1;
            }
            if ($markdiff[1][$i] == $markdiff[1][$next]) {
                $countrepeatDouble = $countrepeatDouble + 1;
                $changeDouble = $changeDouble + 1;
                $rangDouble = $rangDouble + 1;
                $rangDD[0][$i]=$markdiff[0][$i];
                $rangDD[1][$i] = $rangDouble + 1;
            } else {
                $rangDD[1][$i] = $rangDouble + 1;

                $j = $i;
                while ($countrepeatDouble > 1) {
                    $j = $j - 1;
                    $countrepeatDouble = $countrepeatDouble - 1;
                }
                $result_rang = ($rangDD[1][$i] + $rangDD[1][$j]) / 2;
                $j = $i;
                $rangDD[1][$j] = $result_rang;
                while ($changeDouble > 1) {
                    $j = $j - 1;
                    $rangDD[1][$j] = $result_rang;
                    $changeDouble = $changeDouble - 1;
                }
                $countrepeatDouble = 1;
                $changeDouble = 1;
                $rangDouble = $rangDouble + 1;
            }
        }
    
        return view('psyhologic_groups', compact(
            'user11',
            'mark1',
            'mark2',
            'clients',
            'groups',
            'results',
            'mark',
            'rang',
            'markdiff',
            'userId',
            'markCor',
            'markCor2',
            'rangCor',
            'rangCor2',
            'rangDD',
            'userCorId',
            'userCorId2',
            'sumMarkIT',
            'sumRangIT',
            'countIT',
            'sumMarkIT',
            'sumRangIT',
            'countCorIT',
            'sumMarkCorIT',
            'sumRangCorIT',
            'countIT',
            'sumMarkPhysic',
            'sumRangPhysic',
            'countPhysic',
            'usersDouble',
            'marksDouble1',
            'marksDouble2'
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
