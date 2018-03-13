<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="{{ config('app.name') }}" />
	<link rel="shortcut icon" href="/assets/images/favicon.ico"/>

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/style.css" type="text/css" />
	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="/assets/pages/event_landing_page/css/responsive.css" type="text/css" />

	<link rel="stylesheet" type="text/css" href="/assets/pages/event_landing_page/css/custom.css">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>{{ config('app.name') }} | ABE Career Advancement and Entrepreneurship Seminar</title>
</head>

<body class="stretched">
	<div id="wrapper" class="clearfix">

		<header id="header" class="transparent-header page-section dark">
			<div id="header-wrap">
				<div class="container clearfix">
					<div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
					<div id="logo">
						{{-- <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="/assets/images/ABE-logoz.png"><img src="/assets/images/ABE-logoz.png" alt="ABE Nigeria"></a>
						<a href="{{ url('/') }}" class="retina-logo" data-dark-logo="/assets/images/ABE-logoz.png"><img src="/assets/images/ABE-logoz.png" alt="ABE Nigeria"></a> --}}
					</div>

					<nav id="primary-menu">
						<ul class="one-page-menu">
							<li class="current"><a href="#" data-href="#header"><div>Register</div></a></li>
							<li><a href="#" data-href="#events"><div>Events</div></a></li>
							<li><a href="#" data-href="#why-abe"><div>Why ABE</div></a></li>
							<li><a href="#" data-href="#section-testimonials"><div>Testimonials</div></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<section id="slider" style="background: url(/assets/pages/event_landing_page/images/landing2.jpg) center; overflow: visible; background-size: cover;" data-height-lg="500" data-height-md="500" data-height-sm="600" data-height-xs="600" data-height-xxs="600">
			<div class="container clearfix">
				<div class="contact-widgetzzzzz" data-loader="button">
					<form action="{{ env('APP_URL') }}/events/register" method="POST" class="landing-wide-form landing-form-overlay dark nobottommargin clearfix" autocomplete="off">

						{{ csrf_field() }}

						<input type="hidden" name="event_id" value="dd876ca85d7128bef6e2ee46990f76d8">    				

						<div class="heading-block nobottommargin nobottomborder">
							<h2>Register for FREE</h2>

							{{-- Notification starts here --}}
	                        @if ( session()->has('success_msg') )
	                        <div class="row">
	                        	<div class="col-md-12">
		                            <div class="success_alert">
		                                {{ session()->get('success_msg') }}
		                            </div>
		                        </div>
	                        </div>
	                        @endif

	                        @if ( session()->has('error_msg') )
	                        <div class="row">
	                        	<div class="col-md-12">
		                            <div class="error_alert">
		                                {{ session()->get('error_msg') }}
		                            </div>
		                        </div>
	                        </div>
	                        @endif
	                        {{-- Notification ends here --}}
						</div>
						<div class="line" style="margin: 20px 0 30px;"></div>
						<div class="col_full form-group @if($errors->has('name')) has-error @endif">
							<input type="text" name="name" class="form-control input-lg not-dark" value="{{ old('name') }}" placeholder="Your Name*" maxlength="150">
						</div>
						<div class="col_full form-group @if($errors->has('phone')) has-error @endif">
							<input type="text" name="phone" class="form-control input-lg not-dark" value="{{ old('phone') }}" placeholder="Your Phone*" maxlength="18">
						</div>
						<div class="col_full form-group @if($errors->has('email')) has-error @endif">
							<input type="email" name="email" class="form-control input-lg not-dark" value="{{ old('email') }}" placeholder="Your Email*" maxlength="100">
						</div>
						<div class="col_full form-group @if($errors->has('preferred_event_location')) has-error @endif">
							<select name="preferred_event_location" class="form-control input-lg not-dark">
								<option value="">Preferred event location*</option>
								<option value="Abuja" {{ (old('preferred_event_location') == 'Abuja') ? 'selected' : '' }}>Abuja</option>
								<option value="Kaduna" {{ (old('preferred_event_location') == 'Kaduna') ? 'selected' : '' }}>Kaduna</option>
								<option value="Kano" {{ (old('preferred_event_location') == 'Kano') ? 'selected' : '' }}>Kano</option>
							</select>
						</div>
						{{-- <div class="col_full form-group @if($errors->has('occupation')) has-error @endif">
							<select class="form-control input-lg not-dark" name="occupation">
								<option value="">Occupation*</option>
								<option value="Student" {{ (old('occupation') == 'Student') ? 'selected' : '' }}>Student</option>
								<option value="Unemployed" {{ (old('occupation') == 'Unemployed') ? 'selected' : '' }}>Unemployed</option>
								<option value="Entrepreneur" {{ (old('occupation') == 'Entrepreneur') ? 'selected' : '' }}>Entrepreneur</option>
								<option value="Others" {{ (old('occupation') == 'Others') ? 'selected' : '' }}>Others</option>
							</select>
						</div> --}}
						<div class="col_full nobottommargin">
							<button class="btn btn-lg btn-primary btn-block nomargin" value="submit" type="submit" style="">REGISTER NOW</button>
						</div>
					</form>
				</div>
			</div>
		</section>

		<section id="content" style="overflow: visible;">
			<div class="content-wrap">
				<div class="promo promo-dark promo-full landing-promo header-stick">
					<div class="container clearfix">
						<h3>Get Insights for Success. <i class="icon-circle-arrow-right" style="position:relative;top:2px;"></i></h3>
						<span>Learn how you can boost your academic progression, skilfully run your own enterprise or stay <br> ahead in your career by attending the ABE Career Advancement and Entrepreneurship Seminar. </span>
					</div>
				</div>

				<div class="col_full bottommargin-lg common-height" id="events">
					<div class="col-md-4 dark col-padding ohidden" style="background-color: #1abc9c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Abuja</h3>
							<p style="line-height: 1.8;">
								<span><i class="fa fa-calendar icon"></i></span><strong> Date:</strong>
								February 14, 2018 <br>
								<span><i class="fa fa-map-marker"></i></span><strong> Venue:</strong>
								NAF Conference Centre and Suites, Plot 496 Ahmadu Bello Way, Kado, Abuja, FCT, Nigeria. <br>
								<span><i class="fa fa-clock-o"></i></span><strong> Time:</strong>
								9am
							</p>
							<a href="#" data-scrollto="#header" class="button button-border button-light button-rounded button-reveal tright uppercase nomargin"><i class="icon-angle-right"></i><span>Register Now</span></a>
							<i class="icon-bulbz bgicon">1</i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #34495e;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Kano</h3>
							<p style="line-height: 1.8;">
								<span><i class="fa fa-calendar icon"></i></span><strong> Date:</strong>
								February 15, 2018 <br>
								<span><i class="fa fa-map-marker"></i></span><strong> Venue:</strong>
								Tahir Guest Palace, 4 Ibrahim Natsugune Road, Kano, Nigeria. <br>
								<span><i class="fa fa-clock-o"></i></span><strong> Time:</strong>
								2pm
							</p>
							<a href="#" data-scrollto="#header" class="button button-border button-light button-rounded button-reveal tright uppercase nomargin"><i class="icon-angle-right"></i><span>Register Now</span></a>
							<i class="icon-cogz bgicon">2</i>
						</div>
					</div>

					<div class="col-md-4 dark col-padding ohidden" style="background-color: #e74c3c;">
						<div>
							<h3 class="uppercase" style="font-weight: 600;">Kaduna</h3>
							<p style="line-height: 1.8;">
								<span><i class="fa fa-calendar icon"></i></span><strong> Date:</strong>
								February 16, 2018 <br>
								<span><i class="fa fa-map-marker"></i></span><strong> Venue:</strong>
								Hotel Seventeen, No. 6 Tafawa Balewa/Lafiya Road Kaduna, Nigeria. <br>
								<span><i class="fa fa-clock-o"></i></span><strong> Time:</strong>
								10am
							</p>
							<a href="#" data-scrollto="#header" class="button button-border button-light button-rounded button-reveal tright uppercase nomargin"><i class="icon-angle-right"></i><span>Register Now</span></a>
							<i class="icon-thumbs-upz bgicon">3</i>
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="container clearfix">
					<div class="clear bottommargin-lg"></div>
					<div id="why-abe" class="heading-block title-center page-section">
						<h2>Why ABE</h2>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn">
								<a href="#"><img src="/assets/pages/event_landing_page/images/international.png" alt=""></a>
							</div>
							<h3>International</h3>
							<p>For more than 40 years, ABE has been providing first-class business education to learners across the globe. </p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
								<a href="#"><img src="/assets/pages/event_landing_page/images/not-for-profit.png" alt=""></a>
							</div>
							<h3>Not-for-Profit</h3>
							<p>ABE was founded for the sole purpose of raising the managers and entrepreneurs of the future.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
								<a href="#"><img src="/assets/pages/event_landing_page/images/businessman.png" alt=""></a>
							</div>
							<h3>Professional</h3>
							<p>Our qualifications are designed to give you the skills needed to thrive as an entrepreneur or career person.</p>
						</div>
					</div>

					<div class="clear"></div> 

					<div class="divider divider-short divider-center"><i class="icon-circle"></i></div>

					<div id="section-pricing" class="heading-block title-center nobottomborder page-section">
						<h2>ABE Featured on</h2>
					</div>

					<ul class="clients-grid grid-4 nobottommargin clearfix">
						<li>
							<a href="https://www.dailytrust.com.ng/news/next-level/prof-okojie-inducted-into-fellowship-of-abe/133232.html" target="_blank"><img src="/assets/images/featured-on/daily-trust-lg.png"></a>
						</li>
						<li>
							<a href="http://africannewsextra.com/abe-honours-nuc-scribe-with-fellowship-award/" target="_blank">
							<img src="/assets/images/featured-on/african-news-extra-lg.png"></a>
						</li>
						<li>
							<a href="http://www.theabujainquirer.com/?page=517&get=Okojie_receives_induction_as_ABE_fellow_517" target="_blank"><img src="/assets/images/featured-on/abuja-inquirer-lg.png"></a>
						</li>
						<li>
							<a href="https://www.vanguardngr.com/2016/02/nuc-endorses-abe-uk-in-nigeria/" target="_blank"><img src="/assets/images/featured-on/vanguard-lg.png"></a>
						</li>
					</ul>

					<div class="clear"></div>

				</div>

				<div class="section">

					<div class="container clearfix">
						<div class="section footer-stick notopmargin" id="section-testimonials">
							<div class="heading-block title-center page-section">
								<h2>Testimonials</h2>
							</div>
							
							<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
								<div class="flexslider">
									<div class="slider-wrap">
										<div class="slide">
											<div class="testi-image">
												<img src="/assets/images/testimonial/Shandan-Tessa-Samuel.jpg" alt="Shandan Tessa Samuel">
											</div>
											<div class="testi-content">
												<p>
													I would recommend anyone with a passion for higher learning to explore the opportunities available with ABE UK.  With a dash of ambition, a few drops of discipline and time management you can achieve whatever goals you set for yourself.
												</p>
												<div class="testi-meta">
													Shandan Tessa Samuel
													<span>Business Executive - St Lucia</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-image">
												<img src="/assets/images/testimonial/Han-Phyo-Oo.jpeg" alt="Han Phyo Oo">
											</div>
											<div class="testi-content">
												<p>
													ABE has now become well-known in Myanmar and I notice that recent successful organisations recognise ABE graduates for job application purposes. This is because most top level managers themselves hold ABE qualifications. I also believe ABE qualifications have nurtured and developed those successful business entrepreneurs to be who they are now.
												</p>
												<div class="testi-meta">
													Han Phyo Oo
													<span>Double ABE award winner - Myanmar</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-image">
												<img src="/assets/images/testimonial/Patrick-Davis.jpg" alt="Patrick A. Davis">
											</div>
											<div class="testi-content">
												<p>
													I have no doubt that ABE graduates are better prepared for the job market which is why my foundation gives ABE qualification holders priority in employment and this has led to all but one of our staff members/consultants being ABE Alumni.
												</p>
												<div class="testi-meta">
													Patrick A. Davis
													<span>Chief Operating Officer, Snap for Charity - Ghana</span>
												</div>
											</div>
										</div>
										<div class="slide">
											<div class="testi-image">
												<img src="/assets/images/testimonial/Cindy-Alexander.jpg" alt="Cindy Alexander">
											</div>
											<div class="testi-content">
												<p>
													I opted for ABE, among a myriad of other options, as the programme offers the right mix of modules at an affordable cost and flexible timing so I could achieve a work, life and study balance.
												</p>
												<div class="testi-meta">
													Cindy Alexander
													<span>Chief Operating Officer, Snap for Charity - Ghana</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section footer-stick" style="background-color: white;">
					<div class="container clearfix">
						<div id="section-buy" class="heading-block title-center nobottomborder page-section">
							<h2>Excited? Then Join Us!</h2>
							<span>Be a part of this life changing event.</span>
						</div>
						<div class="center">
							<a href="#" data-scrollto="#header" data-animate="tada" class="button button-3d button-red button-xlarge nobottommargin"><i class="icon-check"></i> Register Now</a>
						</div>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer" class="dark">
			<div id="copyrights">
				<div class="container clearfix">
					<div class="col_half">
						Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. All Rights Reserved.<br>
					</div>
					<div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="{{ config('app.facebook_link') }}" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="{{ config('app.twitter_link') }}" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="{{ config('app.instagram_link') }}" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>
						<div class="clear"></div>
						<i class="icon-envelope2"></i> {{ config('app.info_email') }} <span class="middot">&middot;</span> <i class="icon-phone"></i> {{ config('app.phone1') }} <span class="middot">&middot;</span> <i class="icon-phone"></i> {{ config('app.phone2')  }}
					</div>
				</div>
			</div>
		</footer>
	</div>
	<div id="gotoTop" class="icon-angle-up"></div>

	<script type="text/javascript" src="/assets/pages/event_landing_page/js/jquery.js"></script>
	<script type="text/javascript" src="/assets/pages/event_landing_page/js/plugins.js"></script>

	<script type="text/javascript" src="/assets/pages/event_landing_page/js/functions.js"></script>

	<script type="text/javascript">
		$(function() {
			$( "#side-navigation" ).tabs({ show: { effect: "fade", duration: 400 } });
		});
	</script>

</body>
</html>