<!-- Section Services -->
    <section id="services" class="container">
        <!-- Section heading -->
        <div class="section-heading">
            <h2>{{ get_site('about_title') }}</h2>
            <!-- divider -->
            <div class="hr"></div>
        </div>
        <div class="col-md-5">
            <img src="{{ get_site('about_image') }}" class="img-responsive img-curved center-block" alt=""/> 
        </div>
        <!-- main text -->
        <div class="col-md-12 col-md-7 res-margin">
            <!-- Custom List -->
            <p class="custom no-margin">
                {{ get_site('about') }}
            </p>
        </div>
        <!-- /col-md-12-->
    </section>
    <!-- /section  -->