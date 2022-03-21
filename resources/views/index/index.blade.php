@extends('layouts.default')

<script src="{{ asset('assets/js/preloader.js') }}" defer></script>

@include('shared.preloader')

@section('content')

    <div id="fullpage">
        @include('index.sections.landing')
        {{--        https://codepen.io/layalk/pen/mmXpog --}}
        @include('index.sections.preferences')
        @include('index.sections.about')
        @include('index.sections.portfolio')
        @include('index.sections.testimonials')
        @include('index.sections.contact')
    </div>


    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    {{--            <div class="col-md-8">--}}
    {{--                <div class="card">--}}
    {{--                    <div class="card-body">--}}
    {{--                        @if (session('status'))--}}
    {{--                            <div class="alert alert-success" role="alert">--}}
    {{--                                {{ session('status') }}--}}
    {{--                            </div>--}}
    {{--                        @endif--}}
    {{--                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
