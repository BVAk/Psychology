@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row justify-content-center">
                   <div class="col-md-8 justify-content-center"> <h1>{{$user->surname}} {{$user->name}}</h1></div>
                </div>
                <div class="row">
                    <h1> Результати:</h1>
                    <div class="col-md-8 justify-content-center"">
                        <ol>@foreach ($test as $mark)

                            @foreach($results as $result)
                            @if($result->categories_id==$mark->categories_id)
                            @if($result->from<=$mark->mark && $result->to>=$mark->mark)
                                <li>
                                    <p><?php
                                        $categor = DB::table('Categories')->where('id', '=', $result->categories_id)->first() ?>
                                        {{$categor->name}}</p>
                                    <p>Результат: {{ $mark->mark }}</p>
                                    <p>{{ $result->text }}</p>
                                    <small class="text-muted">
                                        {{ Carbon\Carbon::parse($mark->created_at)->format('d-m-Y') }}
                                    </small>
                                </li>
                                @endif
                                @endif
                                @endforeach
                                @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection