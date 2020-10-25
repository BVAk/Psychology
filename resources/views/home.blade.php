@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    @forelse ($test as $mark)
                    <li>{{ $mark->mark }}</li>
                    @empty
                    <p> Ви ще не проходили тести</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection