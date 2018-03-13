@extends('layouts.master')

@section('page_title')
<title>Qualifications | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('content')  

	<div id="banner-area" class="banner-area" style="background-image:url(/assets/images/banner/qualifications.jpg);">
		<div class="banner-text">
     		<div class="container">
	        	<div class="row">
	        		<div class="col-xs-12">
	        			<div class="banner-heading">
	        				<h1 class="banner-title title-border-left" style="color: #256DCC;">Qualifications</h1>
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
								<h1 class="title-border-left">Qualifications</h1>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<br/>
										<p>
											ABE qualifications will help you excel. Whether you're a working professional wishing to add to your managerial skill set, or an ambitious young learner wanting qualifications that will help you stand out in the workplace, ABE is here to help you succeed.
										</p>
										<p><strong>Reasons to study for an ABE qualification:</strong></p>
										<ul>
											<li>It will give you the skills to build a great career</li>
											<li>You can top up to a university degree quickly and affordably</li>
											<li>It’s flexible – units can be studied over any time period</li>
										</ul>
										<p>
											What's more, ABE is recognised by Ofqual (the UK government's qualifications regulator for England) as well as by similar bodies worldwide. You can be assured that your qualification has international recognition by respected, independent education authorities.
										</p>
										<p>Download the flyer about what our qualification levels mean:</p>
										<p>
											<a class="btn btn-primary btn-sm" href="/downloads/ABE-Qualification-Levels.pdf" target="_blank">Download Flyer</a>
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
	