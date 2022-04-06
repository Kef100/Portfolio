<div id="preloader" class="h-full w-full relative bg-secondary-500">
    <div class="container">
        <div class="grid pt-10 w-full h-full">
            <div class="flex relative w-full h-full justify-center items-center">
                <div class="laptop:scale-110 desktop:scale-150 relative pointer-events-none select-none z-10">
                    <img src="{{ asset("assets/files/images/preloader/bg.svg") }}" alt="bg">
                </div>
                <div class="laptop:scale-110 desktop:scale-150 fixed pointer-events-none select-none z-20">
                    <img src="{{ asset("assets/files/images/preloader/lines.svg") }}" alt="lines">
                </div>
                <div class="fixed z-50 pointer-event-none select-none">
                    <svg class="spin" height="320" width="320">
                        <circle cx="160" cy="160" r="150" stroke="#857852" stroke-width="7" fill="transparent" />
                    </svg>
                </div>
                <div class="fixed z-40 pointer-event-none select-none">
                    <svg height="320" width="320">
                        <circle cx="160" cy="160" r="150" stroke="#404040" stroke-width="7" fill="transparent" />
                    </svg>
                </div>
                <div class="fixed z-30 pointer-events-none select-none">
                    @include('shared.logo.logo')
                </div>
            </div>

            <div class="relative flex flex-col justify-center items-center left-1/2 top-1/2 gap-8 -translate-x-1/2 -translate-y-1/2">
                <div id="bar" class="rounded-md bg-accent-500 w-5/12 h-1.5">
                    <div id="percentage" class="w-0 h-full rounded-md bg-primary-500"></div>
                </div>

                <svg class="typing" xmlns="http://www.w3.org/2000/svg" width="35" height="12">
                    <g transform="translate(-1176 -60.907)">
                        <circle cx="5" cy="5" r="4" transform="translate(1176 60.907)" fill="#fff"></circle>
                        <circle cx="5" cy="5" r="4" transform="translate(1187 60.907)" fill="#c5c5c5"></circle>
                        <circle cx="5" cy="5" r="4" transform="translate(1198 60.907)" fill="#b4b4b4"></circle>
                    </g>
                </svg>
            </div>
        </div>

    </div>
</div>
