@extends(theme_layout('1one'))

@section('content')
   
    <div class="container mx-auto">
        <div class="py-24 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="w-full">
                    <h2 class="font-semibold text-gray-500 text-2xl md:text-4xl py-4">{{ $post->title }}</h2>
                </div>
                <div class="w-full h-96">
                    <img src="{{ $post->image() }}" class="w-full h-full rounded-md object-cover"/>
                </div>
                <div class="w-full">
                    <p class="text-gray-600 text-justify md:text-lg py-4">{{ $post->body }}</p>
                </div>
            </div>
        </div>
    </div>
   
@endsection