@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="col m-2">
                <form action="{{route('category.edit')}}" method="post">
                    {{ csrf_field() }}
                    <div class="about">
                        <div class="form-group">
                            <label for="nameThemeInput">Назва теми</label>
                            <input type="text" name="name" class="form-control" value="{{$categories->name}}">
                        </div>
                        <div class="form-group">
                            <label for="nameThemeInput">Тип теми</label>
                            <input type="text" name="name" class="form-control" value="{{$categories->type}}">
                        </div>
                        <div class="form-group">
                            <label for="textThemeInput">Коротка інформація</label>
                            <textarea id="text" name="short_description" class="form-control" value="Введите текст">{{$categories->short_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="textThemeInput">Повна інформація</label>
                            <textarea id="text" name="full_description" class="form-control" value="Введите текст">{{$categories->full_description}}</textarea>
                        </div>
                    </div>


                    <input type="hidden" name="category" value="{{$categories->id}}">
                    @php
                    $i = 1
                    @endphp
                        @foreach ($questions as $question)
                        @if($question->type == 'test')
                        <label for="nameThemeInput">Питання {{$i}}</label>
                        <input type="text" name="q{{$i}}" class="form-control" required="" value="{{$question->question}}">
                        <input type="text" name="question_id{{$i}}" value="{{$question->id}}" style="display: none;">
                        <br>
                        @foreach ($question->answer as $answer)
                        @php
                        $j = 1
                        @endphp
                        <div class="col m-2">
                            <input type="text" name="a{{$j}}{{$i}}" class="form-control" style="width:90%;display:inline;" required="" value="{{$answer->answer}}">
                            <input type="text" name="answer_id{{$j}}{{$i}}" value="{{$answer->id}}" style="display: none;">
                            @if($answer->correctness==1) <input class="form-check-input" checked="checked" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca{{$j}}{{$i}}" value="1" id="defaultCheck1">
                            @else <input class="form-check-input" style="float: right;margin-top: 10px;transform: scale(1.3);" type="checkbox" name="ca{{$j}}{{$i}}" value="1" id="defaultCheck1">
                            @endif

                        </div>
                        @php $j++
                        @endphp
                        @endforeach
                        @php
                        $i++
                        @endphp
                        @endif
                        @endforeach
                    <button type="submit" name="submit" class="btn btn-info">Завершити</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection