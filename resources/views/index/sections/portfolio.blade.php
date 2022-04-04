<div id="portfolio-section" class="w-full h-screen bg-secondary section">
    <div class="absolute top-0 z-10 w-full h-24 pl-6 flex justify-start items-end">
        <h1 class="absolute left-4 -top-2 font-bold century-gothic text-8xl text-gray-300/10">02</h1>
        <div class="flex flex-col">
            <h2 class="text-4xl font-bold underline decoration-primary-500">{{__("messages.homepage.portfolio.title")}}</h2>
        </div>
    </div>
    <div
        class="after:content-[''] after:absolute laptop:after:left-24 desktop:after:left-36 after:top-32 after:bg-no-repeat after:bg-cross after:w-24 after:h-24"></div>
    <div
        class="after:content-[''] after:absolute after:left-24 after:bottom-10 after:bg-no-repeat after:bg-circle after:w-10 after:h-10"></div>
    <div
        class="after:content-[''] after:absolute laptop:after:right-16 desktop:after:right-48 after:top-12 after:bg-no-repeat after:bg-triangle after:w-24 after:h-28"></div>

    <div class="flex relative justify-center items-center">
        <div class="relative flex justify-between items-center laptop:w-3/4 h-full">
            <div class="absolute -left-16 rotate-180">
                <img src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
            </div>
            <div class="flex flex-col gap-y-12">
                <div class="flex flex-row gap-x-24">
                    <div class="relative flex-1 flex flex-col py-16">
                        <div class="laptop:w-3/4">

                            <h3 class="font-bold text-2xl pb-6">Lorem ipsum dolor sit amet, consectetur adipiscing
                                elit.</h3>
                            <p class="font-light text-base pb-10">Donec sollicitudin ullamcorper mi sit amet feugiat.
                                Integer egestas fermentum libero, ullamcorper lacinia augue luctus ut. Aliquam eget odio
                                quis nunc volutpat hendrerit a viverra nibh. Aenean fermentum tellus sit amet quam
                                scelerisque, quis ultricies quam euismod. Nulla risus risus, varius eget ex eu, accumsan
                                interdum nibh. Aenean scelerisque eros quam, ac dapibus justo porttitor non…</p>
                            <a href=""
                               class="inline-flex w-fit justify-center space-x-2 items-center primary-background primary-background-hover transition-all z-20 text-lg border border-primary-200 rounded-full px-4 py-2 backdrop-blur">
                                <p>{{__("messages.homepage.portfolio.slider.read_more")}}</p>
                                <img class="scale-50" src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
                            </a>
                        </div>
                    </div>
                    <div class="relative flex-1 w-auto overflow-hidden rounded-lg h-auto">
                        <div
                            class="absolute flex justify-center items-center top-4 right-4 rounded-full bg-black/75 w-10 h-10 border border-white">
                            <svg viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
                                <line x1="20" y1="55" x2="60" y2="30" stroke="white" stroke-width="2"
                                      stroke-linecap="round"/>
                                <line x1="35" y1="39" x2="20" y2="29" stroke="white" stroke-width="2"
                                      stroke-linecap="round"/>
                                <line x1="60" y1="57" x2="45" y2="47" stroke="white" stroke-width="2"
                                      stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div>
                            <img class="w-auto object-center object-cover h-full" src="{{ asset('assets/files/images/landing/background.jpg') }}">
                            <div class="w-auto h-full bg-gray-100/25"></div>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto flex flex-row justify-center items-center gap-x-4">
                    <ul class="flex flex-row justify-center items-center gap-x-4">
                        <li id="run" class="h-8 w-8 p-0.5 flex justify-center items-center">
                            <svg class="transition-all -rotate-90" id="circle" y="0" x="0" width="100%" height="100%"
                                 viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <circle id="outline" fill="none" stroke-width="1" stroke="#fff" stroke-linecap="round"
                                        cx="10" cy="10" r="9"/>
                                <circle class="stroke-primary-500" id="inline" fill="none" stroke-width="1.75"
                                        stroke-linecap="round" cx="10" cy="10" r="9"/>
                            </svg>
                        </li>
                        <li class="group h-8 w-8 p-0.5 flex justify-center items-center">
                            <div
                                class="h-1 w-1 group-hover:h-2 group-hover:w-2 transition-all rounded-full bg-white border-2 border-white"></div>
                        </li>
                        <li class="group h-8 w-8 p-0.5 flex justify-center items-center">
                            <div
                                class="h-1 w-1 group-hover:h-2 group-hover:w-2 transition-all rounded-full bg-white border-2 border-white"></div>
                        </li>
                        <li class="group h-8 w-8 p-0.5 flex justify-center items-center">
                            <div
                                class="h-1 w-1 group-hover:h-2 group-hover:w-2 transition-all rounded-full bg-white border-2 border-white"></div>
                        </li>
                    </ul>
                    <div class="bg-white h-px rounded-full w-24"></div>
                    <a href="#" class="text-lg">{{ __("messages.homepage.portfolio.slider.view_all") }}</a>
                </div>
            </div>
            <div class="absolute -right-16">
                <img src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
            </div>
        </div>
    </div>
</div>
