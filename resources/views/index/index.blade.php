@extends('layouts.default')

<script src="{{ asset('assets/js/preloader.js') }}" defer></script>

@include('shared.preloader')

@section('content')

    <div id="fullpage">
        @include('index.sections.landing')
        @include('index.sections.preferences')
        @include('index.sections.about')
        @include('index.sections.portfolio')
        @include('index.sections.testimonials')
        @include('index.sections.contact')
    </div>

@endsection
