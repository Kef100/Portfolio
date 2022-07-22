<div class="w-full h-full bg-secondary-700 section fp-auto-height">
    <svg class="absolute -bottom-px" x="0" y="0" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
        <pattern class="stroke-secondary-600" id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="6" patternTransform="rotate(-45 2 2)">
            <path d="M -1,2 l 6,0" stroke-width="1"/>
        </pattern>

        <rect fill="#111111" x="0" y="0" width="100%" height="100%"></rect>
        <rect fill="url(#diagonalHatch)" x="0" y="0" width="100%" height="100%"></rect>
    </svg>
    <svg class="absolute fill-secondary rotate-180 -top-px" x="0" y="0" width="100%" height="110" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,33L40,33C80,33,160,33,240,40.3C320,48,400,62,480,67.8C560,73,640,70,720,73.3C800,77,880,88,960,84.3C1040,81,1120,62,1200,49.5C1280,37,1360,29,1440,33C1520,37,1600,51,1680,55C1760,59,1840,51,1920,44C2000,37,2080,29,2160,29.3C2240,29,2320,37,2400,49.5C2480,62,2560,81,2640,73.3C2720,66,2800,33,2880,33C2960,33,3040,66,3120,75.2C3200,84,3280,70,3360,66C3440,62,3520,70,3600,75.2C3680,81,3760,84,3840,86.2C3920,88,4000,88,4080,82.5C4160,77,4240,66,4320,62.3C4400,59,4480,62,4560,60.5C4640,59,4720,51,4800,42.2C4880,33,4960,22,5040,25.7C5120,29,5200,48,5280,58.7C5360,70,5440,73,5520,66C5600,59,5680,40,5720,31.2L5760,22L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"></path>
    </svg>
    <div class="xl:px-40 flex flex-col gap-y-20 justify-center items-center pt-16 pb-4 lg:px-20 md:px-10 sm:px-5 px-10">
        <div class="w-5/6 z-10 pt-12 grid gap-14 laptop:grid-cols-4 grid-cols-1 sm:grid-cols-1 justify-start">
            <div class="w-full flex flex-col gap-y-6">
                <div class="w-fit bg-secondary-600 p-2 rounded-md">
                    @include('shared.logo.logo')
                </div>
                <p class="text-lg laptop:w-3/4">
                    {!! __("messages.footer.subtitle", ['url' => "https://mrsmith.nl"]) !!}
                </p>
            </div>
            <div class="w-full flex flex-col gap-y-2">
                <h3 class="text-xl uppercase text-primary-500">{{ __("messages.footer.projects.title") }}</h3>
                <div class="pl-2 flex flex-col space-y-2">
                    @for($i = 1; $i <= 5; $i++)
                        <a href="#" class="w-fit flex inline-flex gap-x-2 items-center text-white text-lg group pl-2 hover:pl-3 transition-all">
                            <svg class="w-4 h-4 fill-white group-hover:fill-white/50 transition-all"  xmlns="http://www.w3.org/2000/svg" width="16.016" height="32.031" viewBox="0 0 16.016 32.031">
                                <path d="M14.55,19.113,0,32.031,8.008,16.016,0,0,14.55,12.919a4.005,4.005,0,0,1,0,6.194Z"/>
                            </svg>
                            <p class="group-hover:text-white/50 transition-all delay-100">Project #{{$i}}</p>
                        </a>
                    @endfor
                </div>
            </div>
            <div class="w-full flex flex-col">
                <h3 class="text-xl uppercase text-primary-500">{{ __("messages.footer.socials.title") }}</h3>
                <div class="flex flex-col space-y-2">
                    @for($i = 1; $i <= 5; $i++)
                        <a href="#" class="w-fit flex inline-flex gap-x-2 items-center text-white text-lg group pl-2 hover:pl-3 transition-all">
                            <svg class="w-4 h-4 fill-white group-hover:fill-white/50 transition-all"  xmlns="http://www.w3.org/2000/svg" width="16.016" height="32.031" viewBox="0 0 16.016 32.031">
                                <path d="M14.55,19.113,0,32.031,8.008,16.016,0,0,14.55,12.919a4.005,4.005,0,0,1,0,6.194Z"/>
                            </svg>
                            <p class="group-hover:text-white/50 transition-all delay-100">Social #{{$i}}</p>
                        </a>
                    @endfor
                </div>
            </div>
            <div class="w-full flex flex-col">
                <h3 class="text-xl uppercase text-primary-500">{{ __("messages.footer.pages.title") }}</h3>
                <div class="pl-2 flex flex-col space-y-2">
                    @for($i = 1; $i <= 5; $i++)
                        <a href="#" class="w-fit flex inline-flex gap-x-2 items-center text-white text-lg group pl-2 hover:pl-3 transition-all">
                            <svg class="w-4 h-4 fill-white group-hover:fill-white/50 transition-all"  xmlns="http://www.w3.org/2000/svg" width="16.016" height="32.031" viewBox="0 0 16.016 32.031">
                                <path d="M14.55,19.113,0,32.031,8.008,16.016,0,0,14.55,12.919a4.005,4.005,0,0,1,0,6.194Z"/>
                            </svg>
                            <p class="group-hover:text-white/50 transition-all delay-100">Page #{{$i}}</p>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center z-10">
            <p class="font-bold text-lg tracking-wide"><span class="text-xl">&copy;</span> Copyright <span id="copyright" class="text-primary-500 text-2xl "></span>  All rights reserved</p>
        </div>
    </div>
</div>
