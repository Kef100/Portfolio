<div id="language-selector" class="fixed -right-4 hover:right-0 hover:scale-110 transition-all ease-in-expo z-10 top-1/4 w-auto rounded-l-md">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        @if(LaravelLocalization::getCurrentLocale() != $localeCode)
            <a class="flex space-x-2 s flex-row justify-center items-center drop-shadow-[0_7px_3px_rgba(50,50,50,0.4)]" rel="alternate" hreflang="{{$localeCode}}"
               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                <img class="object-contain flag-path w-full  h-7" src="{{ asset('assets/files/images/flags/'.$localeCode.'.svg') }}" alt="{{$localeCode}}">
{{--                <p class="font-medium text-white">{{strtoupper($localeCode)}}</p>--}}
            </a>
        @endif
    @endforeach
</div>
