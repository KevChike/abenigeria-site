@extends('layouts.master')

@section('page_title')
<title>Short Courses | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="ABE’s short courses are new and innovative - designed to be agile and flexible developing skills and knowledge around employability, entrepreneurship and business start-up. These Ofqual recognised qualifications are supported by high-quality teaching and learning resources including a study guide.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="content-inner-page">
							<h1 class="title-border-left">Short Courses</h1>
							<div class="field-items">
								<div class="field-item even" property="content:encoded">
									<p>
										ABE’s short courses are new and innovative &#8211; designed to be agile and flexible developing skills and knowledge around employability, entrepreneurship and business start-up. These Ofqual recognised qualifications are supported by high-quality teaching and learning resources including a study guide.
									</p>

									<p><strong>Features include:</strong></p>
									<ul>
										<li>Quick to complete</li>
										<li>A fast certification model</li>
										<li>Affordable</li>
										<li>Complements other areas of study</li>
										<li>Develops transferrable skills</li>
									</ul>
									<p>
										There are currently three qualifications in the short course suite with more planned:
									</p>
									
									<h3>Qualifications available</h3>
									<h4>ABE Level 2 Award in Setting Up Your Own Business</h4>
									<p><strong>1 unit</strong></p>
									<p>Get the know-how you need to successfully set up your own small enterprise.</p>
									<h4>ABE Level 3 Award in Digital Marketing Essentials for Small Businesses</h4>
									<p><strong>1 unit</strong></p>
									<p>
										Create a digital marketing plan and learn how to use technology to improve business performance.
									</p>
									<h4>ABE Level 2 Award in Employability Skills: Making the Move to Work</h4>
									<p><strong>1 unit</strong></p>
									<p>
										Give yourself the best chance of getting the job that’s right for you by developing essential skills for the modern job-seeker.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
						@include('qualifications.partials._side-bar')

						@include('layouts.partials._prospectus-siderbar')
					</div>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	