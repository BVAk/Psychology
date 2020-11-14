@extends('layouts.app')

@section('content')
<div class="container p-2">
    <div class="card justify-content-center align-items-stretch">
        <div class="row justify-content-center">
            <h1>{{$group->group}}</h1>
        </div>

        <div class="row justify-content-center">

            @forelse ($users as $user)
            <a href="{{route('psychologic.clients.user',$user->id)}}">
                <div class="col box">
                    <h4>{{$user->name}}</h4>
                </div>
            </a>

            @empty

            @endforelse
        </div>
    </div>
</div>
@endsection