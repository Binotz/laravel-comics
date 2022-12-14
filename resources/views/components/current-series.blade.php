    <section class="current-series">
        {{-- blue tag "Current series" --}}
        <span class="tag">current series</span>
        {{-- card list --}}
        <div class="series-container">
            @foreach ($series as $comic)
                <div class="serie">
                    <a href="{{route('comic',
                            ['id' => $comic['id']]
                        )}}">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <span>{{$comic['series']}}</span>
                    </a>
                </div>
            @endforeach
        </div>
        {{-- load more button --}}
        <div class="load-more">
            <span>load more</span>
        </div>
    </section>
