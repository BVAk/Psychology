@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                    <h1>{{$user->surname}} {{$user->name}}</h1>
                </div>
                <div class="row">
                    <div class="col-sm-9">
                        <ul class="list-group">
                            <li class="list-group-item text-muted">Мої тести <i class="fa fa-dashboard fa-1x"></i></li>
                            <a data-toggle="list" href="#results" role="tab">
                                <li class="list-group-item text-right"><span class="pull-left"><strong>Завершені тести</strong></span> {{$test->groupBy('categories_id')->count()}}</li>
                            </a>
                            <li class="list-group-item text-right"><span class="pull-left"><strong>Усього тестів</strong></span> {{$allTests->count()}}</li>
                        </ul>
                        @foreach ($test as $mark)

                        @foreach($results as $result)
                        @if($result->categories_id==$mark->categories_id)
                        @if($result->from<=$mark->mark && $result->to>=$mark->mark)
                            <li>
                                <h1></h1>
                                <p>Ваш результат: {{ $mark->mark }}</p>
                                <p>{{ $result->text }}</p>
                                <small class="text-muted">
                                    {{ Carbon\Carbon::parse($mark->created_at)->format('d-m-Y') }}
                                </small>
                            </li>
                            @endif
                            @endif
                            @endforeach
                            @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection