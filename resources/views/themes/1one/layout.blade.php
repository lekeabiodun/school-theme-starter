<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="{{ get_site('about') }}">
    <meta name="author" content="CSM">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>{{ get_site('site_title') }}</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,600,700,700i&amp;subset=latin-ext" rel="stylesheet">
    <link href="{{ theme_asset('1one/assets/css/app.css') }}" rel="stylesheet">
    
    <!-- Scripts -->
    <script src="{{ theme_asset('1one/assets/js/app.js') }}" defer></script>

	<!-- Favicon  -->
    <link rel="icon" href="{{ get_site('logo') }}">

</head>
<body class="">
	
    @include(theme_include('navbar'))

    {{ $slot ?? '' }}

    @yield('content')

    @include(theme_include('footer'))

</body>
</html>

