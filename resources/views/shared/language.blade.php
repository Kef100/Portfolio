<div id="language-selector" class="fixed right-0 top-1/3 w-auto p-2 rounded-l-md">
    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
        @if(LaravelLocalization::getCurrentLocale() != $localeCode)
            <a class="flex space-x-2 flex-row  justify-center items-center" rel="alternate" hreflang="{{$localeCode}}"
               href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                <img class="rounded-full object-cover overflow-hidden w-5 h-5" src="{{ asset('assets/files/images/flags/'.$localeCode.'.svg') }}" alt="{{$localeCode}}">
{{--                <p class="font-medium text-white">{{strtoupper($localeCode)}}</p>--}}
            </a>
        @endif
    @endforeach
</div>
