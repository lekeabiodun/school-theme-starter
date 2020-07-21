
    <!-- Section Contact -->
    <section id="contact" class="bg-lightcolor1 container-fluid nobg-small">
        <!-- Parallax object -->
        <div class="parallax-object1 hidden-sm hidden-xs" data-0="opacity:1;"
            data-100="transform:translatex(-310%);"
            data-center-center="transform:translatex(30%);">
            <!-- Image -->
            <img src="{{ theme_asset('default/assets/img/birdornament.png') }}" alt="">
        </div>
        <!-- Section heading -->
        <div class="section-heading margin1">
            <h2>{{ get_site('contact_title') }}</h2>
            <!-- divider -->
            <div class="hr"></div>
        </div>
        <!-- Contact -->
        <div class="container">
            <!-- Contact Form -->
            <div class="col-md-5">
                <!-- Form Starts -->
                <div id="contact_form" >
                    <h4>{{ get_site('contact_subtitle') }}</h4>
                    <div class="form-group">
                        @csrf
                        <label>Name:</label><input type="text" name="name" class="form-control input-field"  required="">                    
                        <label>Email:</label><input type="email" name="email" class="form-control input-field" required="">           
                        <label>Subject:</label><input type="text" name="subject" class="form-control input-field" required="">                     
                    </div>
                    <label>Message:</label>
                    <textarea name="message" id="message" class="textarea-field form-control" rows="4"  required=""></textarea>
                    <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
                </div>
                <!-- Contact results -->
                <div id="contact_results"></div>
            </div>
            <div class="res-margin">
                <div class="col-md-6 col-md-offset-1 well text-center">
                <h4>Information</h4>
                <!-- contact info -->			   
                <div class="contact-info ">
                    <p><i class="fa fa-envelope margin-icon"></i><a href="mailto:{{ get_site('email') }}">{{ get_site('email') }}</a></p>
                    <p><i class="fa fa-phone margin-icon"></i>Call us {{ get_site('mobile') }}</p>
                    <p><i class="fa fa-map-marker margin-icon"></i>{{ get_site('address') }}</p>
                </div>
                </div>
            </div>
            <!-- /res-margin -->
        </div>
        <!-- /container -->
    </section>
    <!--/Section ends -->