@extends('layouts.master')

@section('page_title')
<title>What Next | {{ config('app.name') }}</title>
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
	        				<h1 class="banner-title title-border-left" style="color: #256DCC;">What Next</h1>
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
								<h1 class="title-border-left">What Next</h1>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<br/>
										<p>
											You have gained your ABE qualification - congratulations and well done. Your qualification is the beginning of your road to success, whether that be continuing your ABE studies and going on to higher level qualifications, progressing on to a university degree, or forging ahead with your career. Here are some of the options available to you:
										</p>
										<p><strong>Progress with ABE</strong></p>
										<p>
											Our full Diplomas build on the learning you have had in the preceeding Level.   Each carries 120 credits and the levels match the stages of a Bachelors degree which means from Level 6 you can go onto a Masters. Go to the <a href="{{ env('APP_URL') }}/qualifications"> Qualifications </a> section to find out more about your next ABE qualification.
										</p>
										<p><strong>Top up to a Bachelors or Masters</strong></p>
										<p>
											We have formal progression agreements with universities around the world, these provide a fast and affordable route to a related Bachelors or Masters such as an MBA. Typically, a Level 5 ABE qualification will get you onto the second or final year of a Bachelors degree, with a Level 6 you can onto the final year of a Bachelors or directly onto an MBA. Go to Find a University page for full details of agreements and entry requirements.
										</p>
										<p><strong>Employment</strong></p>
										<p>
											Employers value ABE because our qualifications develop practical workplace skills, a strong understanding of strategic business objectives and sound theoretical knowledge of business principles. This adds up to a winning combination that will make you a real asset in the workplace. Read the stories of our Alumni (past ABE students) to be inspired by their success.  You can also read more about how ABE alumni are making a difference at companies around the world on our Career Progression page.
										</p>
										<p><strong>Other professional studies</strong></p>
										<p>
											Should you wish to go on to specialise in a particular field, we have agreements with a number of sector specific professional bodies. Click here to go to the Professional Exemptions page.
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
							@include('what-next.partials._side-bar')

							@include('layouts.partials._prospectus-siderbar')
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	