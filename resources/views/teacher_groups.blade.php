@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="col">
                <div class="">
                    <img class="img-responsive wow fadeIn" src="{{asset('img/background3.png')}}" alt="Latest Products Image">
                </div>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Створити групу</button>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Створення нової групи</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{route('teacher.group.create')}}" >
                                <label>Введіть назву групи</label>
                                <input type="text" placeholder="ФСІТІС 1.3" class="form-control @error('group') is-invalid @enderror" name="group" value="{{ old('group') }}" required autocomplete="group" autofocus />
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Відмінити</button>
                            <button type="submit" class="btn btn-primary">Зберегти групу</button>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($groups as $group)
            <div class="col">
                <div class="">
                    <img class="img-responsive wow fadeIn" src="{{asset('img/background3.png')}}" alt="Latest Products Image">
                </div>
                <h4><a href="{{route('teacher.students.group',$group->id)}}">{{$group->group}}</a>
            </div>
            @empty

            @endforelse
        </div>
    </div>
</div>
@endsection