<div class="w-full relative" x-data="{slider: 0}">
        @foreach (get_site('sliders')->take(3) as $slider)
            <div class="w-full bg-center bg-cover h-screen" style="background-image: url({{ $slider->image() }});" x-show.transition="slider == {{$loop->index}}">
                <div class="container mx-auto relative">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <div class="py-6 px-4 sm:px-6 lg:px-8 z-10 pb-8 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
                            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                                <div class="sm:text-center lg:text-left">
                                    <h1 class="text-4xl tracking-tight font-extrabold text-gray-800 sm:text-5xl md:text-6xl">
                                        <span class="block xl:inline">{{ $slider->title }}</span>
                                    </h1>
                                    <p class="mt-3 text-base text-gray-600 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                                        {{ $slider->text }}
                                    </p>
                                    <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                                        <div class="mt-3 sm:mt-0">
                                            <a href="{{ url($slider->link) }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-full text-white bg-gray-800 hover:bg-gray-700 md:py-4 md:text-lg md:px-10">{{ $slider->action }}</a>
                                        </div>
                                        <div class="mt-3 sm:mt-0 ml-2 ">
                                            <div class="flex items-center justify-center py-4">
                                                <a href="javascript:void(0)" class="px-3 py-1 rounded-full" x-bind:class="{'bg-gray-800 text-white': slider==0}" x-on:click="slider = 0">1</a>
                                                <a href="javascript:void(0)" class="px-3 py-1 rounded-full mx-1" x-bind:class="{'bg-gray-800 text-white': slider==1}" x-on:click="slider = 1">2</a>
                                                <a href="javascript:void(0)" class="px-3 py-1 rounded-full" x-bind:class="{'bg-gray-800 text-white': slider==2}" x-on:click="slider = 2">3</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>