<div id="spotify"></div>
@if($spotifyData != null)
    <div
        class="fixed group flex flex-col w-auto transition-all duration-700 tablet:hover:left-0 tablet:-left-[22.5rem] w-96 z-10 top-1/4 shadow-lg">
        <div
            class="flex absolute p-2 left-0 top-0 transition-all delay-500 duration-500 group-hover:-top-9 rounded-tr-lg justify-center items-center bg-secondary-800">
            @if($spotifyData['is_playing'])
                <p class="text-green-500 text-sm">{{ __("messages.spotify.listening") }}</p>
            @else
                <p class="text-primary-400 text-sm">{{ __("messages.spotify.last_listened") }}</p>
            @endif
        </div>
        <div
            class="bg-gradient-to-l from-slate-600 to-slate-700 justify-between flex flex-row gap-x-2 w-auto h-full rounded-r-full relative">
            <div class="p-2 flex flex-col justify-evenly max-w-[18rem] w-auto">
                <p class="font-medium pointer-events-none w-full overflow-hidden text-ellipsis whitespace-nowrap">
                    <span>{{ $spotifyData['track'] }}</span>
                </p>
                <p class="font-light text-gray-300 pointer-events-none whitespace-nowrap overflow-hidden text-ellipsis w-full">
                <span>
                    @foreach($spotifyData['artists'] as $artist)
                        {{ucfirst($artist) }}@if($artist == end($spotifyData['artists']))@elseif(count($spotifyData['artists']) > 1)
                            {{", "}}
                        @endif
                    @endforeach
                </span>
                </p>
            </div>
            <div class="relative">
                <div class="absolute bg-black opacity-50 z-10 w-full h-full rounded-full top-0 left-0"></div>
                <div class="absolute z-30 w-full h-full rounded-full top-0 left-0  @if($spotifyData['is_playing'])spotify-pulse @endif"></div>
                <img
                    class="h-20 w-auto rounded-full relative @if($spotifyData['is_playing'])rotate @else stop-rotate @endif"
                    src="{{ $spotifyData['album'] }}" alt="album">
                <img class="h-auto w-5 z-20 absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 shadow-lg"
                     src="{{ asset("assets/files/images/symbols/spotify.svg") }}" alt="spotify logo">
            </div>
        </div>
    </div>
@endif
