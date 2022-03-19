@extends('layouts.default')

<script src="{{ asset('assets/js/preloader.js') }}" defer></script>

@include('shared.preloader')

@section('content')

    <div id="fullpage">
        <div class="w-full h-screen section bg-landing bg-contain bg-full">
            <div class="flex flex-col gap-y-24 justify-center items-center">
                <div class="flex gap-y-4 justify-center items-center flex-col text-5xl">
                    <h2>{{__("messages.landing.developer")}}</h2>
                    <p class="outlined text-4xl font-bold">&&</p>
                    <h2>{{__("messages.landing.designer")}}</h2>
                </div>
                <div class="flex gap-x-32 justify-center items-center flex-row">
                    <a href="{{ url("/projects") }}"
                       class="button bg-gradient-to-r from-primary-600/[0.4] to-primary-700/[0.2] text-2xl border border-primary-500 rounded-full px-8 py-2 backdrop-blur">
                        {{__("messages.landing.latest_projects")}}
                    </a>

                    <a href="{{ url("/contact") }}"
                       class="button bg-gradient-to-r from-gray-500/[0.4] to-gray-600/[0.2] text-2xl border border-gray-200 rounded-full px-8 py-2 backdrop-blur">
                        {{__("messages.landing.get_in_touch")}}
                    </a>
                </div>
            </div>
            @include('shared.scrolldown')

            {{--            <svg class="w-full h-auto fixed -bottom-px z-10" x="0" y="0" width="100%" height="100%" viewBox="0 0 1440 320">--}}
            {{--                <pattern class="stroke-secondary-600" id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="6" patternTransform="rotate(-45 2 2)">--}}
            {{--                    <path d="M -1,2 l 6,0" stroke-width="1"/>--}}
            {{--                </pattern>--}}

            {{--                <path fill="#111111" d="M 0 230 C 71 299 204 306 320 278 C 497 226 502 239 594 262 C 749 312 865 306 1135 293 C 1248 282 1319 286 1440 232 L 1440 320 L 1405.7 320 C 1371.4 320 1303 320 1234 320 C 1165.7 320 1097 320 1029 320 C 960 320 891 320 823 320 C 754.3 320 686 320 617 320 C 548.6 320 480 320 411 320 C 342.9 320 274 320 206 320 C 137.1 320 69 320 34 320 L 0 320 Z"></path>--}}
            {{--                <path fill="url(#diagonalHatch)" d="M 0 230 C 71 299 204 306 320 278 C 497 226 502 239 594 262 C 749 312 865 306 1135 293 C 1248 282 1319 286 1440 232 L 1440 320 L 1405.7 320 C 1371.4 320 1303 320 1234 320 C 1165.7 320 1097 320 1029 320 C 960 320 891 320 823 320 C 754.3 320 686 320 617 320 C 548.6 320 480 320 411 320 C 342.9 320 274 320 206 320 C 137.1 320 69 320 34 320 L 0 320 Z"></path>--}}
            {{--            </svg>--}}
        </div>
        {{--        https://codepen.io/layalk/pen/mmXpog--}}
        <div class="w-full h-1/3 bg-secondary-700 section fp-auto-height">
            <div class="w-full h-full">
                <h3>What I Enjoy Doing Most</h3>
                <p>The tasks that i love doing most</p>
            </div>
            {{--            <svg class="w-full h-min z-10 fill-secondary" viewBox="0 0 1440 320">--}}
            {{--                <path d="M 0 230 C 71 299 204 306 320 278 C 497 226 502 239 594 262 C 749 312 865 306 1135 293 C 1248 282 1319 286 1440 232 L 1440 320 L 1405.7 320 C 1371.4 320 1303 320 1234 320 C 1165.7 320 1097 320 1029 320 C 960 320 891 320 823 320 C 754.3 320 686 320 617 320 C 548.6 320 480 320 411 320 C 342.9 320 274 320 206 320 C 137.1 320 69 320 34 320 L 0 320 Z"></path>--}}
            {{--            </svg>--}}
        </div>
        <div class="w-full h-screen bg-secondary-700 section">
            #3 Some section
        </div>
        <div class="w-full h-screen bg-secondary-700 section">
            #4 Some section
        </div>
        <div class="w-full h-screen bg-secondary-700 section">
            #5 Some section
        </div>
        <div class="w-full h-screen bg-secondary-600 section">
            #6 Some section
        </div>
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
