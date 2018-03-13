@extends('layouts.master')

@section('page_title')
<title>Fees Breakdown | {{ config('app.name') }}</title>
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
								<h1 class="title-border-left">Fees Breakdown</h1>
								<div class="field-items">
									<div class="field-item even" property="content:encoded">
										<p><h3>Registration Fees</h3></p>
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th style="width: 50%;">Qualification</th>
													<th style="width: 50%;">Fee</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 2 short courses</td>
													<td>&pound;60</td>
												</tr>
												<tr>
													<td>Level 3 short courses</td>
													<td>&pound;90</td>
												</tr>
												<tr>
													<td>Level 3 Business Start up</td>
													<td>&pound;150</td>
												</tr>
												<tr>
													<td>Level 3 Business Essentials</td>
													<td>&pound;125</td>
												</tr>
												<tr>
													<td>Level 4 Foundation Diploma</td>
													<td>&pound;45</td>
												</tr>
												<tr>
													<td>Level 4 Diploma</td>
													<td>&pound;45</td>
												</tr>
												<tr>
													<td>Level 5 Diploma</td>
													<td>&pound;60</td>
												</tr>
												<tr>
													<td>Level 6 Diploma</td>
													<td>&pound;75</td>
												</tr>
											</tbody>
										</table>
										<br>
										<p><h3>Assessment Fees</h3></p>
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th style="width: 50%;">Qualification</th>
													<th style="width: 50%;">Fee</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 4 Diploma</td>
													<td>&pound;45 per unit</td>
												</tr>
												<tr>
													<td>Level 5 Diploma</td>
													<td>&pound;60 per unit</td>
												</tr>
												<tr>
													<td>Level 6 Diploma</td>
													<td>&pound;60 per unit</td>
												</tr>
												<tr>
													<td>Exemption fee for Level 4</td>
													<td>&pound;52.50 per unit</td>
												</tr>
												<tr>
													<td>Exemption fee for Level 5</td>
													<td>&pound;67.50 per unit</td>
												</tr>
												<tr>
													<td>Exemption fee for Level 6</td>
													<td>&pound;75 per unit</td>
												</tr>
											</tbody>
										</table>
										<p>ABE Annual Subscription Fees (Student Member): &pound;38.5</p>
										<p>ABE Transcript of exam history: &pound;30 per transcript</p>
										<p>
											<strong>Please note:</strong> <br>
											Registration, assessment, annual subscription and transcript fees are fixed by ABE UK and must be paid for in full at the prevailing exchange rate as at the day payment is being made.
										</p>
										<p>ABE reserves the right to make alterations to fees at its discretion.</p> <br>

										<p><h3>Tuition Fees</h3></p>
										<p><strong>Diploma Programme</strong></p>
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th style="width: 40%;">Level</th>
													<th style="width: 20%;">Full time</th>
													<th style="width: 20%;">Part time</th>
													<th style="width: 20%;">Price for a module</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Level 4 (Foundation Diploma)</td>
													<td>&#x20A6;350,000</td>
													<td>&#x20A6;500,000</td>
													<td>&#x20A6;150,000</td>
												</tr>
												<tr>
													<td>Level 4</td>
													<td>&#x20A6;650, 000</td>
													<td>&#x20A6;750,000</td>
													<td>&#x20A6;150, 000</td>
												</tr>
												<tr>
													<td>Level 5</td>
													<td>&#x20A6;700, 000</td>
													<td>&#x20A6;850,000</td>
													<td>&#x20A6;150,000</td>
												</tr>
												<tr>
													<td>Level 6</td>
													<td>&#x20A6;800,000</td>
													<td>&#x20A6;900,000</td>
													<td>&#x20A6;150,000</td>
												</tr>
											</tbody>
										</table>

										<p><strong>Short Courses</strong></p>
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th style="width: 60%;">Programme</th>
													<th style="width: 20%;">Full time</th>
													<th style="width: 20%;">Part time</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Award in setting Up Your Own Business</td>
													<td>&#x20A6;60, 000</td>
													<td>&#x20A6;70, 000</td>
												</tr>
												<tr>
													<td>Award in Employability Skills (Making the Move to Work).</td>
													<td>&#x20A6;60,000</td>
													<td>&#x20A6;70,000</td>
												</tr>
												<tr>
													<td>Award in Digital Marketing Essentials</td>
													<td>&#x20A6;150, 000</td>
													<td>&#x20A6;250,000</td>
												</tr>
											</tbody>
										</table>

										<p><strong>Certificate Courses</strong></p>
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th style="width: 60%;">Programme</th>
													<th style="width: 20%;">Full time</th>
													<th style="width: 20%;">Part time</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Certificate in Business Essentials</td>
													<td>&#x20A6;300,000</td>
													<td>&#x20A6;450,000</td>
												</tr>
												<tr>
													<td>Certificate in Business Start Up.</td>
													<td>&#x20A6;400,000</td>
													<td>&#x20A6;550,000</td>
												</tr>
											</tbody>
										</table>

										<p>
											<strong>Mode of Payment: </strong><br>
											For tuition fees, payment can be made in instalments with 50% paid upon completion of application, and the balance paid in subsequent months. Please note, however, that all fees must be fully paid before assessment dates as defaulters would be prevented from taking assessments.
										</p> <br><br>

										<p>
											<strong>For further enquiries:</strong>  <br>
											Call: {{ config('app.phone1') }}, {{ config('app.phone3') }}, {{ config('app.phone4') }}, {{ config('app.phone5') }} <br>
											Email us: {{ config('app.info_email') }} or visit any of our <a href="{{ url('/centres') }}">centres</a> close to you.
										</p>

									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">
							{{-- @include('what-next.partials._side-bar') --}}

							@include('layouts.partials._prospectus-siderbar')
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	