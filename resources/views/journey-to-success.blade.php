@extends('layouts.master')

@section('page_title')
<title>Journey to Success | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Campus Technologies Limited is a multi-product consulting firm that provides Information Technology and Business Management consulting services across various industry sectors. We are a provider of Information Management, Technology solutions and Business Management training in Nigeria">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container text-center">
			<div class="col-md-12">
				<iframe width="1060" height="615" src="https://www.youtube.com/embed/uvykf1BAF60" frameborder="0" allowfullscreen=""></iframe>
			</div>
		</div>
   </section>
   
   @include('layouts.partials._footer-call-to-action')

   @include('layouts.partials._testimonial')

@endsection
	