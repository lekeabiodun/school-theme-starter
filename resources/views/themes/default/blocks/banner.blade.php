    <div class="container-fluid">
        <div class="jumbotron"></div>
        <!-- /jumbotron-->
        <div class="jumbo-heading">
            <!-- Heading -->
            <h1>{{ $title }}</h1>
            <!-- Breadcrumb -->
            <ul class="breadcrumb">
            <li><a href="{{ url('/') }}">Home</a> <span class="divider"></span></li>
            <li class="active">{{ $page?? request()->path() }}</li>
            </ul>
        </div>
        <!-- /jumbo-heading -->
       
    </div>
    <!-- /container-->