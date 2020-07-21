
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <![endif]-->
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- Page title -->
      <title>{{ get_site('title') }}</title>
      <!--[if lt IE 9]>
      <script src="js/respond.js"></script>
      <![endif]-->
      <!-- Bootstrap Core CSS -->
      <link href="{{ theme_asset('default/assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
      <!-- Icon fonts -->
      <link href="{{ theme_asset('default/assets/fonts/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ theme_asset('default/assets/fonts/glyphicons/bootstrap-glyphicons.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ theme_asset('default/assets/fonts/flaticons/flaticon.css') }}" rel="stylesheet" type="text/css">
      <!-- Google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Baloo|Lato:400,700,900" rel="stylesheet">
      <!-- Style CSS -->
      <link href="{{ theme_asset('default/assets/css/style.css') }}" rel="stylesheet">
      <!-- Plugins CSS -->
      <link rel="stylesheet" href="{{ theme_asset('default/assets/css/plugins.css') }}">
      <!-- Color Style CSS -->
      <link href="{{ theme_asset('default/assets/styles/maincolors.css') }}" rel="stylesheet">
      <link href="{{ theme_asset('default/assets/styles/cuteandbright.css') }}" rel="stylesheet">
	   <!-- LayerSlider stylesheet -->
      <link rel="stylesheet" href="{{ theme_asset('default/assets/layerslider/css/layerslider.css') }}">
      <!-- Favicons-->
      <link rel="shortcut icon" href="{{ get_site('logo') }}" type="image/x-icon">
      <!-- Demo Examples (For Module #3) -->
	  <link rel="alternate stylesheet" type="text/css" href="{{ theme_asset('default/assets/styles/maincolors.css') }}" title="maincolors" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{ theme_asset('default/assets/styles/cuteandbright.css') }}" title="cuteandbright" media="all" />
	  <link rel="alternate stylesheet" type="text/css" href="{{ theme_asset('default/assets/styles/pinkandblue.css') }}" title="pinkandblue" media="all" />
      <link rel="alternate stylesheet" type="text/css" href="{{ theme_asset('default/assets/styles/sweetpastel.css') }}" title="sweetpastel" media="all" />
   </head>
   <body id="page-top" data-spy="scroll" data-target=".navbar-custom">
        <!-- Preloader  --> 
        <div id="preloader">
            <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
            </div>
        </div>
        <!-- /Preloader ends --> 
        <div id="page-width">
            @include($THEMEINC->navbar)

            <div id="main" class="home">	  
                @yield('content')
            </div>
            
            @include($THEMEINC->footer)
        </div>
        <!-- /page-width -->
        <!-- Core JavaScript Files -->
        <script src="{{ theme_asset('default/assets/js/jquery.min.js') }}"></script>
        <script src="{{ theme_asset('default/assets/js/bootstrap.min.js') }}"></script>
        <!-- Main Js -->
        <script src="{{ theme_asset('default/assets/js/main.js') }}"></script>
        <!-- Contact -->
        <script src="{{ theme_asset('default/assets/js/contact.js') }}"></script>
        <!--Other Plugins -->
        <script src="{{ theme_asset('default/assets/js/plugins.js') }}"></script>
        <!-- Prefix free CSS -->
        <script src="{{ theme_asset('default/assets/js/prefixfree.js') }}"></script>
        <!-- LayerSlider script files -->
        <script src="{{ theme_asset('default/assets/layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
        <!-- Bootstrap Select Tool (For Module #4) -->
        <script src="{{ theme_asset('default/assets/switcher/js/bootstrap-select.js') }}"></script>
        <!-- UI jQuery (For Module #5 and #6) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.js" type="text/javascript"></script>
        <!-- All Scripts & Plugins -->
        {{-- <script src="{{ theme_asset('default/assets/switcher/js/dmss.js') }}"></script> --}}
   </body>
</html>