@extends('layouts.master')

@section('page_title')
<title>Business Management and Human Resources | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="The effective management of an organisation's human resources (HR) is a critical component of its success. As a result, highly trained and qualified HR professionals can rise to the highest levels of an organisation.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">Business Management and Human Resources</h1>
								<img class="img-responsive"  src="/assets/images/qualifications/hr.jpg"  width="100%" height="305" alt="Business management and marketing people"/>

								<div class="row ts-service-box icon-left qualification_brief">
									<div class="col-md-3 col-sm-3">
										<img class="img-responsive" src="/assets/images/qualifications/human-resources.jpg" alt="Human Resources icon"> 
									</div>
									<div class="col-md-9 col-sm-9">
										<h4>The effective management of an organisation's human resources (HR) is a critical component of its success. As a result, highly trained and qualified HR professionals can rise to the highest levels of an organisation.</h4>
									</div>
								</div>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p>
											The effective management of an organisation's human resources (HR) is a critical component of its success. As a result, highly trained and qualified HR professionals can rise to the highest levels of an organisation.
										</p>

										<p>
											The advantage of ABE's HR qualification stream is that you gain a specialism combined with a high level of knowledge of business management in general. Being able to offer HR expertise, together with wide-ranging strategic understanding of business management, provides holders of these qualifications with an enviable skill set which will prove invaluable as they progress to senior management.   It also has the potential to give a wider range of career options than a pure HR qualification.
										</p>
										<p>
											Entrepreneurialism is also embedded throughout the programmes.  This is a great benefit as employers increasingly value staff who demonstrate entrepreneurial abilities and, in an ever-changing job market, having the know-how to create your own business is an invaluable life skill.
										</p>
										
										<p>
											In addition, our full Diplomas all carry 120 academic credits, which means they match with the stages of a Bachelors degree.
										</p>
										
										<h3>Qualifications available</h3>
										<h4>ABE Level 4 Diploma in Business Management and Human Resources</h4>
										<p><strong>8 units</strong></p>
										<p>
											Gain a thorough grounding in contemporary Business Management with a particular focus on principles of Human Resources (HR).  Year one of a Bachelors degree is at the same level.  
										</p>
										<h4>ABE Level 5 Diploma in Business Management and Human Resources</h4>
										<p><strong>6 units</strong></p>
										<p>
											Develop a strong understanding of contemporary business management strategy and issues as well as a deeper knowlege of human resources.  Year two of a Bachelors degree is at the same level.
										</p>
										<h4>ABE Level 6 Diploma in Business Management and Human Resources</h4>
										<p><strong>6 units</strong></p>
										<p>
											Develop a critical strategic understanding of contemporary management and the skill set to be a senior HR professional. The final year of a Bachelors degree is at the same level.
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
	