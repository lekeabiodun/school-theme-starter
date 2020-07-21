    
    {{-- {{ dd(get_site('sliders')) }} --}}

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				@foreach(get_site('sliders') as $slider)
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url('{{ asset($slider->image) }}')"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title">{{ $slider->title }}</div>
                                    <div class="home_slider_subtitle">{{ $slider->subtitle }}</div>
									<div class="home_slider_form_container">
                                        <a href="{{ $slider->link }}" class="btn btn-lg btn-primary">{{ $slider->action }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                </div>
                @endforeach

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>