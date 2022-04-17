@extends('layouts.default')

@section('content')

    <div id="fullpage" class="overflow-hidden">
        @include('index.sections.landing')
        @include('index.sections.preferences', compact('preferences'))
        @include('index.sections.about')
        @include('index.sections.portfolio', compact('slides'))
        @include('index.sections.testimonials', compact('testimonials'))
        @include('index.sections.contact')
        @include('shared.footer')
    </div>

@endsection
