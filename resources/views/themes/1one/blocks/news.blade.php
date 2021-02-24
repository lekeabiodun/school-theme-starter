
<div class="bg-gray-100">       
    <div class="bg">
        <div class="container mx-auto">
            <div class="py-24 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-center">
                    <h2 class="font-bold text-gray-600 text-3xl md:text-6xl">Latest News</h2>
                    <h4 class="py-4 md:text-2xl font-semibold text-gray-400 text-xl italic">Get upto date on our school news</h4>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                    @foreach (get_site("news")->take(3) as $news)
                        <div class="card bg-white rounded-2xl shadow-2xl">
                            <img src="{{ $news->image() }}" class="w-full h-60 object-cover rounded-t-2xl"/>
                            <div class="card-body px-3 py-8">
                                <h2 class="font-bold text-gray-600 text-2xl md:text-3xl h-20 overflow-hidden"><a href="{{ url($news->slug) }}">{{ $news->title }}</a></h2>
                                <p class="text-gray-800 md:text-xl h-40 overflow-ellipsis overflow-hidden">{{ $news->excerpt }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>