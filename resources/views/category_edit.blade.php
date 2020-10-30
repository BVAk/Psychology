@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="col m-2">
            <form  action="{{route('category.edit')}}" method="post">
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
                            <textarea id="text" name="short_description" class="form-control"
                                value="Введите текст">{{$categories->short_description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="textThemeInput">Повна інформація</label>
                            <textarea id="text" name="full_description" class="form-control"
                                value="Введите текст">{{$categories->full_description}}</textarea>
                        </div>
                </div>
                
                    
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