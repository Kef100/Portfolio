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
                        <p class="flex items-center gap-x-2"><i class="text-primary fa-solid fa-check"></i> GIT Knowledge</p>
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
            test
        </div>
        <div class="sticky right-0 top-0 w-auto min-h-screen h-full bg-secondary-500">
            test
        </div>
    </div>
@endsection
