<div class="col-md-4">
            Suggested Audio's
            <hr>
            @foreach ($suggestedaudios as $suggestedaudio)
                <a href="{{ route('audiopost', $suggestedaudio) }}">
                    <div class="card bg-dark text-white mb-2">
                        <img src="{{ $suggestedaudio->getImage() }}" width="100%" class="card-img">
                        <div class="card-img-overlay">
                            <h5 class="card-title">{{ $suggestedaudio->title }}</h5>
                        </div>
                    </div>
                </a>
            @endforeach
</div>