@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            @foreach($categories as $category)
            <div class="col box">
                <h4><a href="#">{{$category->name}}</a> <span class="text-uppercase small">{{$category->type}}</span></h4>
                <p>{{$category->short_description}}</p>
                <a class="link" href="{{route('themes.show',$category->id)}}">Пройти тест</a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection