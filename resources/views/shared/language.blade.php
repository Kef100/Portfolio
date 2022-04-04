<div id="language-selector">
    <div class="fixed flex flex-col w-auto desktop:-right-2 z-10 top-1/4 laptop:scale-x-[-1] laptop:-left-2">
        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            @if(LaravelLocalization::getCurrentLocale() != $localeCode)
                <div class="relative -right-2 transition-all ease-in-expo hover:right-0 hover:scale-x-110">
                    <a rel="alternate" hreflang="{{$localeCode}}"
                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <img class="object-contain hover:opacity-100 opacity-60 flag-path w-14 h-7"
                             src="{{ asset('assets/files/images/flags/'.$localeCode.'.svg') }}" alt="{{$localeCode}}">
                        {{--<p class="font-medium text-white">{{strtoupper($localeCode)}}</p>--}}
                    </a>
                </div>
            @else
                <div class="relative right-0 scale-x-110">
                    <img class="object-contain flag-path w-14 h-7" src="{{ asset('assets/files/images/flags/'.$localeCode.'.svg') }}" alt="{{$localeCode}}">
                </div>
            @endif
        @endforeach
    </div>
</div>
