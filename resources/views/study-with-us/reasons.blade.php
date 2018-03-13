@extends('layouts.master')

@section('page_title')
<title>Great Reasons to Study ABE | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">	
								<h1 class="title-border-left">Great reasons to study ABE</h1>
								
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<br/>
										<p>Learners worldwide love our qualifications because they are:</p>
										<h5>Professional</h5>
										<p>
											Our qualifications are designed to give you the skills you need to succeed and make a difference in the workplace.
										</p>
										<h5>Affordable</h5>
										<p>
											We are a not-for-profit organisation so our objective is to ensure you are not disadvantaged because of high prices and we endeavour to keep costs to a minimum. Our fast track routes to degree programmes are much more affordable than traditional routes.
										</p>
										<h5>Recognised</h5>
										<p>
											Our qualifications are recognised by colleges, universities, employers and governments around the world.
										</p>
										<h5>Supported</h5>
										<p>
											As an ABE member you will be able to access a wealth of resources to support your studies.
										</p>
										<h5>International</h5>
										<p>
											For more than 40 years, learners around the world have been benefiting from ABE qualifications. 
										</p>
										<h5>Quality assured</h5>
										<p>
											ABE is recognised by Ofqual, the UK government's qualifications regulator. We have similar recognition by other regulatory authorities around the world.
										</p>
										<h5>Proven</h5>
										<p>
											Our alumni speak for themselves. They are working in a diverse range of industries and organisations. Many are in top jobs or running their own successful enterprises.
										</p>
										<h5>Flexible</h5>
										<p>
											You can study full-time or part-time, attend a college or self-study. All our programmes share common units which allow you to explore several areas of business management and then decide to specialise if you wish to do so.
										</p>
										<h5>A great route to university</h5>
										<p>
											ABE's qualifications are accepted by a large number of universities. Learners with Levels 5 and 6 can fast track onto a Bachelors or Masters degree course, meaning the cost their education is dramatically reduced.
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
	