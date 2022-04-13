@extends('layouts.default')

@section('content')

    <div id="fullpage" class="overflow-hidden">
        @include('index.sections.landing')
        @include('index.sections.preferences')
        @include('index.sections.about')
        @include('index.sections.portfolio', compact('slides'))
        @include('index.sections.testimonials')
        @include('index.sections.contact')
        @include('shared.footer')
    </div>

@endsection
