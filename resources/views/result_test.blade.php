@extends('layouts.app')

@section('content')
<div class="container p-2">
    <div class="row justify-content-center">
        <div class="card">
            <div class="col m-2">
                <div class="about">
                    <img class="img-responsive wow fadeIn" src="{{asset('img/background3.png')}}" style="width:300px">
                    <h4><a href="#">{{$categories->name}}</a> <span class="text-uppercase small">{{$categories->type}}</span></h4>
                    <p>{{$categories->short_description}}</p>
                    <p>{{$categories->full_description}}</p>
                    <a href="{{route('themes.show',$categories->id)}}"> <button class="btn btn-info">Розпочати тест</button></a>
                </div>
                <hr>
                    <div class="row justify-content-center">
                        <h2>Ваш результат: {{ $testing_mark }}</h2>
                    </div>
                    <div class="row justify-content-center">
                        <p>{{ $results->text }}</p>
                    </div>
                
            </div>
        </div>
    </div>
</div>
@endsection