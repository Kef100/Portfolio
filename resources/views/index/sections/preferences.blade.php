<div class="w-full h-full bg-secondary-700 section fp-auto-height">
    <svg class="absolute -bottom-px" x="0" y="0" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg">
        <pattern class="stroke-secondary-600" id="diagonalHatch" patternUnits="userSpaceOnUse" width="4" height="6" patternTransform="rotate(-45 2 2)">
            <path d="M -1,2 l 6,0" stroke-width="1"/>
        </pattern>

        <rect fill="#111111" x="0" y="0" width="100%" height="100%"></rect>
        <rect fill="url(#diagonalHatch)" x="0" y="0" width="100%" height="100%"></rect>
    </svg>
    <div
        class="after:content-[''] after:absolute after:left-36 after:top-24 after:bg-no-repeat after:bg-triangle after:w-24 after:h-28"></div>
    <div
        class="after:content-[''] after:absolute after:left-24 after:bottom-10 after:bg-no-repeat after:bg-cross after:w-24 after:h-24"></div>
    <div
        class="after:content-[''] after:absolute after:right-24 after:top-12 after:bg-no-repeat after:bg-circle after:w-10 after:h-10"></div>
    <div class="flex flex-col gap-y-24 pb-40 justify-center items-center">
        <div class="flex justify-center z-10 gap-y-2 items-center flex-col">
            <h2 class="font-bold laptop:text-4xl desktop:text-5xl">{{ __("messages.homepage.preferences.what_i_enjoy") }}</h2>
            <h2 class="text-stone-500 laptop:text-3xl desktop:text-4xl">{{ __("messages.homepage.preferences.tasks_i_love") }}</h2>
        </div>

        <div class="flex flex-row w-3/4 space-x-16 h-auto justify-evenly items-center">
            @foreach($preferences as $preference)
            <div class="flex flex-col gap-y-4 secondary-background border border-gray-200 px-10 py-6 rounded-md backdrop-blur w-full h-auto">
                <div
                    class="rounded-full flex justify-center items-center p-3 h-14 w-14 primary-background border border-primary">
                    <img class="select-none w-12 h-12 pointer-events-none"
                         src="{{ asset('assets/files/images/landing/icons/' . $preference->icon)}}" alt="ruler">
                </div>
                <div class="w-full h-1 bg-white rounded-full">
                    <div class="w-1/2 rounded-full h-full bg-gradient-to-r from-primary-500 to-primary-600"></div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h3 class="laptop:text-xl desktop:text-2xl font-bold">{{ $preference->title }}</h3>
                    <p class="text-stone-300">{{ $preference->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <svg class="absolute fill-secondary -bottom-px" x="0" y="0" width="100%" height="110"
         xmlns="http://www.w3.org/2000/svg">

        <path
            d="M0,33L40,33C80,33,160,33,240,40.3C320,48,400,62,480,67.8C560,73,640,70,720,73.3C800,77,880,88,960,84.3C1040,81,1120,62,1200,49.5C1280,37,1360,29,1440,33C1520,37,1600,51,1680,55C1760,59,1840,51,1920,44C2000,37,2080,29,2160,29.3C2240,29,2320,37,2400,49.5C2480,62,2560,81,2640,73.3C2720,66,2800,33,2880,33C2960,33,3040,66,3120,75.2C3200,84,3280,70,3360,66C3440,62,3520,70,3600,75.2C3680,81,3760,84,3840,86.2C3920,88,4000,88,4080,82.5C4160,77,4240,66,4320,62.3C4400,59,4480,62,4560,60.5C4640,59,4720,51,4800,42.2C4880,33,4960,22,5040,25.7C5120,29,5200,48,5280,58.7C5360,70,5440,73,5520,66C5600,59,5680,40,5720,31.2L5760,22L5760,110L5720,110C5680,110,5600,110,5520,110C5440,110,5360,110,5280,110C5200,110,5120,110,5040,110C4960,110,4880,110,4800,110C4720,110,4640,110,4560,110C4480,110,4400,110,4320,110C4240,110,4160,110,4080,110C4000,110,3920,110,3840,110C3760,110,3680,110,3600,110C3520,110,3440,110,3360,110C3280,110,3200,110,3120,110C3040,110,2960,110,2880,110C2800,110,2720,110,2640,110C2560,110,2480,110,2400,110C2320,110,2240,110,2160,110C2080,110,2000,110,1920,110C1840,110,1760,110,1680,110C1600,110,1520,110,1440,110C1360,110,1280,110,1200,110C1120,110,1040,110,960,110C880,110,800,110,720,110C640,110,560,110,480,110C400,110,320,110,240,110C160,110,80,110,40,110L0,110Z"></path>
    </svg>
</div>
