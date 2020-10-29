@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card justify-content-center align-items-stretch">
            <div class="col box">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Створити групу</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form method="POST" action="{{route('psychologic.group.create')}}">
                                @csrf
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Створення нової групи</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <label>Введіть назву групи</label>
                                    <input type="text" placeholder="IT" class="form-control @error('group') is-invalid @enderror" name="group" value="{{ old('group') }}" required autocomplete="group" autofocus />

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Відмінити</button>
                                    <button type="submit" class="btn btn-primary">Зберегти групу</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @forelse ($groups as $group)

            <a href="{{route('psychologic.clients.group',$group->id)}}">

                <div class="col box">
                    <h4>{{$group->group}}</h4>
                </div>
            </a>
            @empty

            @endforelse
        </div>
    </div>
</div>
@endsection