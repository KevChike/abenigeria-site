@extends('errors.layouts.error-layout')

@section('page_title')
<title>Error 404 | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="row">
				<div class="error-page text-center">
					<div class="error-code">
						<h2><strong>Error 404</strong></h2>
					</div>
					<div class="error-message">
						<h3>Oops... Page Not Found!</h3>
					</div>
					<div class="error-body">
						Try using the button below to go to home page of the site <br>
						<a href="{{ env('APP_URL') }}" class="btn btn-primary">Back to Home Page</a>
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
	