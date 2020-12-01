@extends('layouts.app')

@section('content')
<div class="container bg-grey p-2">
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
                            <input type="text" name="type" class="form-control" value="{{$categories->type}}">
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
                    <label for="nameThemeInput">Питання {{$i}}</label>
                    <input type="text" name="q{{$question->id}}" class="form-control" required="" value="{{$question->question}}">
                    <br>
                    @foreach ($question->answer as $answer)
                    <div class="col m-2">
                        <input type="text" name="a{{$answer->id}}" class="form-control" style="width:90%;display:inline;" required="" value="{{$answer->answer}}">
                        <input class="form-check-input" style="border: 1px solid #ced4da; width: 30px;transform: scale(1.3);" type="text" name="ca{{$answer->id}}" value="{{$answer->correctness}}" id="defaultCheck1">
                    </div>
                    @endforeach
                    @php
                    $i++
                    @endphp
                    @endforeach
                    <div class="row justify-content-center">
                    <button type="submit" name="submit" class="btn btn-info">Зберегти</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection