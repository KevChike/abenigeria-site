@extends('layouts.master')

@section('page_title')
<title>Business Management and Marketing | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Understanding and meeting the wants and needs of an organisation's customers and communicating the value and benefits of its goods or services are crucial components of the marketing function.">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<section id="block-menu-block-3" class="block block-menu-block clearfix">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<div class="content-inner-page">
								<h1 class="title-border-left">Business Management and Marketing</h1>
								<img class="img-responsive"  src="/assets/images/qualifications/entrepeneurship-banner.jpg"  width="100%" height="305" alt="Business management and marketing people"/>

								<div class="row ts-service-box icon-left qualification_brief">
									<div class="col-md-3 col-sm-3">
										<img class="img-responsive" src="/assets/images/qualifications/marketing-management.jpg" alt="Marketing icon"> 
									</div>
									<div class="col-md-9 col-sm-9">
										<h4>Understanding and meeting the wants and needs of an organisation's customers and communicating the value and benefits of its goods or services are crucial components of the marketing function.</h4>
									</div>
								</div>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p>
											Marketing provides interesting and varied career opportunities with roles that can be very creative or highly analytical, depending on where your interest lies.  It also offers the opportunity to rise to the very highest level of an organisation.   
										</p>
										
										<p>
											The advantage of ABE's marketing stream is that you gain a specialism combined with general business management expertise.  Being able to offer marketing skills, along with a wide-ranging strategic understanding of business management, will provide holders of our qualifications with an enviable skill set which will prove invaluable as they progress to senior management.  It also has the potential to give a wider range of career options than a pure marketing qualification. 
										</p>
										<p>
											Entrepreneurialism is also embedded throughout the programmes.  This is another great benefit as employers value staff who demonstrate entrepreneurial abilities and, in an ever-changing job market, having the know-how to create your own business is an invaluable life skill.
										</p>
										<p>
											In addition, our full Diplomas all carry 120 academic credits, which means they match with the stages of a Bachelors degree.
										</p>
										
										<h3>Qualifications available</h3>
										<h4>ABE Level 4 Diploma in Business Management and Marketing</h4>
										<p><strong>8 units</strong></p>
										<p>
											Provides a thorough grounding in the core principles of marketing and business management.  The first year of a Bachelors degree is at the same level. 
										</p>
										<h4>ABE Level 5 Diploma in Business Management and Marketing</h4>
										<p><strong>6 units</strong></p>
										<p>
											Develop a strong understanding of contemporary business management strategy together with the knowledge required of a highly skilled marketing professional.  The second year of a Bachelors degree is at the same level.
										</p>
										<h4>ABE Level 6 Diploma in Business Management and Marketing</h4>
										<p><strong>6 units</strong></p>
										<p>
											Develop a critical strategic understanding of contemporary management issues and the skill set you need as a senior marketing professional.    The final year of a Bachelors degree is at the same level.
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
	