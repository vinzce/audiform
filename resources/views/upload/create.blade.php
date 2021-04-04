@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-8">

            <form method="post" action="{{ route('upload.store') }}" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="inputTitle">Title</label>
                    <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Your title here">
                </div>

                <div class="form-group">
                    <label for="inputThumb">Thumbnail</label>
                    <input type="file" name="thumb" class="form-control-file" id="inputThumb">
                </div>

                <div class="form-group">
                    <label for="inputAudio">Audio</label>
                    <input type="file" name="audio" class="form-control-file" id="inputAudio">
                </div>

                <div class="form-group">
                    <label for="inputDescription">Description</label>
                    <textarea name="description" class="form-control" id="inputDescription" rows="4"></textarea>
                </div>

                @csrf

                <button type="submit" class="btn btn-primary btn-lg btn-block">Upload</button>
            </form>
        </div>
    </div>
</div>
@endsection
