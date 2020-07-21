
        <!-- Footer starts -->		
        <footer>
            <div class="container">
               <div class="col-md-4">
                  <h6>{{ get_site('site_title') }}</h6>
                <p>{{ get_site('footer_text')}}</p>
               </div>
               <!-- /.col-md-4 -->
               <div class="col-md-4 res-margin">
                  <ul class="list-unstyled footer-icons">
                     <li><i class="fa fa-phone"></i>{{ get_site('mobile') }}</li>
                     <li><i class="fa fa-envelope"></i>Email: <a href="mailto:{{ get_site('email') }}">{{ get_site('email') }}</a></li>
                     <li><i class="fa fa-map-marker"></i>{{ get_site('address') }}</li>
                     <li><i class="fa fa-clock-o"></i>{{ get_site('working_time') }}</li>
                  </ul>
               </div>
               <!-- /.col-md-4 -->
               <div class="col-md-4 text-center">
                  <!-- Footer logo -->
                  <img src="{{ get_site('logo') }}" alt="" class="res-margin center-block img-responsive">
                  <!--Social icons -->
                  <div class="social-media smaller">
                        @foreach (get_site('social_links') as $social)
                            <a href="{{ $social->link }}" title="" target="_blank"><i class="fa fa-{{ $social->name }}"></i></a>
                        @endforeach
                  </div>
               </div>
               <!-- Credits-->
               <div class="credits col-md-12 text-center">
                  <hr/>
                  Copyright © {{ date('Y') }} - Powered by <a href="https://www.csm.ng">CSM</a>
                  <!-- Go To Top Link -->
                  <div class="page-scroll hidden-sm hidden-xs">
                     <a href="#page-top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
                  </div>
               </div>
               <!-- /credits -->
            </div>
        </footer>
        <!-- /footer ends -->