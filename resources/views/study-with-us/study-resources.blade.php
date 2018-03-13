@extends('layouts.master')

@section('page_title')
<title>Study Resources | {{ config('app.name') }}</title>
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
								<h1 class="title-border-left">Study Resources</h1>

								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<br/>
										<p>
											Once you have joined ABE, you will be able to access the Members Area. Here you can keep your personal details up to date, check on your account and access the following resources which are designed to help you achieve your qualification:
										</p>
										<ul>
											<li>
												A comprehensive syllabus for every unit in your programme. This clearly breaks down the learning outcomes and assessment criteria for that unit.
											</li>
											<li>
												A detailed study guide for every unit - includes key information, case studies and activities for classroom and private study.  These can be downloaded free in PDF format.
											</li>
											<li>
												Revision presentations, academic resources and reading lists.
											</li>
											<li>
												Sample assessments, past question papers plus suggested answers and examiners' notes (new units will come with comprehensive sample assessments prior to past papers and examiners' notes being available).
											</li>
											<li>
												For units assessed by examination - a thorough explanation of the exam structure so you know what to expect when you turn over your paper.
											</li>
											<li>
												Essential articles and information relating to the examinations, which include: Research skills,Study tips, Plagiarism, Using the Harvard Referencing System and Understanding command words.
											</li>
										</ul>
										<p>
											Finally, all members receive an electronic copy of Focus magazine, which can also be found online in the Members Area. It contains ABE news, relevant articles based on building a career in business and student success stories. Hard copies are supplied to ABE study centres.
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
	