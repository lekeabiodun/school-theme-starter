<div class="bg-purple-700 relative">
    <div class="">
        <div class="container mx-auto">
            <div class="py-32 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 sm:grid-cols-3">
                    <div class="md:relative">
                        <img src="{{ getImage(get_site('about_image')) }}" class="w-full h-full md:absolute object-cover rounded-full"/>
                    </div>
                    <div class="col-span-2">
                        <div class="sm:pl-4">
                            <h2 class="font-bold text-gray-100 text-2xl md:text-4xl mb-1">{{ get_site('about_title') }}</h2>
                            <h4 class="font-semibold text-gray-50 text-xl md:text-2xl mb-1 italic">{{ get_site('about_subtitle') }}</h4>
                            <p class="text-gray-50 text-justify text-lg md:text-xl">{{ get_site('about') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
