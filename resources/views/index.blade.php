@extends('layouts.default')

<script src="{{ asset('assets/js/preloader.js') }}" defer></script>

@section('content')
    <div id="preloader">
        <div class="container">

            <div class="logo">
                <img src="{{ asset('assets/files/branding/logo.svg')  }}">
            </div>

            <div class="preloader-group">
                <div class="loader-container">
                    <div class="background">
                        <img src="{{ asset("assets/files/images/preloader/bg.svg") }}" alt="bg">
                    </div>
                    <div class="lines">
                        <img src="{{ asset("assets/files/images/preloader/lines.svg") }}" alt="lines">
                    </div>
                    <div class="shapes">
                        <div class="triangle">
                            <img src="{{ asset("assets/files/images/preloader/shapes/triangle.svg") }}" alt="triangle">
                        </div>
                        <div class="square">
                            <img src="{{ asset("assets/files/images/preloader/shapes/square.svg") }}" alt="square">
                        </div>
                        <div class="rectangle">
                            <img src="{{ asset("assets/files/images/preloader/shapes/rectangle.svg") }}" alt="rectangle">
                        </div>
                        <div class="circle">
                            <img src="{{ asset("assets/files/images/preloader/shapes/circle.svg") }}" alt="circle">
                        </div>
                    </div>
                </div>

                <div class="progress">
                    <div id="bar" class="bar">
                        <div id="percentage" class="percentage"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
