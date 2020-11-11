@extends('layouts.app')

@section('content')
<div class="container bg-grey p-2">
    <div class="row justify-content-center">
    <h1>{{$group->group}}</h1>
    </div>
    <div class="row justify-content-center">
        <div class="card justify-content-center align-items-stretch">
            <div class="row">
                @forelse ($users as $user)
                <a href="{{route('psychologic.clients.user',$user->id)}}">
                    <div class="col box">
                        <h4>{{$user->name}}</h4>
                    </div>
                </a>
            </div>
            @empty

            @endforelse
        </div>
        <div class="card justify-content-center align-items-stretch">
            <div class="row">
                @forelse ($users as $user)
                <a href="{{route('psychologic.clients.user',$user->id)}}">
                    <div class="col box">
                        <h4>{{$user->name}}</h4>
                    </div>
                </a>
            </div>
            @empty

            @endforelse
        </div>
    </div>
</div>
@endsection