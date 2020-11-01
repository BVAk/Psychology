@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <div class="col-sm-10">
                        <h1>{{Auth::user()->surname}} {{Auth::user()->name}}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <!--left col-->
                        <div class="text-center">
                            <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                            <h6>Upload a different photo...</h6>
                            <input type="file" class="text-center center-block file-upload">
                        </div>
                        </hr><br>
                    </div>
                    <!--/col-3-->
                    <div class="col-sm-9">
                        <ul class="nav nav-tabs">
                            <li ><a data-toggle="tab" href="#home">Редагувати профіль</a></li>
                            <li class="active"><a data-toggle="tab" href="#tests">Перегляд пройдених тестів</a></li>
                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane" id="home">
                                <hr>

    
                                <form class="form" action="##" method="post" id="registrationForm">
                                @csrf
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="surname">
                                                <h4>Прізвище</h4>
                                            </label>
                                            <input type="text" class="form-control" name="surname" placeholder="Введіть прізвище" value="{{Auth::user()->surname}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="last_name">
                                                <h4>Ім'я</h4>
                                            </label>
                                            <input type="text" class="form-control" name="name" placeholder="Введіть ім'я" value="{{Auth::user()->name}}">
                                        </div>
                                    </div>
                                    @if (Auth::user()->role == 'client')

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <select id="group" name="group" placeholder="Номер групи" class="form-control" required>
                                                <option>Номер групи</option>
                                                @forelse ($groups as $group)
                                                <option value="{{$group->group}}">{{$group->group}}</option>
                                                @empty
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Ваш вік</h4>
                                            </label>
                                            <input type="text" class="form-control" name="age" placeholder="Введіть ваш вік">
                                        </div>
                                    </div>
                                    @endif

                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="email">
                                                <h4>Email</h4>
                                            </label>
                                            <input type="email" class="form-control" name="email" id="email" value="{{Auth::user()->email}}" placeholder="Введіть email виду you@email.com">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="password">
                                                <h4>Password</h4>
                                            </label>
                                            <input type="password" class="form-control" name="password" placeholder="Введіть пароль для зміни паролю" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-12">
                                            <br>
                                            <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Зберегти</button>
                                            <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>Відмінити</button>
                                        </div>
                                    </div>
                                </form>

                                <hr>

                            </div>
                            <!--/tab-pane-->
                            <div class="tab-pane active" id="tests">
                                <h2></h2>
                                @forelse ($test as $mark)
                                <li>{{ $mark->mark }}</li>
                                @empty
                                <p> Ви ще не проходили тести</p>
                                @endforelse
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
                                </ul>
                            </div>
                            <!--/tab-pane-->

                        </div>
                        <!--/tab-pane-->
                    </div>
                    <!--/tab-content-->

                </div>
                <!--/col-9-->
            </div>
            <!--/row-->
        </div>
    </div>
</div>

@endsection