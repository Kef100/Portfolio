<div id="portfolio-section" class="w-full h-screen bg-secondary section">
    <div class="absolute top-0 z-10 w-full h-24 pl-6 flex justify-start items-end">
        <h1 class="absolute left-4 -top-2 font-bold century-gothic text-8xl text-gray-300/10">02</h1>
        <div class="flex flex-col">
            <h2 class="text-4xl font-bold underline decoration-primary-500">{{__("messages.homepage.portfolio.title")}}</h2>
        </div>
    </div>
    <div
        class="before:content-[''] before:absolute laptop:before:left-24 desktop:before:left-36 before:top-32 before:bg-no-repeat before:bg-cross before:w-24 before:h-24"></div>
    <div
        class="before:content-[''] before:absolute before:left-24 before:bottom-10 before:bg-no-repeat before:bg-circle before:w-10 before:h-10"></div>
    <div
        class="before:content-[''] before:absolute laptop:before:right-16 desktop:before:right-48 before:top-12 before:bg-no-repeat before:bg-triangle before:w-24 before:h-28"></div>

    <div class="flex relative justify-center items-center">
        <div class="relative flex justify-between items-center w-1/2 h-full">
            <div class="absolute -left-16 rotate-180 hover:opacity-60 transition-all cursor-pointer" id="previousSlide">
                <img src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
            </div>
            <div class="flex flex-col gap-y-12 overflow-hidden w-full">
                <div class="w-full overflow-hidden laptop:min-h-1/2 relative h-full">
                    @foreach($slides as $slide)
                        <div class="flex flex-row absolute portfolio-slide gap-x-24 h-[inherit]"
                             data-slide-duration="{{$slide->duration}}">
                            <div class="slide-content relative flex-1 flex flex-col laptop:py-2 desktop:py-16">
                                <div class="laptop:w-5/6 desktop:w-3/4 relative">

                                    <h3 class="relative font-bold text-2xl pb-6">{{$slide->title}}</h3>
                                    <p class="relative font-light text-base mb-6 laptop:h-1/2 overflow-hidden desktop:h-auto">{{$slide->description}}</p>
                                    <a href=""
                                       class="relative inline-flex z-20 w-fit justify-center space-x-2 items-center primary-background primary-background-hover transition-all z-20 desktop:text-lg border border-primary-200 rounded-full px-4 py-2 backdrop-blur">
                                        <p>{{__("messages.homepage.portfolio.slider.read_more")}}</p>
                                        <img class="scale-50"
                                             src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
                                    </a>
                                </div>
                            </div>
                            <div class="relative flex-1 w-auto overflow-hidden rounded-lg h-full">
                                <div class="h-full w-auto overflow-hidden laptop:min-h-1/2 laptop:max-h-1/2">
                                    <div class="top-cover w-full absolute h-full bg-secondary-600"></div>
                                    <div class="bottom-cover w-full absolute h-full bg-secondary-600"></div>
                                    <img class="slide-img absolute w-full object-center object-cover h-full"
                                         src="{{ asset('assets/files/images/uploaded/slider/' . $slide->image) }}">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>


                <div class="w-full h-auto flex flex-row justify-center items-center gap-x-4">
                    <ul class="flex flex-row justify-center items-center gap-x-4">
                        @foreach($slides as $key => $bullet)
                            <li onclick="goToSlide({{$key + 1}})" class="before:content-[''] before:bg-white before:absolute before:top-1/2 before:left-1/2 before:w-1 before:h-1 before:overflow-hidden before:rounded-full before:-translate-x-1/2 before:-translate-y-1/2
                        relative h-8 w-8 p-0.5 flex justify-center items-center portfolio-bullet bullet-active">
                                <svg id="circle" y="0" x="0" width="100%" height="100%"
                                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <circle id="outline" fill="none" stroke-width="1" stroke="#fff" stroke-linecap="round"
                                            cx="10" cy="10" r="9"/>
                                    <circle class="stroke-primary-500" id="inline" fill="none" stroke-width="1.75"
                                            stroke-linecap="round" cx="10" cy="10" r="9"/>
                                </svg>
                            </li>
                        @endforeach
                    </ul>
                    <div class="bg-white h-px rounded-full w-24"></div>
                    <a href="#" class="text-lg list-none text-white bg-transparent no-underline roll-link">
                        <span class="block relative transition-all"
                              data-title="{{ __("messages.homepage.portfolio.slider.view_all") }}">{{ __("messages.homepage.portfolio.slider.view_all") }}</span>
                    </a>
                </div>
            </div>
            <div class="absolute -right-16 hover:opacity-60 transition-all cursor-pointer" id="nextSlide">
                <img src="{{ asset('assets/files/images/arrows/arrow.svg') }}">
            </div>
        </div>
    </div>
</div>
