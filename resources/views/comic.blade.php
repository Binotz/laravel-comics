@extends('layout.app')

@section('body-section')
    <div class="blue-banner">
        <div class="comic-container">
            <img src="{{$comic[0]['thumb']}}" alt="{{$comic[0]['title']}}">
        </div>
    </div>
    <div class="comic-description">
        <div class="comic-container flex">
            {{-- left side --}}
            <div class="comic-description-text">
                <h1>{{$comic[0]['title']}}</h1>
                <div class="comic-price-available">
                    <div class="comic-price">
                        <span>U.S. Price: <span class="price">{{$comic[0]['price']}}</span></span>
                        <span>AVAILABLE</span>
                    </div>
                    <div class="comic-dropdown-check-avail">
                        <a href="#">Check Availability</a>
                    </div>
                </div>
                <p>
                    {{$comic[0]['description']}}
                </p>
            </div>
            {{-- right side, ADS --}}
            <div class="comic-ads">
                    <span>advertisement</span>
                    <img src="{{asset('images/adv.jpg')}}" alt="adv">
            </div>
        </div>
    </div>
    <div class="comic-details">
        <div class="comic-container flex">
            <div class="comic-talent">
                <h2>Talent</h2>
                <div class="art-by">
                    <h3>Art by:</h3>
                    <div>
                        @foreach ($comic[0]['artists'] as $artist)
                            <span class="artist">{{ $artist }}</span>@if (!$loop->last),@endif
                        @endforeach
                    </div>
                </div>
                <div class="written-by">
                    <h3>Written by:</h3>
                    <div>
                        @foreach ($comic[0]['writers'] as $writer)
                            <span class="writer">{{ $writer }}</span>@if (!$loop->last),@endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="comic-specs">
                <h2>Specs</h2>
                <div class="div-series">
                    <h3>series</h3>
                    <div>
                        <span class="spec-series">{{$comic[0]['series']}}</span>
                    </div>
                </div>
                <div class="div-spec-price">
                    <h3>U.S. Price: </h3>
                    <div>
                        <span class="spec-price">{{$comic[0]['price']}}</span>
                    </div>
                </div>
                <div class="div-spec-on-sale">
                    <h3>On Sale Date: </h3>
                    <div>
                        <span class="spec-on-sale">{{$comic[0]['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
