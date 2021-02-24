<section class="w-full px-6 antialiased bg-white select-none border-b border-gray-200">
    <div class="mx-auto max-w-7xl">
        <nav class="relative z-50 h-24" x-data="{ showMenu: false }">
            <div class="container relative flex flex-wrap items-center justify-between h-24 mx-auto font-medium lg:justify-center sm:px-4 md:px-2">
                <a href="{{ url('/') }}" class="w-1/4 py-4 pr-4 md:py-0">
                    <span class="sr-only">School Logo</span>
                    <img class="h-8 w-auto sm:h-10" src="{{ get_site('logo') }}" alt="">
                </a>
                <div class="top-0 left-0 items-start hidden w-full h-full p-4 text-sm bg-gray-900 bg-opacity-50 md:w-3/4 md:absolute lg:text-base md:h-auto md:bg-transparent md:p-0 md:relative md:flex" :class="{'flex fixed': showMenu, 'hidden': !showMenu }">
                    <div class="flex-col w-full h-auto overflow-hidden bg-white rounded-lg select-none md:bg-transparent md:rounded-none md:relative md:flex md:flex-row md:overflow-auto">
                        <a href="#_" class="inline-flex items-center block w-auto h-16 px-6 text-xl font-black leading-none text-gray-900 select-none md:hidden">
                            <span class="sr-only">School Logo</span>
                            <img class="h-8 w-auto sm:h-10" src="{{ get_site('logo') }}" alt="">
                        </a>
                        <div class="flex flex-col items-start justify-center w-full text-center md:w-2/3 md:mt-0 md:flex-row md:items-center">
                            @foreach (get_site('menu') as $menu)
                                <a href="{{ $menu->link }}" class="inline-block w-full px-6 py-2 mx-0 font-medium text-left text-gray-700 md:w-auto md:px-0 md:mx-2 lg:mx-3 md:text-center">{{ $menu->name }}</a>
                            @endforeach
                        </div>
                        <div class="flex flex-col items-start justify-end w-full pt-4 md:items-center md:w-1/3 md:flex-row md:py-0">
                            <a href="{{ url('login') }}" class="w-full px-6 py-2 mr-0 text-gray-700 md:px-0 lg:pl-2 md:mr-4 lg:mr-5 md:w-auto">Log In</a>
                            <span class="inline-flex w-full shadow-sm md:rounded-full md:w-auto">
                                <a href="{{ url('login') }}" class="inline-flex items-center w-full px-6 py-3 text-sm font-medium leading-4 text-white transition duration-150 ease-in-out bg-transparent bg-gray-800 border border-transparent md:px-3 md:w-auto md:rounded-full lg:px-5 hover:bg-gray-700 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray active:bg-gray-800">
                                    Portal
                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>

                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <div @click="showMenu = !showMenu" class="absolute right-0 flex flex-col items-center items-end justify-center w-10 h-10 rounded-full cursor-pointer md:hidden hover:bg-gray-100">
                    <svg class="w-6 h-6 text-gray-700" x-show="!showMenu" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor" x-cloak>
                        <path d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg class="w-6 h-6 text-gray-700" x-show="showMenu" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" x-cloak>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </div>
            </div>
        </nav>
    </div>
</section>
