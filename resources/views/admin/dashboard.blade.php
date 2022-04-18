@extends("layouts.admin")

@section("content")
        <div class="flex flex-row">
            <aside id="sidebar" class="flex flex-col w-auto h-screen collapsed">
                <a href="#" class="flex items-center justify-center pl-2.5 py-4 bg-gray-700">
                    <img src="{{ asset("assets/files/branding/favicon.svg") }}" class="h-6 mr-3 mobile-sm:h-14 pointer-events-none select-none" alt="logo"/>
                </a>
                <div class="h-full py-4 px-3 bg-gray-50 rounded dark:bg-gray-800 flex flex-col justify-between items-center">
                    <ul class="space-y-2">
                        <li class="relative group">
                            <a href="{{ url("/dashboard") }}" class="{{Request::segment(2) == "dashboard" ? "bg-gray-100 dark:bg-gray-700 text-white" : ""}} flex items-center justify-center p-2 gap-x-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="relative">
                                    <svg class="w-6 h-6 text-gray-500 transition duration-75 {{Request::segment(2) == "dashboard" ? "text-gray-900 dark:text-white" : "dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"}}"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                    <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                                    </svg>
                                    <span class="rounded-full text-white bg-primary-500 border border-white absolute w-2 h-2 right-0 top-0"></span>
                                </div>
                                <p class="{{Request::segment(2) == "dashboard" ? "text-gray-900 dark:text-white" : "dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"}}">Dashboard</p>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500	group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Dashboard</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
                                </svg>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500	group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Projects</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500	group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Testimonials</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M8.707 7.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l2-2a1 1 0 00-1.414-1.414L11 7.586V3a1 1 0 10-2 0v4.586l-.293-.293z"></path>
                                    <path
                                        d="M3 5a2 2 0 012-2h1a1 1 0 010 2H5v7h2l1 2h4l1-2h2V5h-1a1 1 0 110-2h1a2 2 0 012 2v10a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path>
                                </svg>
                                <span class="rounded-full text-white bg-blue-500 border border-white absolute w-2 h-2 right-2 top-2"></span>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500	group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Messages</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                     fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Languages</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path></svg>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Settings</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M5 4a3 3 0 00-3 3v6a3 3 0 003 3h10a3 3 0 003-3V7a3 3 0 00-3-3H5zm-1 9v-1h5v2H5a1 1 0 01-1-1zm7 1h4a1 1 0 001-1v-1h-5v2zm0-4h5V8h-5v2zM9 8H4v2h5V8z"
                                          clip-rule="evenodd"></path>
                                </svg>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">CV</span>
                        </li>
                        <li class="relative group">
                            <a href="#"
                               class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                                <svg class="flex-shrink-0 hidden w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path></svg>
                            </a>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500 group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Night/Day Mode</span>
                        </li>
                    </ul>
                    <ul>
                        <li class="relative group">
                            <form method="POST"
                                  class="flex items-center justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all group hover:bg-red-100 dark:hover:bg-red-400/25"
                                  action="{{ route('logout') }}">
                                @csrf
                                <button type="submit">
                                    <svg class="flex-shrink-0 w-6 h-6 text-red-500 transition duration-75 dark:text-red-400 group-hover:text-red-500 dark:group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                    </svg>
                                </button>
                            </form>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500	group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Sign out</span>
                        </li>
                        <li id="toggle" class="relative group">
                            <div class="flex cursor-pointer items-center h-10 justify-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white transition-all hover:bg-gray-100 dark:hover:bg-gray-700">
                                <svg class="flex-shrink-0 expand absolute w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
                                <svg class="flex-shrink-0 collapse absolute opacity-0 pointer-events-none w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
                            </div>
                            <span class="block absolute w-max -top-2 left-20 bg-white text-black shadow-md px-2 py-1 rounded-md opacity-0 transition-all duration-500	group-hover:opacity-100 group-hover:top-1/2 group-hover:-translate-y-1/2">Expand</span>
                        </li>
                    </ul>
                </div>
            </aside>
            <div class="flex flex-col"></div>
        </div>
@endsection
{{--TOOD https://dunbom6612.github.io/smooth-side-bar/--}}
