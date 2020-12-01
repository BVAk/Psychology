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
                            <input type="text" name="name" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="nameThemeInput">Тип теми</label>
                            <input type="text" name="type" class="form-control" value="">
                        </div>
                        <div class="form-group">
                            <label for="textThemeInput">Коротка інформація</label>
                            <textarea id="text" name="short_description" class="form-control" value="Введите текст"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="textThemeInput">Повна інформація</label>
                            <textarea id="text" name="full_description" class="form-control" value="Введите текст"></textarea>
                        </div>
                    </div>
                    <div>
                        <label for="nameThemeInput">Питання 1</label>
                        <input type="text" name="q1" class="form-control" required="" value="">
                        <br>
                        <div id="col_questions">
                            <div class="col m-2">
                                <input type="text" name="a11" class="form-control" style="width:90%;display:inline;" required="" value="">
                                <input class="form-check-input" style="border: 1px solid #ced4da; width: 30px;transform: scale(1.3);" type="text" name="ca11" value="" id="defaultCheck1">
                            </div>
                            <div class="col m-2">
                                <input type="text" name="a12" class="form-control" style="width:90%;display:inline;" required="" value="">
                                <input class="form-check-input" style="border: 1px solid #ced4da; width: 30px;transform: scale(1.3);" type="text" name="ca12" value="" id="defaultCheck1">
                            </div>
                            <div class="col m-2">
                                <button name="submit" class="btn btn-info">Додати відповідь</button>
                            </div>
                            <div class="row m-3 justify-content-center">
                                <button name="submit" class="btn btn-info">Додати питання</button>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" name="submit" class="btn btn-info">Завершити</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection