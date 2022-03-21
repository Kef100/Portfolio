<div class="w-full h-full bg-secondary-700 section fp-auto-height">
    <div class="after:content-[''] after:absolute after:left-36 after:top-24 after:bg-no-repeat after:bg-triangle after:w-24 after:h-28"></div>
    <div class="after:content-[''] after:absolute after:left-24 after:-bottom-4 after:bg-no-repeat after:bg-cross after:w-24 after:h-24"></div>
    <div class="after:content-[''] after:absolute after:right-24 after:top-12 after:bg-no-repeat after:bg-circle after:w-10 after:h-10"></div>
    <div class="flex flex-col gap-y-24 pb-24 justify-center items-center">
        <div class="flex justify-center gap-y-2 items-center flex-col">
            <h2 class="font-bold text-5xl">{{ __("messages.homepage.preferences.what_i_enjoy") }}</h2>
            <h2 class="text-stone-500 text-4xl">{{ __("messages.homepage.preferences.tasks_i_love") }}</h2>
        </div>

        {{--        TODO: Foreach interests--}}
        <div class="flex flex-row w-3/4 space-x-16 h-auto justify-evenly items-center">
            <div class="flex flex-col gap-y-4 secondary-background border border-gray-200 px-10 py-6 rounded-md backdrop-blur w-full h-auto">
                <div class="rounded-full flex justify-center items-center p-3 h-14 w-14 primary-background border border-primary">
                    <img class="select-none w-12 h-12 pointer-events-none" src="{{ asset('assets/files/images/landing/icons/triangle ruler.svg')}}" alt="ruler">
                </div>
                <div class="w-full h-1 bg-white rounded-full">
                    <div class="w-1/2 rounded-full h-full bg-gradient-to-r from-primary-500 to-primary-600"></div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-2xl font-bold">{{ __("messages.homepage.preferences.website_design.title") }}</h3>
                    <p class="text-stone-300">{{ __("messages.homepage.preferences.website_design.text") }}</p>
                </div>
            </div>
            <div class="flex flex-col gap-y-4 secondary-background border border-gray-200 px-10 py-6 rounded-md backdrop-blur w-full h-auto">
                <div class="rounded-full flex justify-center items-center p-3 h-14 w-14 primary-background border border-primary">
                    <img class="select-none w-12 h-12 pointer-events-none" src="{{ asset('assets/files/images/landing/icons/terminal.svg')}}" alt="terminal">
                </div>
                <div class="w-full h-1 bg-white rounded-full">
                    <div class="w-1/2 rounded-full h-full bg-gradient-to-r from-primary-500 to-primary-600"></div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-2xl font-bold">{{ __("messages.homepage.preferences.programming.title") }}</h3>
                    <p class="text-stone-300">{{ __("messages.homepage.preferences.programming.text") }}</p>
                </div>
            </div>
            <div class="flex flex-col gap-y-4 secondary-background border border-gray-200 px-10 py-6 rounded-md backdrop-blur w-full h-auto">
                <div class="rounded-full flex justify-center items-center p-3 h-14 w-14 primary-background border border-primary">
                    <img class="select-none w-12 h-12 pointer-events-none" src="{{ asset('assets/files/images/landing/icons/puzzle.svg')}}" alt="puzzle">
                </div>
                <div class="w-full h-1 bg-white rounded-full">
                    <div class="w-1/2 rounded-full h-full bg-gradient-to-r from-primary-500 to-primary-600"></div>
                </div>
                <div class="flex flex-col gap-y-2">
                    <h3 class="text-2xl font-bold">{{ __("messages.homepage.preferences.creating_components.title") }}</h3>
                    <p class="text-stone-300">{{ __("messages.homepage.preferences.creating_components.text") }}</p>
                </div>
            </div>
        </div>
    </div>
</div>

{{--    <svg class="w-full h-auto -bottom-0 fixed z-10" x="0" y="0" width="100%" height="100%"--}}
{{--         viewBox="0 0 1440 320">--}}
{{--        <pattern class="stroke-secondary-600" id="diagonalHatch" patternUnits="userSpaceOnUse" width="4"--}}
{{--                 height="6" patternTransform="rotate(-45 2 2)">--}}
{{--            <path d="M -1,2 l 6,0" stroke-width="1"/>--}}
{{--        </pattern>--}}

{{--        <path fill="#111111"--}}
{{--              d="M 0 230 C 71 299 204 306 320 278 C 497 226 502 239 594 262 C 749 312 865 306 1135 293 C 1248 282 1319 286 1440 232 L 1440 320 L 1405.7 320 C 1371.4 320 1303 320 1234 320 C 1165.7 320 1097 320 1029 320 C 960 320 891 320 823 320 C 754.3 320 686 320 617 320 C 548.6 320 480 320 411 320 C 342.9 320 274 320 206 320 C 137.1 320 69 320 34 320 L 0 320 Z"></path>--}}
{{--        <path fill="url(#diagonalHatch)"--}}
{{--              d="M 0 230 C 71 299 204 306 320 278 C 497 226 502 239 594 262 C 749 312 865 306 1135 293 C 1248 282 1319 286 1440 232 L 1440 320 L 1405.7 320 C 1371.4 320 1303 320 1234 320 C 1165.7 320 1097 320 1029 320 C 960 320 891 320 823 320 C 754.3 320 686 320 617 320 C 548.6 320 480 320 411 320 C 342.9 320 274 320 206 320 C 137.1 320 69 320 34 320 L 0 320 Z"></path>--}}
{{--    </svg>--}}

{{--    -bottom-[0.53rem]--}}

{{--<svg class="w-full z-10 fill-secondary" viewBox="0 0 1440 320">--}}
{{--    <path d="M 0 230 C 71 299 204 306 320 278 C 497 226 502 239 594 262 C 749 312 865 306 1135 293 C 1248 282 1319 286 1440 232 L 1440 320 L 1405.7 320 C 1371.4 320 1303 320 1234 320 C 1165.7 320 1097 320 1029 320 C 960 320 891 320 823 320 C 754.3 320 686 320 617 320 C 548.6 320 480 320 411 320 C 342.9 320 274 320 206 320 C 137.1 320 69 320 34 320 L 0 320 Z"></path>--}}
{{--</svg>--}}
