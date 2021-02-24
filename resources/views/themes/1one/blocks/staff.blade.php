
<div class="bg-purple-700">       
    <div class="bg">
        <div class="container mx-auto">
            <div class="py-32 px-4 sm:px-6 lg:px-8">
                <div class="flex flex-col justify-center">
                    <h2 class="font-bold text-gray-50 text-3xl md:text-6xl">Principal Staff</h2>
                    <h4 class="py-4 md:text-2xl font-semibold text-gray-100 text-xl italic">Our Amazing Staff</h4>
                </div>
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-4">
                    @foreach (get_site("staff")->take(4) as $staff)
                        <div class="mr-8 py-8 flex flex-col items-center justify-center">
                            <div class="flex items-center justify-center">
                                <img src="{{ $staff->image() }}" class="w-full h-56 object-cover rounded-lg"/>
                            </div>
                            <div class="flex flex-col items-center justify-center px-2">
                                <p class="font-semibold text-gray-50 text-2xl h-10 py-3">{{ $staff->position }}</p>
                                <h2 class="font-bold text-gray-50 text-2xl h-10 py-3">{{ $staff->name }}</h2>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>