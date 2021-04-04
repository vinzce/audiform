@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header clearfix">
                    <div class="float-left">
                        {{ __('Uploads') }}
                    </div>
                    <div class="float-right">
                        <a class="btn btn-primary btn-sm" href="{{ route('upload.create') }}">Upload new audio</a>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if ($audioposts->isEmpty())
                        No Uploads
                    @else
                        @foreach($audioposts as $audiopost)
                            <div class="col mb-4">
                                    <div class="card bg-dark text-white">
                                        <img src="{{ $audiopost->getImage() }}" width="100%" class="card-img">
                                        <div class="card-img-overlay">
                                            <h5 class="card-title">{{ $audiopost->title }}</h5>
                                            <p><a class="card-text" href="{{ route('upload.edit', ['audiopost' => $audiopost]) }}">edit</a></p>
                                        </div>
                                    </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
