@extends('layouts.app')

@section('content')
<div class="container bg-grey p-2">
    <div class="row justify-content-center">
        @foreach($categories as $category)
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <div class="card-img-top" >
                    <div class="image_name"><h4>{{$category->name}}</h4></div>
                </div>
                <div class="card-body">
                    <h4><span class="text-uppercase small">{{$category->type}}</span></h4>
                    <p class="card-text">{{$category->short_description}}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a class="link" href="{{route('themes.show',$category->id)}}"><button type="button" class="btn btn-sm btn-outline-secondary">Пройти тест</button></a>
                        
                        </div>
                        <small class="text-muted">{{$category->test->count()}} питань</small>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection