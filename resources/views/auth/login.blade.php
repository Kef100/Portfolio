@extends('layouts.admin')

@section('content')
    <div class="relative flex items-top justify-center min-h-screen">
        <div class="relative min-h-screen w-2/6 float-left">
            <div class="container flex justify-center items-center flex-col w-8/12 my-0 mx-auto h-full">
                <div class="tablet:w-3/4 absolute top-0">
                    <img class="laptop:w-20" src="{{asset('assets/files/branding/logo-banner.svg')}}" alt="Qubiqx logo">
                </div>
                <h2 class="mt-8 font-bold laptop:text-xl desktop:text-2xl">Portfolio Dashboard</h2>
                <form class="mt-6 flex flex-col space-y-4 w-full items-center justify-center" method="POST"
                      action="{{ route('login') }}">
                    @csrf
                    <div class="tablet:w-3/4">
                        <label for="email" class="text-left">Email <span class="text-red-500">*</span></label>

                        <input id="email" type="email"
                               class="w-full p-2 border border-gray-500 text-black rounded-md"
                               placeholder="example@email.com"
                               name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="text-red-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="tablet:w-3/4">
                        <label for="password">Wachtwoord <span class="text-red-500">*</span></label>

                        <input id="password" type="password"
                               placeholder="your password"
                               class="w-full p-2 border border-gray-500 text-black rounded-md"
                               name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="text-red-600" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="tablet:w-3/4">
                        <div class="form-check flex items-center">
                            <input class="form-check-input w-4 h-4 mr-1" type="checkbox" name="remember"
                                   id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __("messages.admin.remember") }}
                            </label>
                        </div>
                    </div>
                    <div>
                        <button type="submit"
                                class="relative capitalize inline-flex z-20 w-fit justify-center space-x-2 items-center primary-background primary-background-hover transition-all z-20 desktop:text-lg border border-primary-200 rounded-full px-10 py-2 backdrop-blur">
                            <p>{{__("messages.admin.login")}}</p>
                            <img class="scale-50"
                                 src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
                        </button>
                    </div>
                </form>
            </div>
            <svg class="absolute z-[-1] bottom-0 left-0" x="0" y="0" width="100%" height="100%"
                 xmlns="http://www.w3.org/2000/svg">
                <pattern class="stroke-secondary-600" id="diagonalHatch" patternUnits="userSpaceOnUse" width="4"
                         height="6" patternTransform="rotate(-45 2 2)">
                    <path d="M -1,2 l 6,0" stroke-width="1"/>
                </pattern>

                <rect fill="#111111" x="0" y="0" width="100%" height="100%"></rect>
                <rect fill="url(#diagonalHatch)" x="0" y="0" width="100%" height="100%"></rect>
            </svg>

            <p class="absolute left-1/2 -translate-x-1/2 bottom-2">&copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                by Kevin Vink
            </p>
        </div>
        <div class="min-h-full w-4/6 float-left">
            <video class="min-h-screen w-full object-cover" autoplay muted loop>
                <source src="{{ asset("assets/files/videos/login_screen.mp4") }}" type="video/mp4">
            </video>
        </div>
    </div>

@endsection
