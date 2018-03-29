	<footer id="footer" class="footer">
		<div class="footer-main" style="border-bottom: 1px solid #ccc;">
			<div class="container">
				<div class="row">

					<div class="col-md-2 col-sm-6 col-xs-12 footer-widget">
						<h3 class="widget-title">Quick Links</h3>

						<ul class="list-arrow">
							<li><a href="{{ env('APP_URL') }}">Home</a></li>
							<li><a href="{{ env('APP_URL') }}/about">About Us</a></li>
							<li><a href="{{ env('APP_URL') }}/faq">FAQs</a></li>
							<li><a href="{{ env('APP_URL') }}/fees">Fees</a></li>
							<li><a href="{{ env('APP_URL') }}/centres">Centres</a></li>
							<li><a href="{{ env('APP_URL') }}/blog">Blog</a></li>
							<li><a href="{{ env('APP_URL') }}/contact">Contact Us</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
						<h3 class="widget-title">Study With Us</h3>

						<ul class="list-arrow">
							<li><a href="{{ env('APP_URL') }}/study-with-us">Study With Us</a></li>
							<li><a href="{{ env('APP_URL') }}/study-with-us/reasons">Great reasons to study ABE</a></li>
							<li><a href="{{ env('APP_URL') }}/study-with-us/study-resources">Study resources</a></li>
							<li><a href="{{ env('APP_URL') }}/study-with-us/entry-guidelines">Entry guidelines</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-sm-6 col-xs-12 footer-widget">
						<h3 class="widget-title">Qualifications</h3>

						<ul class="list-arrow">
							<li><a href="{{ env('APP_URL') }}/qualifications">Qualifications</a></li>
							<li><a href="{{ env('APP_URL') }}/qualifications/business-management">Business Management</a></li>
							<li><a href="{{ env('APP_URL') }}/qualifications/business-management-and-marketing">Business Management &amp; Marketing</a></li>
							<li><a href="{{ env('APP_URL') }}/qualifications/business-management-and-human-resources">Business Management &amp; HR</a></li>
							<li><a href="{{ env('APP_URL') }}/qualifications/business-start-up-and-entrepreneurship">Business Start-up &amp; Entrepreneurship</a></li>
							<li><a href="{{ env('APP_URL') }}/qualifications/short-courses">Short Courses</a></li>
						</ul>
					</div>

					<div class="col-md-3 col-sm-6 col-xs-12 footer-widget">
						<h3 class="widget-title">What Next</h3>

						<ul class="list-arrow">
							<li><a href="{{ env('APP_URL') }}/what-next">What Next</a></li>
							<li><a href="{{ env('APP_URL') }}/what-next/career-progression">Career Progression</a></li>
							<li><a href="{{ env('APP_URL') }}/what-next/university-progression">University Progression</a></li>
							<li><a href="{{ env('APP_URL') }}/downloads/List-of-schools-for-ABE.pdf">Find a University</a></li>
							<li><a href="{{ env('APP_URL') }}/what-next/professional-exemptions">Professional Exemptions</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-main">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-10 col-xs-9 footer-widget">
						<h3 class="widget-title">Subscribe</h3>
						<div class="newsletter-introtext">
							Subscribe our newsletters
						</div>
						<form action="#" method="post" class="newsletter-form">
							<div class="form-group">
								<input type="email" name="email" id="newsletter-form-email" class="form-control form-control-lg" placeholder="Your Email Here" autocomplete="off">
								<button type="button" class="btn btn-primary">Subscribe</button>
							</div>
						</form>

						<div class="footer-social">
							<h3 class="widget-title">Follow Us</h3>
							<ul>
								<li><a href="{{ config('app.facebook_link') }}"><i class="fa fa-facebook"></i></a></li>
								<li><a href="{{ config('app.instagram_link') }}"><i class="fa fa-instagram"></i></a></li>
								<li><a href="{{ config('app.twitter_link') }}"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-8 col-md-offset-1 col-sm-12 col-xs-12 footer-widget">
						<h3 class="widget-title">Contact Us</h3>

						<div class="contact-info-box col-md-4 col-sm-4 col-xs-12">
							<i class="fa fa-map-marker">&nbsp;</i>
							<div class="contact-info-box-content">
								<h4>Visit Us</h4>
								<p>{{ config('app.abuja_office') }}</p>
							</div>
						</div>

						<div class="contact-info-box col-md-4 col-sm-4 col-xs-12">
							<i class="fa fa-envelope-o">&nbsp;</i>
							<div class="contact-info-box-content">
								<h4>Mail Us</h4>
								<p>{{ config('app.info_email') }}</p>
							</div>
						</div>

						<div class="contact-info-box col-md-4 col-sm-4 col-xs-12">
							<i class="fa fa-phone">&nbsp;</i>
							<div class="contact-info-box-content">
								<h4>Call Us</h4>
								<p>{{ config('app.phone1') }}</p>
								<p>{{ config('app.phone2') }}</p>
								<p>{{ config('app.phone3') }}</p>
								<p>{{ config('app.phone4') }}</p>
								<p>{{ config('app.phone5') }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-7">
						<div class="copyright-info">
							<div class="footer-logo pull-left">
								<img src="/assets/images/abe-icon.png" alt="">
							</div>
							<span>Copyright © {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.</span>
						</div>
					</div>

					{{-- <div class="col-xs-12 col-sm-4 col-md-push-1">
						<div class="footer-menu">
							<ul class="nav unstyled">
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Legal</a></li>
							</ul>
						</div>
					</div> --}}
				</div>

				<div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix">
					<button class="btn btn-primary" title="Back to Top">
						<i class="fa fa-angle-double-up"></i>
					</button>
				</div>

			</div>
		</div>

	</footer>



	<!-- Javascript Files
	================================================== -->

	<!-- initialize jQuery Library -->
	<script type="text/javascript" src="/assets/js/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
	<!-- Owl Carousel -->
	<script type="text/javascript" src="/assets/js/owl.carousel.min.js"></script>
	<!-- Counter -->
	<script type="text/javascript" src="/assets/js/jquery.counterup.min.js"></script>
	<!-- Waypoints -->
	<script type="text/javascript" src="/assets/js/waypoints.min.js"></script>
	<!-- Color box -->
	<script type="text/javascript" src="/assets/js/jquery.colorbox.js"></script>
	<!-- Isotope -->
	<script type="text/javascript" src="/assets/js/isotope.js"></script>
	<script type="text/javascript" src="/assets/js/ini.isotope.js"></script>

	<!-- Template custom -->
	<script type="text/javascript" src="/assets/js/custom.js"></script>

	<script type="text/javascript">
		var yourNavigation = $(".campaign_section");
		    stickyDiv = "sticky";
		    yourHeader = $('.top-bar').height();

		$(window).scroll(function() {
			if( $(this).scrollTop() > yourHeader ) {
				yourNavigation.addClass(stickyDiv);
			} else {
				yourNavigation.removeClass(stickyDiv);
			}
		});
	</script>

	@yield('page_scripts')

	<script src="/assets/js/chat_script.js" type="text/javascript"></script>
	
	</div><!-- Body inner end -->
</body>
</html>