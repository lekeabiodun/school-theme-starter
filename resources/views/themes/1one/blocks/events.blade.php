
<div class="bg-gray-300">       
    <div class="background">
        <div class="container mx-auto">
            <div class="py-24 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-center">
                    <h2 class="font-bold text-gray-600 text-3xl md:text-6xl">School Events</h2>
                    <h4 class="py-4 md:text-2xl font-semibold text-gray-400 text-xl italic">Get upto date with our school events</h4>
                </div>
                <div class="grid grid-cols-1 gap-4 md:grid-cols-3">
                    @foreach (get_site("events")->take(3) as $event)
                        <div class="card bg-white rounded-2xl shadow-2xl">
                            <img src="{{ $event->image() }}" class="w-full h-60 object-cover rounded-t-2xl"/>
                            <div class="card-body px-3 py-8">
                                <h2 class="font-bold text-gray-600 text-2xl md:text-3xl h-20 overflow-hidden"><a href="{{ url($event->slug) }}">{{ $event->title }}</a></h2>
                                <p class="text-gray-800 md:text-xl h-40 overflow-ellipsis overflow-hidden">{{ $event->excerpt }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>