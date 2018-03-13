	
	<div id="top-bar" class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12 top-social">
					<ul class="unstyled">
						<li>
							<a title="Facebook" href="{{ config('app.facebook_link') }}" target="_blank">
								<span class="social-icon"><i class="fa fa-facebook"></i></span>
							</a>
							<a title="Instagram" href="{{ config('app.instagram_link') }}" target="_blank">
								<span class="social-icon"><i class="fa fa-instagram"></i></span>
							</a>
							<a title="Twitter" href="{{ config('app.twitter_link') }}" target="_blank">
								<span class="social-icon"><i class="fa fa-twitter"></i></span>
							</a>
							{{-- <a title="Google+" href="#">
								<span class="social-icon"><i class="fa fa-google-plus"></i></span>
							</a>
							<a title="Linkdin" href="#">
								<span class="social-icon"><i class="fa fa-linkedin"></i></span>
							</a>
							<a title="Rss" href="#">
								<span class="social-icon"><i class="fa fa-rss"></i></span> 
							</a>--}}
						</li>
					</ul>
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12 top-menu ">
					<ul class="unstyled">
						<li><a href="/blog">Blog</a></li>
						<li><a href="{{ env('APP_URL') }}/about">About</a></li>
						<li><a href="{{ env('APP_URL') }}/faq">FAQs</a></li>
						<li><a href="{{ env('APP_URL') }}/contact">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
