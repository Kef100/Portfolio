<script src="{{ asset('assets/js/preloader.js') }}" defer></script>

<div id="preloader">
    <div class="container">

        <div class="preloader-group">
            <div class="loader-container">
                <div class="background">
                    <img src="{{ asset("assets/files/images/preloader/bg.svg") }}" alt="bg">
                </div>
                <div class="lines">
                    <img src="{{ asset("assets/files/images/preloader/lines.svg") }}" alt="lines">
                </div>
                <div class="top-center-circle">
                    <svg height="320" width="320">
                        <circle cx="160" cy="160" r="150" stroke="#857852" stroke-width="7" fill="transparent" />
                    </svg>
                </div>
                <div class="bottom-center-circle">
                    <svg height="320" width="320">
                        <circle cx="160" cy="160" r="150" stroke="#404040" stroke-width="7" fill="transparent" />
                    </svg>
                </div>
                <div class="logo">
                    @include('shared.logo.logo')
                </div>
            </div>

            <div class="progress">
                <div id="bar" class="bar bg-accent-500">
                    <div id="percentage" class="percentage bg-primary-500"></div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35">
                    <g id="bullets" transform="translate(-1176 -60.907)">
                        <circle id="first" cx="5" cy="5" r="4" transform="translate(1176 60.907)" fill="#fff"></circle>
                        <circle id="middle" cx="5" cy="5" r="4" transform="translate(1187 60.907)" fill="#c5c5c5"></circle>
                        <circle id="last" cx="5" cy="5" r="4" transform="translate(1198 60.907)" fill="#b4b4b4"></circle>
                    </g>
                </svg>
            </div>
        </div>

    </div>
</div>
