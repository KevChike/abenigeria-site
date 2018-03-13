@extends('layouts.master')

@section('page_title')
<title>About Us | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Campus Technologies Limited is a multi-product consulting firm that provides Information Technology and Business Management consulting services across various industry sectors. We are a provider of Information Management, Technology solutions and Business Management training in Nigeria">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="col-xs-12">
				<h1 class="title-border-left">About Us</h1>
			</div>
			
			<div class="col-md-12">
				<p>
					Campus Technologies Limited is a multi-product consulting firm that provides Information Technology and Business Management consulting services across various industry sectors. We are a provider of Information Management, Technology solutions and Business Management training in Nigeria; providing solutions that enable individuals and organizations to transform their businesses. Our clients are varied; they include individuals, large, small and medium sized businesses, governmental and non-governmental institutions, agencies and departments.
				</p>
				<p>
					In Partnership with ABE UK, we help our clients identify, implement, and manage innovation in business, prepare for corporate world experiences as well as career advancement. 
				</p>
				<p>
					ABE is a not-for profit organization which provides internationally recognized qualifications and a worldwide professional association for business executives.
				</p>
				<p>
					ABE was founded with a clear social purpose to improve business education for aspiring entrepreneurs in developing countries. This mission required courage, resilience, and the determination to make a difference - all of which have become defining features of ABE.
				</p>
				<p>
					Today, over 1.5 million people have mastered essential and advanced modern business concepts through studying for an ABE qualification, and ABE continues to play a vital role in helping to diversify and grow economies, reducing inequality within and among countries.
				</p>
				<p>
					ABE learners develop skills and initiative needed to succeed in a global workplace where traditional structures of commerce and value creation are being changed or bypassed completely. ABE graduates are socially engaged, ethical and responsible citizens. In this respect, the impact that ABE has extends far beyond our students, our alumni go on to lead change, inspire communities and build successful social or commercial enterprises all over the world.
				</p>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	