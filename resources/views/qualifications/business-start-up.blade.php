@extends('layouts.master')

@section('page_title')
<title>Business Start-up and Entrepreneurship | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="The world's most successful and famous business people are entrepreneurs. They are the innovators who launch products and services to bring ideas to life, create employment and drive economic growth.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">Business Start-up and Entrepreneurship</h1>
								<img class="img-responsive"  src="/assets/images/qualifications/entrepeneurship-banner.jpg"  width="100%" height="305" alt="Entrepeneurship people"/>

								<div class="row ts-service-box icon-left qualification_brief">
									<div class="col-md-3 col-sm-3">
										<img class="img-responsive" src="/assets/images/qualifications/entrepeneurship.jpg" alt="Entrepeneurship icon"> 
									</div>
									<div class="col-md-9 col-sm-9">
										<h4>The world's most successful and famous business people are entrepreneurs. They are the innovators who launch products and services to bring ideas to life, create employment and drive economic growth.</h4>
									</div>
								</div>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p>
											Being able to identify and develop ideas into successful business opportunities requires a wide-ranging skill set. If you would like to run your own business, ABE's Business Start-up is here to help. The qualification takes you through the steps to help you put together a viable business plan which you an use to launch your own enterprise.   
										</p>

										<p>
											Look out for more short Entreneaurship awards being launched later this year. 
										</p>

										<h3>Qualifications available</h3>
										<h4>ABE Level 2 Award in Setting Up Your Own Business</h4>
										<p><strong>1 unit</strong></p>
										<p>
											Get the know-how you need to successfully set up your own small enterprise. 
										</p>
										<h4>ABE Level 3 Certificate in Business Start-up</h4>
										<p><strong>1 unit</strong></p>
										<p>
											This qualification is designed to give you the tools to successfully and confidently launch a new business.
										</p>
										<h4>ABE Level 3 Award in Digital Marketing Essentials for Small Businesses</h4>
										<p><strong>1 unit</strong></p>
										<p>
											Create a digital marketing plan and learn how to use technology to improve business performance.
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
	