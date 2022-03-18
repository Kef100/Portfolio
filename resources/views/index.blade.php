@extends('layouts.default')

<script src="{{ asset('assets/js/preloader.js') }}" defer></script>

@section('content')

    <div id="fullpage">
        <div class="w-full h-screen section bg-landing bg-contain bg-[length:auto_100%]">
            #1 Some section
        </div>
        <div class="w-full h-screen bg-primary-900 section">#2 Some section</div>
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
