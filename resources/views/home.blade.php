@extends('layouts.master')

@section('page_title')
<title>{{ config('app.name') }} | Your road to success</title>
@endsection

@section('page_description')
<meta name="description" content="ABE is a not-for-profit awarding and emebership body based in the UK which provides global recognised business qualifications to learners across the globe.">
@endsection

@section('content')  

	@include('layouts.partials._slider')

	<section class="call-to-action no-padding solid" style="background-color: #33587C;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="action-icon pull-left">
						<i class="fa fa-paper-plane-o"></i>
					</div>
					<div class="call-to-action-text">
						<h3 class="action-title">Let us help you achieve your dreams</h3>
						<p class="action-sub-title">
							ABE provides flexible business qualifications which are accepted by a <br>
							large number of universities and help develop your career.
						</p>
					</div>
					<div class="call-to-action-btn">
						<a class="btn btn-secondary" href="{{ env('APP_URL') }}/qualifications">Read More</a>
						<a class="btn btn-primary btn-white" href="{{ env('APP_URL') }}/contact">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
   </section>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="{{ env('APP_URL') }}/qualifications/business-management">
						<div class="ts-service-box text-center">
							<div class="ts-service-box-icon">
								<img src="/assets/images/qualifications/business-management.jpg">
							</div>
							<div class="ts-service-box-info">
								<h4>Business Management</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="{{ env('APP_URL') }}/qualifications/business-start-up-and-entrepreneurship">
						<div class="ts-service-box text-center">
							<div class="ts-service-box-icon">
								<img src="/assets/images/qualifications/entrepeneurship.jpg">
							</div>
							<div class="ts-service-box-info">
								<h4>Business Start-up and Entrepreneurship</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="{{ env('APP_URL') }}/qualifications/business-management-and-human-resources">
						<div class="ts-service-box text-center">
							<div class="ts-service-box-icon">
								<img src="/assets/images/qualifications/human-resources.jpg">
							</div>
							<div class="ts-service-box-info">
								<h4>Business Management and Human Resources</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="{{ env('APP_URL') }}/qualifications/business-management-and-marketing">
						<div class="ts-service-box text-center">
							<div class="ts-service-box-icon">
								<img src="/assets/images/qualifications/marketing-management.jpg">
							</div>
							<div class="ts-service-box-info">
								<h4>Business Management and Marketing</h4>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	@include('layouts.partials._testimonial')
	
	@include('layouts.partials._featured-on')

@endsection
	