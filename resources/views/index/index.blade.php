@extends('layouts.default')

@section('content')

    <div id="fullpage">
        @include('index.sections.landing')
        @include('index.sections.preferences')
        @include('index.sections.about')
        @include('index.sections.portfolio')
        @include('index.sections.testimonials')
        @include('index.sections.contact')
        @include('shared.footer')
    </div>

@endsection
