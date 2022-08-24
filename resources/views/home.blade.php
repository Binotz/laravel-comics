@extends('layout.app')

{{-- body section --}}
@section('body-section')
    {{-- current series section --}}
    @include("components.current-series")
    {{-- CTA section --}}
    @include("components.home-cta")
    
@endsection
