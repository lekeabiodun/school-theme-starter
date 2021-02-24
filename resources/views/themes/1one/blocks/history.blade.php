<div class="bg-white">
        
    <div class="bg">
        <div class="container mx-auto">
            <div class="py-32 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-3">
                    <div class="md:relative">
                        <img src="{{ getImage(get_site('history_image')) }}" class="md:absolute w-full h-full object-cover rounded-full"/>
                    </div>
                    <div class="col-span-2">
                        <div class="sm:pl-4">
                            <h2 class="font-bold text-gray-600 text-2xl md:text-4xl mb-1">{{ get_site('history_title') }}</h2>
                            <h4 class="font-semibold text-gray-500 text-xl md:text-2xl mb-1 italic">{{ get_site('history_subtitle') }}</h4>
                            <p class="text-gray-600 text-justify text-lg md:textxl">{{ get_site('history') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>