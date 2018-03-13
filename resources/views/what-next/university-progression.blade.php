@extends('layouts.master')

@section('page_title')
<title>University Progression | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="ABE has agreements with universities around the world. These institutes value students with ABE qualifications because ABE learners have the necessary study skills and background knowledge to succeed.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">University Progression</h1>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p>
											ABE has agreements with universities around the world. These institutes value students with ABE qualifications because ABE learners have the necessary study skills and background knowledge to succeed.
										</p>
										<p>
											Depending on your ABE qualification, you can to fast track to a Bachelors or Masters degree. Typically, an ABE Level 5 qualification will get you onto the second or third year of a Bachelors, whilst a Level 6 qualification can enable you to go onto the final year or directly to a Masters including MBA. 
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
	