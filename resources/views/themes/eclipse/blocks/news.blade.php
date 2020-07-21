<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Popular Online Courses</h2>
						<div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
                <!-- Course -->
                @foreach(get_site('featured_posts') as $news)
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="{{ asset($news->image) }}" alt=""></div>
						<div class="course_body">
                            <h3 class="course_title" style="height: 50px"><a href="/{{$news->slug}}">{{ $news->title }}</a></h3>
                            <hr>
							<div class="course_text">
								<p>{{ str_limit($news->body, 150) }}</p>
							</div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_price ml-auto"><a hre="/{{$news->slug}}"> Read More</a></div>
							</div>
						</div>
					</div>
                </div>
                @endforeach
			</div>
		</div>
	</div>