@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header clearfix">
                    <div class="float-left">
                        {{ $audiopost->title }}
                    </div>
                    <div class="float-right">
                        <a href="{{ route('user.profile', ['username' => $username]) }}">{{ $username }}</a>
                    </div>
                </div>

                <div class="card-body">
                    <img src="{{ $audiopost->getImage() }}" width="100%">

                    <audio-player url="{{ Storage::url($audiopost->audio_file_path) }}" playerid="audio-player" > </audio-player>
                    <hr>
                    {{ $audiopost->description }}
                </div>
            </div>
        </div>
        @include('parts.sidebar')
    </div>
</div>
@endsection
