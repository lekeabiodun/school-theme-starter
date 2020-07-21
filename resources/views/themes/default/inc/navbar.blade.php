        <nav class="navbar navbar-custom navbar-fixed-top"  id="navbar-custom">
            <div class="container">
               <!-- Logo and toggle get grouped for better mobile display -->
               <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand">
                  <i class="fa fa-bars"></i>
                  </button>
                  <!-- Logo -->
                  <div class="navbar-brand page-scroll">
                     <a href="#page-top"><img src="{{ get_site('logo-light') }}"  class="img-responsive" alt=""></a>
                  </div>
               </div>
               <!-- /.navbar-header -->
               <!-- Collect the nav links, forms, and other content for toggling -->
               <div class="collapse navbar-collapse" id="navbar-brand">
                  <ul class="nav navbar-nav page-scroll navbar-right">
                        @foreach(get_site('menu') as $menu)
                           <li class="{{ request()->url() == $menu->link? 'active':'' }}"><a href="{{ $menu->link }}">{{ $menu->name }}</a></li>
                        @endforeach
                        <li><a href="{{ url('login') }}">Portal</a></li>

                  </ul>
               </div>
               <!-- /.navbar-collapse -->
            </div>
            <!-- /container -->
        </nav>