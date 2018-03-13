@extends('layouts.master')

@section('page_title')
<title>Career Progression | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="We know employers value ABE because our qualifications develop practical workplace skills, a strong understanding of strategic business objectives and sound theoretical knowledge of business principles.  This adds up to a winning combination that will make you a real asset in the workplace.  Our qualifications also give many former learners the confidence and skills to set up and run their own successful enterprises.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">Career Progression</h1>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p>
											We know employers value ABE because our qualifications develop practical workplace skills, a strong understanding of strategic business objectives and sound theoretical knowledge of business principles.  This adds up to a winning combination that will make you a real asset in the workplace.  Our qualifications also give many former learners the confidence and skills to set up and run their own successful enterprises.
										</p>
										<p><strong>Be inspired</strong></p>
										<p>
											Here are the findings from our most recent careers survey among ABE qualification holders.
										</p><br>
										<p>
											<img src="/assets/images/survey.jpg" class="img-responsive">
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
	