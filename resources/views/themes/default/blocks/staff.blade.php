
    <!-- Section team -->
    <section id="team" class="container-fluid bg-color4">
        <!-- Parallax object -->
        <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
            data-100="transform:translatey(40%);"
            data-center-center="transform:translatey(-60%);">
            <!-- Image -->
            <img src="{{ theme_asset('default/assets/img/girl1ornament.png') }}" alt="">
        </div>
        <!-- Section heading -->
        <div class="section-heading">
            <h2>Our Team</h2>
            <!-- divider -->
            <div class="hr"></div>
        </div>
        <div class="container">
            <div id="team-slider" class="owl-carousel">
                @foreach(get_site('staff') as $staff)
                <div class="our-team">
                    <div class="pic">
                        <!-- picture -->
                        <img src="{{ $staff->image }}" class="img-responsive img-circle" alt="">
                        <!-- Social icons -->
                        {{-- <div class="social">
                            <ul class="social-icon">
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-google-plus"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                            </ul>
                        </div> --}}
                        <!-- /social -->
                        <div class="team-info">
                            <h4>{{ $staff->name }}</h4>
                            <span class="post">{{ $staff->position }}</span>
                        </div>
                        <!-- /tem-info -->
                    </div>
                    <!-- description-->
                    {{-- <p class="description">
                        Nec facilisis leo sollicitudin sed. Integer egestas porttitor massa, ut dapibus sapien feugiat eget Sed consectetur tortor ut arcu pharetra faucibus. In tristique sollicitudin mi.
                    </p> --}}
                </div>
                @endforeach
            </div>
            <!-- /team carousel ends -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends -->