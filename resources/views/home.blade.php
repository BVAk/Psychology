@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <h1>{{Auth::user()->surname}} {{Auth::user()->name}}</h1>
                </div>
                <div class="row">
                    <div class="col-sm-3">
                        <!--left col-->
                        <div class="text-center">
                            <img src="data:image/png;base64,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" class="avatar img-circle img-thumbnail" alt="avatar">

                        </div>
                        </hr><br>
                    </div>
                    <!--/col-3-->
                    <div class="col-sm-9">
                        <div class="list-group" id="myList" role="tablist">
                            <a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab">Редагувати профіль</a>
                            @if(Auth::user()->role=="client")<a class="list-group-item list-group-item-action active" data-toggle="list" href="#tests" role="tab">Перегляд пройдених тестів</a>@endif
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane <?php if(Auth::user()->role == "psychologic"): ?> active<?php endif; ?>" id="home">
                                <hr>
                                <form class="form" action="{{route('user.edit')}}" method="post" id="registrationForm">
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
                                                <option value="{{$group->group}}" @if(Auth::user()->group == $group->group) selected="selected" @endif>{{$group->group}}</option>
                                                @empty
                                                <option value="1" <?php if(Auth::user()->group == 1): ?> selected="selected"<?php endif; ?>>1</option>
                                                <option value="2" <?php if(Auth::user()->group == 2): ?> selected="selected"<?php endif; ?>>2</option>
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <label for="phone">
                                                <h4>Ваш вік</h4>
                                            </label>
                                            <input type="text" class="form-control" name="age" placeholder="Введіть ваш вік" value="{{Auth::user()->age}}">
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
                                            <input type="password" class="form-control" name="password" placeholder="Введіть пароль для зміни паролю">
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
                            @if(Auth::user()->role=="client")
                            <div class="tab-pane active" id="tests">
                                <h2></h2>
                                @forelse ($test as $mark)
                                <li>{{ $mark->mark }}</li>
                                @empty
                                <p> Ви ще не проходили тести</p>
                                @endforelse
                                <hr>
                                <ul class="list-group">
                                    <li class="list-group-item text-muted">Мої тести <i class="fa fa-dashboard fa-1x"></i></li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Завершені тести</strong></span> 125</li>
                                    <li class="list-group-item text-right"><span class="pull-left"><strong>Усі тести</strong></span> 37</li>
                                </ul>
                            </div>
                            @endif
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