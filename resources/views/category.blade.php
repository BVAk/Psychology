@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="col m-2">
                <div class="about">
                    <img class="img-responsive wow fadeIn" src="{{asset('img/background3.png')}}" style="width:300px">
                    <h4><a href="#">{{$categories->name}}</a> <span class="text-uppercase small">{{$categories->type}}</span></h4>
                    <p>{{$categories->short_description}}</p>
                    <p>{{$categories->full_description}}</p>
                    <button  class="btn btn-info" onclick="opentest()">Розпочати тест</button>
                </div>
                <form class="test" action="{{route('themes.test')}}" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="category" value="{{$categories->id}}">
                    @php
                    $i = 1
                    @endphp
                    <ol>
                        @foreach ($questions as $question)
                        @if($question->type == 'test')
                        <li> {{$question->question}}</li>
                        @foreach ($question->answer as $answer)
                        <div class="col-md-12">
                            <label>
                                <input type="radio" name="{{$i}}" value="{{$answer->correctness}}" class="">
                                {{$answer->answer}}
                            </label>
                        </div>
                        @endforeach
                        @php
                        $i++
                        @endphp
                        @endif
                        @endforeach
                    </ol>
                    <button type="submit" name="submit" class="btn btn-info">Завершити</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection