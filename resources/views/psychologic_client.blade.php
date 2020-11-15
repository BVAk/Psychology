@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row justify-content-center">
                    <h1>{{$user->surname}} {{$user->name}}</h1>
                </div>
                <div class="row">
                    <div class="col">
                        <ol>@foreach ($test as $mark)

                            @foreach($results as $result)
                            @if($result->categories_id==$mark->categories_id)
                            @if($result->from<=$mark->mark && $result->to>=$mark->mark)
                                <li>
                                    <h1></h1>
                                    <p>Результат: {{ $mark->mark }}</p>
                                    <p>{{ $result->text }}</p>
                                    <small class="text-muted">
                                        {{ Carbon\Carbon::parse($mark->created_at)->format('d-m-Y') }}
                                    </small>
                                </li>
                                @endif
                                @endif
                                @endforeach
                                @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection