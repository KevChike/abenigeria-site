@extends('layouts.master')

@section('page_title')
<title>Business Management | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Cost-effective, professional qualifications offering a winning combination of academic expertise and practical workplace skills to ensure you excel in a management role.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">Business Management</h1>
								<img class="img-responsive"  src="/assets/images/qualifications/business-group.jpg"  width="100%" height="305" alt="Business management people" />

								<div class="row ts-service-box icon-left qualification_brief">
									<div class="col-md-3 col-sm-3">
										<img class="img-responsive" src="/assets/images/qualifications/business-management.jpg" alt="Shaking hands icon"> 
									</div>
									<div class="col-md-9 col-sm-9">
										<h4>Cost-effective, professional qualifications offering a winning combination of academic expertise and practical workplace skills to ensure you excel in a management role.</h4>
									</div>
								</div>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p>
											Expertise in business management will enable you to excel in many different career paths.  If you are ambitious, our qualifications will give you skills to achieve your goals. 
										</p>
										<p>
											Our portfolio has been developed to provide the expertise needed for a management career, now and in the future.  From entry level (3 or 4), you can progress up to Level 6 which will hone the skills and knowledge required for you to work at a senior strategic level.
										</p>

										<p>
											Entrepreneurialism is embedded throughout the programmes.  This is a great benefit as employers increasingly value staff who demonstrate entrepreneurial abilities and, in an ever-changing job market, having the know-how to create your own business is an invaluable life skill.
										</p>
										<p>
											In addition, our full Diplomas all carry 120 credits, which means they match with the stages of a Bachelors degree.
										</p>
										<h3>Qualifications available</h3>
										<h4>ABE Level 3 Certificate in Business Essentials</h4>
										<p><strong>1 unit</strong></p>
										<p>
											Gain an introductory understanding of how businesses are run and develop contemporary workplace skills which will enable you to add value to your organisation or future employer.  
										</p>
										<h4>ABE Level 4 Foundation Diploma in Business Management</h4>
										<p><strong>4 units</strong></p>
										<p>
											A good general grounding in core aspects of business, designed for those who wish to go quickly onto the next ABE Level and into employment. If you wish to progress to a university degree, the eight unit - 120 credit - Diploma is likely to provide more favourable progression options in the long term.
										</p>
										<h4>ABE Level 4 Diploma in Business Management</h4>
										<p><strong>8 units</strong></p>
										<p>
											Provides a thorough grounding in Business Management and a great springboard for progressing to higher levels of academic study. Year one of a Bachelors degree is at the same level.
										</p>
										<h4>ABE Level 5 Diploma in Business Management</h4>
										<p><strong>6 units</strong></p>
										<p>
											Develop a strategic understanding of contemporary business management principles and practical application.  Year two of a Bachelors degree is at the same level. 
										</p>
										<h4>ABE Level 6 Diploma in Business Management</h4>
										<p><strong>6 units</strong></p>
										<p>
											Develops the theoretical knowledge and strategic skillset you need to excel in a leadership role.  The final year of a Bachelors degree is at the same level. 
										</p>
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
							@include('qualifications.partials._side-bar')

							@include('layouts.partials._prospectus-siderbar')
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	