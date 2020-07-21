
    <!-- Section Blog Preview -->
    <section id="blog-preview" class="container-fluid">
    <!-- Parallax object -->
        <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;"
            data-100="transform:translatey(70%);"
            data-center-center="transform:translatey(-70%);">
            <!-- Image -->
            <img src="{{ theme_asset('default/assets/img/boy2ornament.png') }}" alt="">
        </div>
        <!-- Section heading -->
        <div class="section-heading">
            <h2>{{ get_site('news_title') }}</h2>
            <!-- divider -->
            <div class="hr"></div>
        </div>
        <!-- Blog Slider -->
        <div id="blog-slider" class="owl-carousel">
            @foreach(get_site('news')  as $news)
            <div class="col-md-12">
                <div class="blog-prev" >
                <!-- Blog Post Image  -->
                <img src="{{ $news->image }}" alt="" />
                <!-- Blog Post date -->
                <div class="date"><span class="day">{{ $news->created_at->format('d') }}</span><span class="month">{{ $news->created_at->format('M') }}</span></div>
                <!-- Blog Caption -->
                <div class="blog-caption">
                    <h4>{{ $news->title }}</h4>
                    <p class="hidden-xs">{{ $news->body }}</p>
                </div>
                <div class="hover"></div>
                <a href="{{ url($news->slug) }}"></a>
                </div>
                <!-- /Blog Post Prev -->
            </div>	
            @endforeach	 
        </div>
        <!-- /blog-slider -->
    </section>
    <!-- /section ends -->