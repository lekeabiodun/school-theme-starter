
<div class="bg-white -900">
    <div class="bg">       
        <div class="container mx-auto">
            <div class="py-32 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-center">
                    <h2 class="font-bold text-gray-500 text-3xl md:text-6xl">Gallery</h2>
                    <h4 class="py-4 md:text-2xl font-semibold text-gray-400 text-xl italic">Latest happening in school</h4>
                </div>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-4 py-8">
                    @foreach (get_site("gallery")->take(8) as $gallery)
                        <div class="transform transition ease-in-out duration-300 hover:scale-x-105">
                            <img src="{{ $gallery->image() }}" class="w-full h-full object-cover shadow-2xl rounded "/>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>