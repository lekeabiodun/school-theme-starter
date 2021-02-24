<section class="text-gray-600 body-font relative">
  <div class="container px-5 py-24 mx-auto flex sm:flex-nowrap flex-wrap">
    <div class="lg:w-2/3 md:w-1/2 bg-gray-300 rounded-lg overflow-hidden sm:mr-10 p-10 flex items-end justify-start relative">
      <iframe width="100%" height="100%" class="absolute inset-0" frameborder="0" title="map" marginheight="0" marginwidth="0" scrolling="no" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q={{urlencode(get_site("address"))}}&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed" style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
      <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
        <div class="lg:w-1/2 px-6">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">ADDRESS</h2>
          <p class="mt-1">{{ get_site('address') }}</p>
        </div>
        <div class="lg:w-1/2 px-6 mt-4 lg:mt-0">
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs">EMAIL</h2>
          <a class="text-green-500 leading-relaxed">{{ get_site('email') }}</a>
          <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xs mt-4">PHONE</h2>
          <p class="leading-relaxed">{{ get_site('mobile') }}</p>
        </div>
      </div>
    </div>
    <div class="lg:w-1/3 md:w-1/2 bg-white flex flex-col md:ml-auto w-full md:py-8 mt-8 md:mt-0">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Contact Us</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Use the form below to contact us</p>
        <form action="{{ url('contact') }}" method="POST">
            @csrf
            <div class="">
                <strong class="text-gray-600">Name </strong>
                <input type="text" id="name" name="name" class="px-2 py-2 mt-2 w-full border-gray-300 border-2 rounded-md focus:outline-none focus:bg-white" />
                @error('name') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="">
                <strong class="text-gray-600">Email </strong>
                <input type="email" id="email" name="email" class="px-2 py-2 mt-2 w-full border-gray-300 border-2 rounded-md focus:outline-none focus:bg-white" />
                @error('email') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="">
                <strong class="text-gray-600">Subject </strong>
                <input type="text" id="subject" name="subject" class="px-2 py-2 mt-2 w-full border-gray-300 border-2 rounded-md focus:outline-none focus:bg-white" />
                @error('subject') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="">
                <strong class="text-gray-600">Message </strong>
                <textarea rows="5" id="message" name="message" class="px-2 py-2 mt-2 w-full border-gray-300 border-2 rounded-md focus:outline-none focus:bg-white" ></textarea>
                @error('message') <span class="text-red-600">{{ $message }}</span> @enderror
            </div>
            
            <div class="">
                <button type="submit" class="w-full flex items-center justify-center px-8 py-2 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-800 md:text-lg md:px-10 focus:outline-none">Submit</button>
            </div>
        </form>
    </div>
  </div>
</section>
