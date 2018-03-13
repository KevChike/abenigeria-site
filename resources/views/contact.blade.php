@extends('layouts.master')

@section('page_title')
<title>Contact Us | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Campus Technologies Limited is a multi-product consulting firm that provides Information Technology and Business Management consulting services across various industry sectors. We are a provider of Information Management, Technology solutions and Business Management training in Nigeria">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar sidebar-right">
						<div class="widget">
							<h3 class="widget-title">Contact us</h3>

							<div class="contact-info-box">
								<i class="fa fa-map-marker">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Visit Us</h4>
									<p>{{ config('app.abuja_office') }}</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-envelope-o">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Mail Us</h4>
									<p>{{ config('app.info_email') }}</p>
								</div>
							</div>

							<div class="contact-info-box">
								<i class="fa fa-phone">&nbsp;</i>
								<div class="contact-info-box-content">
									<h4>Call Us</h4>
									<p>{{ config('app.phone1') }}</p>
									<p>{{ config('app.phone2') }}</p>
									<p>{{ config('app.phone3') }}</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-6 col-md-offset-1">
					
	    			<h3 class="contact-form-title">Contact Form</h3>

	    			<form action="{{ url('/contact') }}" method="POST" role="form" autocomplete="off">
	    				{{ csrf_field() }}

	    				{{-- Notification starts here --}}
                        @if ( session()->has('success_msg') )
                        <div class="row">
                        	<div class="col-md-12">
	                            <div class="success_alert">
	                                {{ session()->get('success_msg') }}
	                            </div>
	                        </div>
                        </div>
                        @endif
                        {{-- Notification ends here --}}
	    				
						<div class="row">
							<div class="col-md-12">
								<div class="form-group  @if($errors->has('name')) has-error @endif">
								<input class="form-control form-control-name" name="name" id="name" placeholder="Your name" type="text" value="{{ old('name') }}">
								@if ($errors->has('name'))
                                        <span class="help-block help-block-error">{{ $errors->first('name') }}</span>
                                    @endif
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group  @if($errors->has('email')) has-error @endif">
									<input class="form-control form-control-email" name="email" placeholder="Email" type="email" value="{{ old('email') }}">
									@if ($errors->has('email'))
                                        <span class="help-block help-block-error">{{ $errors->first('email') }}</span>
                                    @endif
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="form-group  @if($errors->has('phone')) has-error @endif">
									<input class="form-control form-control-name" name="phone" placeholder="Phone number" type="text" value="{{ old('phone') }}">
									@if ($errors->has('phone'))
                                        <span class="help-block help-block-error">{{ $errors->first('phone') }}</span>
                                    @endif
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="form-group  @if($errors->has('subject')) has-error @endif">
									<input class="form-control form-control-subject" name="subject" placeholder="Subject" value="{{ old('subject') }}">
									@if ($errors->has('subject'))
                                        <span class="help-block help-block-error">{{ $errors->first('subject') }}</span>
                                    @endif
								</div>
							</div>	
						</div>
						<div class="form-group  @if($errors->has('message')) has-error @endif">
							<textarea class="form-control form-control-message" name="message" placeholder="Message" rows="10" style="resize: none;">{{ old('message') }}</textarea>
							@if ($errors->has('message'))
                                <span class="help-block help-block-error">{{ $errors->first('message') }}</span>
                            @endif
						</div>
						<div class="text-right"><br>
							<button class="btn btn-primary solid blank" type="submit">Send Message</button> 
						</div>
					</form>
	    		</div>
			</div>
		</div>
	</section>

	<section id="map-wrapper" class="no-padding">
		<div class="container-fluid">
			<div id="map" class="map"></div>
		</div>
	</section>

@endsection

@section('page_scripts')
	<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyC0ZJ3J7yFi8XgLdit6n-AejKOlGKVWjio"></script>
	<script type="text/javascript" src="/assets/js/gmap3.js"></script>

	<script type="text/javascript">
		$(function () {
	       $('#map')
	         .gmap3({
	           address:"8 Sirakoro Street, Off Blantrye Street, Wuse II, Abuja.",
	           zoom: 15,
	           mapTypeId : google.maps.MapTypeId.ROADMAP,
	           scrollwheel: false
	         })
	         .marker(function (map) {
	           return {
	             position: map.getCenter(),
	             icon: 'http://themewinter.com/html/marker.png'
	           };
	         });
	     });
	</script>
@endsection
	