@extends(theme_layout('default'))

@section('content')

    @isset($title)
        @includeIf($THEMEBLOCK->banner)
    @endisset

    @isset($post)
        <section id="blog">
            <div class="container-fluid">
                <div class="container">
                <div id="blog-container" class="col-md-9">
                    <div class="blog-post post-main">
                    <div class="post-info">
                        <p><i class="fa fa-clock-o"></i>Posted on {{ $post->created_at->format('d M Y') }}</p>
                        <p><i class="fa fa-user"></i>by <a href="#">{{ $post->author->name }}</a></p>
                    </div>
                    <img class="img-responsive center-block" src="{{ $post->image }}" alt="">						 	
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus at eros et, auctor sagittis ipsum.</p>
                    <blockquote>Men dolor sit amet, consectetur adipisiras sit amet nibh libero, in gravida nulla ulla vel metus scelerisque ante sollicitudin commodo cras purus.</blockquote>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt rhoncus. Integer pulvinar elit ligula, laoreet imperdiet magna consectetur vel. Nullam tempus, tellus sed laoreet porttitor, urna quam efficitur magna, id vestibulum arcu massa eget risus. Mauris sagittis elit nec magna congue aliquam. Nam sollicitudin urna nunc, eu iaculis leo vulputate vel. Donec ultrices ipsum laoreet suscipit consectetur. In pulvinar diam arcu, eu tincidunt arcu mollis quis. Sed vulputate pharetra enim ac pretium. Quisque at rutrum nunc, nec dictum ligula. Vestibulum magna nibh, dapibus at eros et, auctor sagittis ipsum.</p>
                    </div>
                </div>
                <div class="sidebar col-md-3">
                    <!-- About Us Widget -->
                    <div class="well">
                    <h4 class="sidebar-header">About Us</h4>
                    <p>Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                    <!-- Social Media icons -->
                    <div class="social-media">
                        <a href="#" title=""><i class="fa fa-twitter"></i></a>
                        <a href="#" title=""><i class="fa fa-facebook"></i></a>
                        <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                        <a href="#" title=""><i class="fa fa-pinterest"></i></a>
                        <a href="#" title=""><i class="fa fa-instagram"></i></a>
                    </div>
                    </div>
                    <div class="well">
                    <h4 class="sidebar-header">Latest Posts</h4>
                    <div class="row">
                        <!-- Blog latest posts 1 -->
                        <div class="blog-latest col-xs-12">
                            <a href="blog-single.html">
                                <div class="col-xs-4">
                                <img src="img/bloglatest1.jpg" alt="" class="img-circle img-responsive">
                                </div>
                                <div class="col-xs-8">
                                <span>10 Most popular Toys</span>
                                <p>12 dec 2016</p>
                                </div>
                            </a>
                        </div>
                        <!-- Blog latest posts 2 -->
                        <div class="blog-latest col-xs-12">
                            <a href="blog-single.html">
                                <div class="col-xs-4">
                                <img src="img/bloglatest2.jpg" alt="" class="img-circle img-responsive">
                                </div>
                                <div class="col-xs-8">
                                <span>Swimming lessons for Kids</span>
                                <p>29 dec 2016</p>
                                </div>
                            </a>
                        </div>
                        <!-- Blog latest posts 3 -->
                        <div class="blog-latest col-xs-12">
                            <a href="blog-single.html">
                                <div class="col-xs-4">
                                <img src="img/bloglatest3.jpg" alt="" class="img-circle img-responsive">
                                </div>
                                <div class="col-xs-8">
                                <span>5 Mistakes Parents Make in the First Year</span>
                                <p>22 jan 2017</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- /row -->
                    </div>
                </div>
                </div>
            </div>
        </section>
    @endisset
@endsection