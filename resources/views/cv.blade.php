@extends('layouts.default')
<script src="{{ asset("assets/js/cv.js") }}" defer></script>
@section('content')
    <div class="flex flex-row min-h-[200vh]">
        <div class="sticky h-screen w-auto flex flex-col top-0 left-0 bg-secondary-500">
            <div class="flex flex-col items-center bg-secondary-400">
                <div
                    class="bg-secondary-700 rounded-full max-w-fit h-auto my-4 mx-10 overflow-hidden shadow-inner shadow-md shadow-secondary-900">
                    <img src="{{ asset('assets/files/images/profile/profile.png') }}" alt="picture of me">
                </div>
                <div class="flex flex-col my-2 items-center">
                    <h2 class="font-bold text-xl">Kevin Vink</h2>
                    <h3 class="text-white/75">{{ __("messages.cv.roles.developer") }}</h3>
                    <h3 class="text-white/75">{{ __("messages.cv.roles.designer") }}</h3>
                </div>
            </div>
            <div class="flex flex-col w-full h-full px-6 my-2 justify-evenly">
                <div>
                    <div class="flex flex-col gap-y-2 my-4">
                        <div class="flex justify-between">
                            <p>{{ __("messages.cv.information.residence.title") }}:</p>
                            <p class="text-white/50">{{ __("messages.cv.information.residence.text") }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>{{ __("messages.cv.information.province.title") }}:</p>
                            <p class="text-white/50">{{ __("messages.cv.information.province.text") }}</p>
                        </div>
                        <div class="flex justify-between">
                            <p>{{ __("messages.cv.information.age") }}:</p>
                            <p class="text-white/50 text-xl" id="age"></p>
                        </div>
                    </div>
                    <hr class="border-secondary-200">
                </div>
                <div>
                    <div class="flex items-center justify-center gap-x-4 my-4">
                        <div class="flex flex-col items-center w-full h-full gap-y-2">
                            <div
                                class="flex w-14 h-14 justify-center items-center border-2 border-primary-500 rounded-full text-sm">
                                B2/C1
                            </div>
                            {{ __("messages.languages.en") }}
                        </div>
                        <div class="flex flex-col items-center w-full h-full gap-y-2">
                            <div
                                class="flex w-14 h-14 justify-center items-center border-2 border-primary-500 rounded-full text-sm">
                                C2
                            </div>
                            {{ __("messages.languages.nl") }}
                        </div>
                        <div class="flex flex-col items-center w-full h-full gap-y-2">
                            <div
                                class="flex w-14 h-14 justify-center items-center border-2 border-primary-500 rounded-full text-sm">
                                A2/B1
                            </div>
                            {{ __("messages.languages.de") }}
                        </div>
                    </div>
                    <hr class="border-secondary-200">
                </div>
                <div>
                    <div class="flex gap-x-4 my-8">
                        <div class="flex flex-col w-full h-full gap-y-5">
                            <div class="w-full h-full border-b-2 border-primary">HTML</div>
                            <div class="w-full h-full border-b-2 border-primary">CSS</div>
                            <div class="w-full h-full border-b-2 border-primary">JAVASCRIPT</div>
                            <div class="w-full h-full border-b-2 border-primary">REACT</div>
                            <div class="w-full h-full border-b-2 border-primary">LARAVEL</div>
                            <div class="w-full h-full border-b-2 border-primary">JAVA</div>
                            <div class="w-full h-full border-b-2 border-primary">C#</div>
                        </div>
                    </div>
                    <hr class="border-secondary-200">
                </div>
                <div>
                    <div class="flex flex-col gap-y-3 my-4">
                        <p class="flex items-center gap-x-2"><i class="text-primary fa-solid fa-check"></i> Javascript Frameworks</p>
                        <p class="flex items-center gap-x-2"><i class="text-primary fa-solid fa-check"></i> GIT</p>
                        <p class="flex items-center gap-x-2"><i class="text-primary fa-solid fa-check"></i> OOPD Development</p>
                        <p class="flex items-center gap-x-2"><i class="text-primary fa-solid fa-check"></i> MVC Frameworks</p>
                    </div>
                    <hr class="border-secondary-200">
                </div>
                <p class="uppercase flex items-center text-gray-300 gap-x-2">Download CV <i class="fa-solid fa-download"></i></p>
            </div>
            <div class="bg-secondary-400 w-full p-4">
                <div class="flex justify-evenly text-xl">
                    <a href="#"><i class="text-white/75 fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="text-white/75 fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="text-white/75 fa-solid fa-paper-plane"></i></a>
                    <a href="#"><i class="text-white/75 fa-brands fa-github"></i></a>
                </div>
            </div>
        </div>
        <div class="relative w-full min-h-screen h-full bg-secondary-700">
            <div class="flex flex-col gap-y-6 mx-32 my-10">
                <div class="relative w-full rounded-t-2xl overflow-hidden h-full bg-landing bg-cover bg-bottom">
                    <div class="p-6 flex gap-x-10">
                        <div class="w-full h-full flex gap-x-10">
                            <img class="w-16 self-start z-20" src="{{ asset("assets/files/branding/favicon.svg") }}" alt="road to mountains">
                            <div class="flex flex-col justify-between gap-y-10 mt-16">
                                <h1 class="text-6xl font-bold z-20">Discover the road <br> of my Career!</h1>
                                <h4 id="typewriter" class="text-2xl z-20 typewriter">&lt;<span class="text-primary-300">code</span>&gt; I build websites and software &lt;/<span class="text-primary-300">code</span>&gt;</h4>
                                <a href="{{ url("/projects") }}"
                                   class="z-20 primary-background primary-background-hover w-fit inline-flex gap-x-2 hover:gap-x-6 transition-all z-20 laptop:text-lg desktop:text-xl border border-primary-500 rounded-full px-8 py-2 backdrop-blur">
                                   Explore now!
                                    -
                                </a>
                            </div>
                        </div>
{{--                        <img class="w-full h-full z-20" src="{{ asset("assets/files/images/profile/profile-standing.png") }}" alt="picture of me standing"/>--}}
                    </div>
                    <div class="absolute top-0 left-0 w-full h-full bg-black/25 z-10 backdrop-blur-sm"></div>
                </div>
            </div>
        </div>
        <div class="sticky flex flex-col right-0 top-0 w-auto min-h-screen h-full bg-secondary-500">
            <a class="group" href="{{ url("/") }}">
                <div class="p-4 text-2xl text-white/50 group-hover:text-white/25 transition-all bg-secondary-400">
                    <i class="fa-solid fa-house"></i>
                </div>
                <div class="text-xl mt-7 text-secondary-100 group-hover:text-secondary-200 transition-all transform rotate-90">
                    HOME
                </div>
            </a>
        </div>
    </div>
@endsection
