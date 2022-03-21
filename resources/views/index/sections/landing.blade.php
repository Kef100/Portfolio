<div class="w-full h-full section bg-landing bg-full">
    <div class="flex flex-col gap-y-24 justify-center items-center">
        <div class="flex gap-y-4 justify-center items-center flex-col text-5xl">
            <h2>{{__("messages.homepage.landing.developer")}}</h2>
            <p class="outlined text-4xl font-bold">&&</p>
            <h2>{{__("messages.homepage.landing.designer")}}</h2>
        </div>
        <div class="flex gap-x-32 justify-center items-center flex-row">
            <a href="{{ url("/projects") }}"
               class="primary-background primary-background-hover transition-all z-20 text-2xl border border-primary-500 rounded-full px-8 py-2 backdrop-blur">
                {{__("messages.homepage.landing.latest_projects")}}
            </a>

            <a href="{{ url("/contact") }}"
               class="secondary-background secondary-background-hover transition-all z-20 text-2xl border border-gray-200 rounded-full px-8 py-2 backdrop-blur">
                {{__("messages.homepage.landing.get_in_touch")}}
            </a>
        </div>
    </div>
    @include('shared.scrolldown')
</div>
