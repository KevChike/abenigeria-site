@extends('layouts.master')

@section('page_title')
<title>Study With Us | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('content')  

	<div id="banner-area" class="banner-area" style="background-image:url(/assets/images/banner/study-us.jpg);">
		<div class="banner-text">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title title-border-left" style="color: #256DCC;">Study With Us</h1>
	        			</div>
	        		</div>
	        	</div>
       		</div>
    	</div>
	</div>

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">Study With Us</h1>
								<img class="img-responsive"  src="/assets/images/how-to-study.jpg" alt=""/>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<br/>
										<p>
											ABE welcomes learners from all over the world. Our flexible programmes are designed to help you build your knowledge of business practice at a comfortable pace. Established for over 40 years, ABE has a reputation for providing relevant, accessible and affordable business qualifications. If you dream of success, we are here to help you achieve that goal.
										</p>
										<p><strong>How to become an ABE student</strong></p>
										<p>There are three simple steps to studying for an ABE qualification:</p>
										<p>Step 1: Decide which qualification you wish to study.<br><br>
											If you are undecided, Business Management is a good place to start because you get an all-round grounding in business and with ABE you can easily opt to specialise in a particular discipline at a later stage. <a href="{{ env('APP_URL') }}/qualifications"> Click here </a>to find out more about our qualifications.
										</p>
										<p>
											Step 2: Choose a centre (or college) and enrol on their next ABE course.
										</p>
										<p>
											Go to our <a href="{{ env('APP_URL') }}/faq"> FAQ</a> to find out more about becoming an ABE student.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
							@include('study-with-us.partials._side-bar')

							@include('layouts.partials._prospectus-siderbar')
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	