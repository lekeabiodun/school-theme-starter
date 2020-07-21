<!-- Latest News -->
	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">{{ get_site('statement_title') }}</h2>
						<div class="section_subtitle"><p>{{ get_site('statement_subtitle') }}</p></div>
					</div>
				</div>
			</div>
			<div class="row news_row">
				<div class="col-lg-7 news_col">
					
					<!-- News Post Large -->
					<div class="news_post_large_container">
						<div class="news_post_large">
							<div class="news_post_image"><img src="{{ get_site('statement_image') }}" alt=""></div>
							<div class="news_post_large_title"><a href="blog_single.html">{{ get_site('statement') }}</a></div>
						</div>
					</div>
				</div>

				<div class="col-lg-5 news_col">
					<div class="news_posts_small">
						<!-- News Posts Small -->
						<div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">{{ get_site('mission_title') }}</a></div>
							<div class="news_post_meta">
								<p>{{ get_site('mission') }} <p>
							</div>
                        </div>
                        <div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">{{ get_site('vision_title') }}</a></div>
							<div class="news_post_meta">
								<p>{{ get_site('vision') }} <p>
							</div>
                        </div>
                        <div class="news_post_small">
							<div class="news_post_small_title"><a href="blog_single.html">{{ get_site('community_title') }}</a></div>
							<div class="news_post_meta">
								<p>{{ get_site('community') }} <p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
