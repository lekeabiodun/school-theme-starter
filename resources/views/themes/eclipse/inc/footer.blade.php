<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-4 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
                                            <img src="{{ get_site('logo') }}" alt="School Logo" width="50"> 
										</a>
									</div>
									<div class="footer_about_text">
										<p>{{ Str::limit(get_site('about'), 150) }} <a href="{{ url('about') }}">Read More</a></p>
									</div>
									
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer links -->
								<div class="footer_section footer_links">
									<div class="footer_title">Top Menu</div>
									<div class="footer_contact_info">
										<ul>
											<li><a href="{{ url('/') }}" style="color: #b5b8be">Home</a></li>
											<li><a href="{{ url('about') }}" style="color: #b5b8be">About</a></li>
											<li><a href="{{ url('contact') }}" style="color: #b5b8be">Contact</a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: {{ get_site('email') }}</li>
											<li>Phone:  {{ get_site('mobile') }}</li>
											<li>{{ get_site('address') }}</li>
										</ul>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>