@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Welcome!') }}
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-3">
        @foreach($audioposts as $audiopost)
            <div class="col mb-4">
                <a href="{{ route('audiopost', ['audiopost' => $audiopost]) }}">
                    <div class="card bg-dark text-white">
                        <img src="{{ $audiopost->getImage() }}" width="100%" class="card-img">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $audiopost->title }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
