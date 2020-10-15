@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="col-sm-4">
                <div class="">
                    <img class="img-responsive wow fadeIn" src="{{asset('img/background3.png')}}" alt="Latest Products Image">
                </div>
                <h4><a href="#">{{$categories->name}}</a> <span class="text-uppercase small">{{$categories->type}}</span></h4>
                <p>{{$categories->short_description}}</p>
                <p>{{$categories->full_description}}</p>
                <button onclick="opentest()">Розпочати тест</button>
                {{$question}}
            </div>
        </div>
    </div>
</div>
@endsection