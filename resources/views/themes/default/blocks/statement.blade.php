
    <!-- Section about -->
    <section id="about" class="container-fluid">
        <!-- Section heading -->
        <div class="section-heading">
            <h2>{{ get_site('statement_title') }}</h2>
            <!-- divider -->
            <div class="hr"></div>
        </div>
        <!-- Parallax object -->
        <div class="parallax-object2 hidden-sm hidden-xs" data-0="opacity:1;"
            data-100="transform:translatey( 40%);"
            data-center-center="transform:translatey(-60%);">
            <!-- Image -->
            <img src="{{ theme_asset('default/assets/img/boy1ornament.png') }}" alt="">
        </div>
        <div class="container">
        <div class="col-md-12 col-centered">
            <div class="tab" role="tabpanel">
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#Section1" role="tab" data-toggle="tab">{{ get_site('mission_title')}}</a></li>
                <li role="presentation"><a href="#Section2" role="tab" data-toggle="tab">{{ get_site('vision_title')}}</a></li>
                <li role="presentation"><a href="#Section3" role="tab" data-toggle="tab">{{ get_site('community_title')}}</a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active in fade col-lg-12" id="Section1">
                        <div class="col-lg-7">
                            <h3>{{ get_site('mission_title') }}</h3>
                           <p>{{ get_site('mission') }}</p>                      
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ get_site('mission_image') }}" alt="" class="img-curved  center-block img-responsive"/>
                        </div>
                    </div>
                    <!-- /tab-panel -->
                    <div role="tabpanel" class="tab-pane fade col-lg-12" id="Section2">
                        <div class="col-lg-7">
                            <h3>{{ get_site('vision_title') }}</h3>
                           <p>{{ get_site('vision') }}</p>                      
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ get_site('vision_image') }}" alt="" class="img-curved  center-block img-responsive"/>
                        </div>	
                    </div>
                    <!-- /tab-panel -->
                    <div role="tabpanel" class="tab-pane fade col-lg-12" id="Section3">
                        <div class="col-lg-7">
                            <h3>{{ get_site('community_title') }}</h3>
                           <p>{{ get_site('community') }}</p>                      
                        </div>
                        <div class="col-lg-5">
                            <img src="{{ get_site('community_image') }}" alt="" class="img-curved  center-block img-responsive"/>
                        </div>
                    </div>
                    <!-- /tab-panel -->
                </div>
                <!-- /tab-content -->
            </div>
            <!-- /tab -->
        </div>
        <!-- /col-md-11 -->
        </div>
        <!-- /container -->
    </section>
    <!-- /section ends-->