
<div class="bg-purple-700">       
    <div class="">
        <div class="container mx-auto">

            <div class="py-24 px-4 sm:px-6 lg:px-8 z-10 pb-8">
                
                <div class="md:grid grid-cols-2 lg:grid-cols-6">
                    <div class="px-2 mt-5">
                        <h2 class="font-semibold text-gray-300 text-lg md:text-xl mb-2">Quick Links</h2>
                        <ul class="">
                            @foreach(get_site('menu') as $menu)
                                <li class="mt-3 md:mt-5">
                                    <a href="{{ $menu->link }}" class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0"> {{ $menu->name }} </a>
                                </li>   
                            @endforeach
                        </ul>
                    </div>
                    <div class="px-2 mt-5">
                        <h2 class="font-semibold text-gray-300 text-lg md:text-xl mb-2">Social Links</h2>
                        <ul class="">
                            <li class="mt-3 md:mt-5">
                                <a href="{{ get_site('facebook') }}" target="_blank" class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 ">Facebook</a>
                            </li>
                            <li class="mt-3 md:mt-5">
                                <a href="{{ get_site('twitter') }}" target="_blank" class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 ">Twitter</a>
                            </li>
                            <li class="mt-3 md:mt-5">
                                <a href="{{ get_site('instagram') }}" target="_blank" class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0 ">Instagram</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-2 mt-5 col-span-2">
                        <h2 class="font-semibold text-gray-300 text-lg md:text-xl mb-2">Contact</h2>
                        <ul class="mt-3 md:mt-5">
                            <li class="mt-3 md:mt-5">
                                <a class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0" href="https://www.google.com/maps/search/{{ urlencode(get_site('address')) }}" title="{{ get_site('address') }}" target="_blank">
                                    Address: {{ get_site('address') }}
                                </a>
                            </li>
                            <li class="mt-3 md:mt-5">
                                <a class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0" href="tel:{{ get_site('mobile') }}">
                                    Tel: {{ get_site('mobile') }}
                                </a>
                            </li>
                            <li class="mt-3 md:mt-5">
                                <a class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0" href="mailto:{{ get_site('email') }}">Email: {{ get_site('email') }}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="px-2 mt-5 col-span-2">
                        <h2 class="font-semibold text-gray-300 text-lg md:text-xl">About Us</h2>
                        <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg md:mt-5 md:text-xl">{{ substr(get_site('about'), 0, 150) }} ...</p>
                    </div>
                </div>
        
                <div class="md:flex md:justify-between mt-8 border-t-2 border-gray-500">
                    <div class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-lg md:mt-5 md:text-xl flex justify-center flex-wrap">
                        Copyright © {{ date('Y') }}&nbsp; <a href="https://csm.ng">CSM</a> - All rights reserved
                    </div>
                    <div class="flex justify-center">
                        <a href="" class="px-4 py-4 mt-3">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-400" d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                            </svg>  
                        </a>
                        <a href="" class="px-4 py-4 mt-3">                      
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-400" d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                        <a href="" class="px-4 py-4 mt-3">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path class="fill-current text-gray-400" d="M16.98 0a6.9 6.9 0 0 1 5.08 1.98A6.94 6.94 0 0 1 24 7.02v9.96c0 2.08-.68 3.87-1.98 5.13A7.14 7.14 0 0 1 16.94 24H7.06a7.06 7.06 0 0 1-5.03-1.89A6.96 6.96 0 0 1 0 16.94V7.02C0 2.8 2.8 0 7.02 0h9.96zm.05 2.23H7.06c-1.45 0-2.7.43-3.53 1.25a4.82 4.82 0 0 0-1.3 3.54v9.92c0 1.5.43 2.7 1.3 3.58a5 5 0 0 0 3.53 1.25h9.88a5 5 0 0 0 3.53-1.25 4.73 4.73 0 0 0 1.4-3.54V7.02a5 5 0 0 0-1.3-3.49 4.82 4.82 0 0 0-3.54-1.3zM12 5.76c3.39 0 6.2 2.8 6.2 6.2a6.2 6.2 0 0 1-12.4 0 6.2 6.2 0 0 1 6.2-6.2zm0 2.22a3.99 3.99 0 0 0-3.97 3.97A3.99 3.99 0 0 0 12 15.92a3.99 3.99 0 0 0 3.97-3.97A3.99 3.99 0 0 0 12 7.98zm6.44-3.77a1.4 1.4 0 1 1 0 2.8 1.4 1.4 0 0 1 0-2.8z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>