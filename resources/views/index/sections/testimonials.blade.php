<div class="w-full h-screen bg-testimonials bg-right bg-cover section overflow-hidden">
    <div class="absolute -top-px bg-secondary z-10 w-full h-20 pl-6 flex justify-start items-end">
        <h1 class="absolute left-4 -top-2 font-bold century-gothic text-8xl text-gray-300/10">03</h1>
        <div class="flex flex-col">
            <h2 class="text-4xl font-bold underline decoration-primary-500">{{__("messages.homepage.testimonials.heading")}}</h2>
        </div>
    </div>
    <svg class="absolute fill-secondary rotate-180 top-16" x="0" y="0" width="100%" height="110"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0,33L40,33C80,33,160,33,240,40.3C320,48,400,62,480,67.8C560,73,640,70,720,73.3C800,77,880,88,960,84.3C1040,81,1120,62,1200,49.5C1280,37,1360,29,1440,33C1520,37,1600,51,1680,55C1760,59,1840,51,1920,44C2000,37,2080,29,2160,29.3C2240,29,2320,37,2400,49.5C2480,62,2560,81,2640,73.3C2720,66,2800,33,2880,33C2960,33,3040,66,3120,75.2C3200,84,3280,70,3360,66C3440,62,3520,70,3600,75.2C3680,81,3760,84,3840,86.2C3920,88,4000,88,4080,82.5C4160,77,4240,66,4320,62.3C4400,59,4480,62,4560,60.5C4640,59,4720,51,4800,42.2C4880,33,4960,22,5040,25.7C5120,29,5200,48,5280,58.7C5360,70,5440,73,5520,66C5600,59,5680,40,5720,31.2L5760,22L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"></path>
    </svg>
    <div class="flex flex-col gap-y-24 py-40 h-full justify-between items-center">
        <div class="flex justify-center z-10 gap-y-2 items-center flex-col">
            <h2 class="font-bold laptop:text-4xl desktop:text-5xl">{{ __("messages.homepage.testimonials.title") }}</h2>
            <h2 class="text-gray-300 laptop:text-3xl desktop:text-4xl">{{ __("messages.homepage.testimonials.subtitle") }}</h2>
        </div>
        <div class="flex flex-col gap-y-12 relative justify-center items-center h-full">
            <div class="relative flex justify-between items-center w-3/5 h-full">
                <div id="previousTestimony" class="absolute -left-16 rotate-180 hover:opacity-60 transition-all cursor-pointer">
                    <img src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
                </div>
                <div id="testimonials" class="flex flex-row items-center gap-x-3perc h-full overflow-x-scroll w-full">
                    @foreach($testimonials as $index => $testimonial)
                        <div onclick="goToTestimony({{$index}})" class="testimony transition-all relative basis-3/10 grow shrink-0 flex-col w-full h-full space-y-4 secondary-alt-background border-2 border-gray-500 px-10 py-6 rounded-3xl backdrop-blur-lg{{$index == 1 ? " active-testimony" : ""}}">
                            <div class="flex flex-col space-y-4">
                                <div>
                                    <div class="relative w-20 h-20 rounded-full border overflow-hidden border-gray-200 bg-gradient-to-br from-primary-300 to-primary-500">
                                        <img class="w-full h-full object-contain pt-2"
                                             src="{{ asset('assets/files/images/uploaded/testimonials/'.$testimonial->image) }}" alt="{{ $testimonial->author }}">
                                    </div>
                                    <div class="flex-1">
                                        <h2 class="italic font-bold text-2xl">{{ $testimonial->author }}</h2>
                                        <p class="text-secondary century-gothic font-black text-xl">{{ $testimonial->expertise }}</p>
                                    </div>
                                </div>

                                <div class="w-full h-1 bg-secondary rounded-full">
                                    <div
                                        class="w-1/2 rounded-full h-full bg-gradient-to-r from-primary-500 to-primary-600"></div>
                                </div>

                                <p class="leading-relaxed font-light text-lg">
                                    <span class="text-primary-400 text-xl engraves-mt">"</span>{{ $testimonial->testimonial }}<span class="text-primary-400 text-xl engraves-mt">"</span>
                                </p>
                            </div>
                            <div class="flex">
                                <h3 class="font-bold century-gothic text-8xl relative text-gray-300/10 transition-all duration-700 ease-in-out">
                                    0{{ $index + 1 }}
                                </h3>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div id="nextTestimony" class="absolute -right-16 hover:opacity-60 transition-all cursor-pointer">
                    <img src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
                </div>
            </div>
            <div class="w-full h-auto flex flex-row justify-center items-center gap-x-4">
                <ul class="flex flex-row justify-center items-center gap-x-4">
                    @for($i = 1; $i <= count($testimonials) / 3; $i++)
                        <li onclick="nextTestimony({{$i}})" class="before:content-[''] before:bg-white before:absolute before:top-1/2 before:left-1/2 before:w-1 before:h-1 before:overflow-hidden before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2
                        relative h-8 w-8 p-0.5 flex justify-center items-center testimony-bullet bullet {{$i == 1 ? " bullet-active" : ""}}">
                            <svg id="circle" y="0" x="0" width="100%" height="100%"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <circle id="outline" fill="none" stroke-width="1" stroke="#fff" stroke-linecap="round"
                                        cx="10" cy="10" r="9"/>
                                <circle class="stroke-primary-500" id="inline" fill="none" stroke-width="1.75"
                                        stroke-linecap="round" cx="10" cy="10" r="9"/>
                            </svg>
                        </li>
                    @endfor
                </ul>
            </div>
            <div>
                <a href="{{ url("/testimonials") }}"
                   class="group inline-flex w-fit justify-center space-x-2 items-center primary-background primary-background-hover transition-all z-20 laptop:text-lg desktop:text-2xl border border-primary-200 rounded-full laptop:px-4 desktop:px-8 py-2 backdrop-blur">
                    <p>{{__("messages.homepage.testimonials.slider.view_all")}}</p>
                    <img class="scale-75 group-hover:pl-2 transition-all"
                         src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
                </a>
            </div>
        </div>
    </div>
    <svg class="absolute fill-secondary -bottom-px" x="0" y="0" width="100%" height="110"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0,33L40,33C80,33,160,33,240,40.3C320,48,400,62,480,67.8C560,73,640,70,720,73.3C800,77,880,88,960,84.3C1040,81,1120,62,1200,49.5C1280,37,1360,29,1440,33C1520,37,1600,51,1680,55C1760,59,1840,51,1920,44C2000,37,2080,29,2160,29.3C2240,29,2320,37,2400,49.5C2480,62,2560,81,2640,73.3C2720,66,2800,33,2880,33C2960,33,3040,66,3120,75.2C3200,84,3280,70,3360,66C3440,62,3520,70,3600,75.2C3680,81,3760,84,3840,86.2C3920,88,4000,88,4080,82.5C4160,77,4240,66,4320,62.3C4400,59,4480,62,4560,60.5C4640,59,4720,51,4800,42.2C4880,33,4960,22,5040,25.7C5120,29,5200,48,5280,58.7C5360,70,5440,73,5520,66C5600,59,5680,40,5720,31.2L5760,22L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"></path>
    </svg>
</div>
