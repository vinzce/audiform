@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h1>u/{{ $user->username }}</h1>
            <div class="card">
                <div class="card-header">
                    Audioposts
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

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
        </div>
    </div>
</div>
@endsection
