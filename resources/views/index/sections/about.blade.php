<div class="w-full h-screen bg-about bg-right bg-cover section overflow-hidden bg-[length:105%]">
    <div class="absolute -top-px bg-secondary z-10 w-full h-20 pl-6 flex justify-start items-end">
        <h1 class="absolute left-4 -top-2 font-bold century-gothic text-8xl text-gray-300/10">01</h1>
        <div class="flex flex-col">
            <h2 class="text-4xl font-bold underline decoration-primary-500">{{__("messages.homepage.about.title")}}</h2>
        </div>
    </div>
    <svg class="absolute fill-secondary rotate-180 top-16" x="0" y="0" width="100%" height="110"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0,33L40,33C80,33,160,33,240,40.3C320,48,400,62,480,67.8C560,73,640,70,720,73.3C800,77,880,88,960,84.3C1040,81,1120,62,1200,49.5C1280,37,1360,29,1440,33C1520,37,1600,51,1680,55C1760,59,1840,51,1920,44C2000,37,2080,29,2160,29.3C2240,29,2320,37,2400,49.5C2480,62,2560,81,2640,73.3C2720,66,2800,33,2880,33C2960,33,3040,66,3120,75.2C3200,84,3280,70,3360,66C3440,62,3520,70,3600,75.2C3680,81,3760,84,3840,86.2C3920,88,4000,88,4080,82.5C4160,77,4240,66,4320,62.3C4400,59,4480,62,4560,60.5C4640,59,4720,51,4800,42.2C4880,33,4960,22,5040,25.7C5120,29,5200,48,5280,58.7C5360,70,5440,73,5520,66C5600,59,5680,40,5720,31.2L5760,22L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"></path>
    </svg>
    <div class="flex justify-around items-center w-full h-full laptop:pt-32">
        <div class="flex-1 relative">
            <img src="{{ asset('assets/files/images/arrows/path.svg') }}">
            <div class="absolute left-44 -bottom-1.5 pulse bg-primary border border-white rounded-full w-4 h-4"></div>
        </div>
        <div class="flex-1 relative z-20">
            <div class="w-2/3 mb-6 flex flex-col gap-y-4 bg-secondary-700/75 p-8 backdrop-blur-sm rounded-md">
                <div class="flex flex-row justify-between">
                    <h3 class="uppercase laptop:text-4xl desktop:text-6xl font-bold">{{__("messages.homepage.about.content_title.start")}}
                        <br> <span
                            class="outlined-white">{{__("messages.homepage.about.content_title.outlined")}}</span><br> {{__("messages.homepage.about.content_title.end")}}
                    </h3>
                    <i class="fas fa-info-circle text-lg"></i>
                </div>
                <p class="tracking-wide overflow-hidden laptop:leading-5 desktop:leading-normal">{{__("messages.homepage.about.content.text")}}</p>
                <div class="h-[3px] bg-white rounded-full"></div>
                <div class="flex flex-row justify-between items-center">
                    <div class="flex flex-col text-lg">
                        <p class="font-light tracking-wide">{{__("messages.homepage.about.content.experienced_in.title")}}</p>
                        <p class="font-bold">{{__("messages.homepage.about.content.experienced_in.text")}}</p>
                    </div>
                    <div class="flex flex-col text-lg">
                        <p class="font-light tracking-wide">{{__("messages.homepage.about.content.years_of_experience.title")}}</p>
                        <p class="font-bold">{{__("messages.homepage.about.content.years_of_experience.text")}}</p>
                    </div>
                    <div class="flex flex-col text-lg">
                        <p class="font-light tracking-wide">{{__("messages.homepage.about.content.education.title")}}</p>
                        <p class="font-bold">{{__("messages.homepage.about.content.education.text")}}</p>
                    </div>

                </div>
            </div>
            <a href="{{ url("/cv") }}"
               class="inline-flex w-fit justify-center mb-6 space-x-2 items-center primary-background primary-background-hover transition-all z-20 laptop:text-lg desktop:text-2xl border border-primary-200 rounded-full laptop:px-4 desktop:px-8 py-2 backdrop-blur">
                <p>{{__("messages.homepage.about.cv")}}</p>
                <img class="scale-75" src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
            </a>
        </div>
    </div>
    <svg class="absolute fill-secondary -bottom-px" x="0" y="0" width="100%" height="110"
         xmlns="http://www.w3.org/2000/svg">
        <path
            d="M0,33L40,33C80,33,160,33,240,40.3C320,48,400,62,480,67.8C560,73,640,70,720,73.3C800,77,880,88,960,84.3C1040,81,1120,62,1200,49.5C1280,37,1360,29,1440,33C1520,37,1600,51,1680,55C1760,59,1840,51,1920,44C2000,37,2080,29,2160,29.3C2240,29,2320,37,2400,49.5C2480,62,2560,81,2640,73.3C2720,66,2800,33,2880,33C2960,33,3040,66,3120,75.2C3200,84,3280,70,3360,66C3440,62,3520,70,3600,75.2C3680,81,3760,84,3840,86.2C3920,88,4000,88,4080,82.5C4160,77,4240,66,4320,62.3C4400,59,4480,62,4560,60.5C4640,59,4720,51,4800,42.2C4880,33,4960,22,5040,25.7C5120,29,5200,48,5280,58.7C5360,70,5440,73,5520,66C5600,59,5680,40,5720,31.2L5760,22L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"></path>
    </svg>
</div>
