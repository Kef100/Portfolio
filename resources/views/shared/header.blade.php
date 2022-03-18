<header class="w-full h-fit fixed transition-all z-10">
    <nav class="grid grid-flow-col pb-6 items-center justify-around w-full padding">
        <a class="logo" href="{{ url('/') }}"><span><img class="w-20" src="{{ asset('assets/files/branding/logo-banner.svg')  }}" alt="Logo"></span></a>
        <a class="list-none text-2xl text-white bg-transparent no-underline roll-link" href="#"><span class="block relative transition-all"
                data-title="{{ __('messages.navigation.home') }}">{{ __('messages.navigation.home') }}</span></a>
        <a class="list-none text-2xl text-white bg-transparent no-underline roll-link" href="#"><span class="block relative transition-all"
                data-title="{{ __('messages.navigation.about') }}">{{ __('messages.navigation.about') }}</span></a>
        <a class="list-none text-2xl text-white bg-transparent no-underline roll-link" href="#"><span class="block relative transition-all"
                data-title="{{ __('messages.navigation.portfolio') }}">{{ __('messages.navigation.portfolio') }}</span></a>
        <a class="list-none text-2xl text-white bg-transparent no-underline roll-link" href="#"><span class="block relative transition-all"
                data-title="{{ __('messages.navigation.testimonials') }}">{{ __('messages.navigation.testimonials') }}</span></a>
        <a class="list-none text-2xl text-white bg-transparent no-underline roll-link" href="#"><span class="block relative transition-all"
                data-title="{{ __('messages.navigation.cv') }}">{{ __('messages.navigation.cv') }}</span></a>
        <a class="button bg-gradient-to-r from-primary-600/[0.4] to-primary-700/[0.2] text-2xl border border-primary-500 rounded-full px-8 py-2 backdrop-blur" href="#">
            <span class="grid grid-flow-col items-center justify-center gap-x-4" data-title="{{ __('messages.navigation.lets_chat') }}">{{ __('messages.navigation.lets_chat') }}
                <svg class="typing" xmlns="http://www.w3.org/2000/svg" width="35" height="12">
                  <g transform="translate(-1176 -60.907)">
                    <circle cx="5" cy="5" r="4" transform="translate(1176 60.907)" fill="#fff"></circle>
                    <circle cx="5" cy="5" r="4" transform="translate(1187 60.907)" fill="#c5c5c5"></circle>
                    <circle cx="5" cy="5" r="4" transform="translate(1198 60.907)" fill="#b4b4b4"></circle>
                  </g>
                </svg>
            </span>
        </a>
    </nav>
</header>

@include('shared.language')
