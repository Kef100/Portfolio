<div class="fixed flex flex-col w-auto transition-all duration-700 desktop:hover:left-0 desktop:-left-[22.5rem] w-96 z-10 top-1/4 shadow-lg">
    <div class="bg-gradient-to-l from-slate-600 to-slate-700 justify-between flex flex-row gap-x-2 w-auto h-full rounded-r-full overflow-hidden relative">
        <div class="p-2 flex flex-col justify-evenly overflow-hidden max-w-[18rem]">
            <p class="font-medium pointer-events-none whitespace-nowrap">
                @foreach($spotifyData['artists'] as $key => $artist)
                    @if($key > 0), {{ ucfirst($artist) }}@else{{ ucfirst($artist) }}@endif
                @endforeach
            </p>
            <p class="font-light pointer-events- whitespace-nowrap">
                {{ $spotifyData['track'] }}
            </p>
        </div>
        <div class="relative">
            <div class="absolute bg-black opacity-50 z-10 w-full h-full rounded-full top-0 left-0"></div>
            <img class="h-20 w-auto rounded-full relative @if($spotifyData['is_playing'])rotate @else stop-rotate @endif" src="{{ $spotifyData['album'] }}">
            <img class="h-auto w-5 z-20 absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 shadow-lg" src="{{ asset("assets/files/images/symbols/spotify.svg") }}" alt="spotify logo">
        </div>
    </div>
</div>
{{--TODO: Fix scrolling text (Album & Artists--}}
