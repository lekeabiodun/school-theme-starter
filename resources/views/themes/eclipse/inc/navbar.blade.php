
	<!-- Header -->

	<header class="header">
		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="{{ url('/') }}">
                                    <img src="{{ get_site('logo') }}" width="50" />
									{{-- <div class="logo_text">Unic<span>at</span></div> --}}
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
                                    <li class="{{ request()->is('/')? 'active':'' }}"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="{{ request()->is('about')? 'active':'' }}"><a href="{{ url('about') }}">About</a></li>
									<li class="{{ request()->is('contact')? 'active':'' }}"><a href="{{ url('contact') }}">Contact</a></li>
								</ul>
								<!-- Hamburger -->
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>		
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
                <li class="menu_mm {{ request()->is('/')? 'active':'' }}"><a href="{{ url('/') }}">Home</a></li>
                <li class="menu_mm {{ request()->is('about')? 'active':'' }}"><a href="{{ url('about') }}">About</a></li>
                <li class="menu_mm {{ request()->is('contact')? 'active':'' }}"><a href="{{ url('contact') }}">Contact</a></li>
			</ul>
		</nav>
	</div>