@extends('layouts.master')

@section('page_title')
<title>Our Centres | {{ config('app.name') }}</title>
@endsection

@section('page_description')
<meta name="description" content="Campus Technologies Limited is a multi-product consulting firm that provides Information Technology and Business Management consulting services across various industry sectors. We are a provider of Information Management, Technology solutions and Business Management training in Nigeria">
@endsection

@section('content')  

	<section id="main-container" class="main-container">
		<div class="container">
			<div class="col-xs-12">
				<h1 class="title-border-left">Our Centres</h1>
			</div>
			
			<div class="col-md-12">
				<br><br>
				<table class="table table-hoverz">
					<tbody>
						<tr>
							<td>
								<p><strong>Abuja centre</strong></p>
								<address>
									8 Sirakoro Street, Off Blantyre Street, <br> Wuse II, <br> Abuja, Nigeria.
								</address>
								<address>
									<strong>Phone:</strong>	+234 803 535 1690, +234 803 535 1692 <br>
									<strong>Email:</strong> info@abenigeria.com
								</address>
							</td>
						</tr>

						<tr>
							<td>
								<p><strong>Kaduna centre</strong></p>
								<address>
									Ek House, 5D Kanta Road, <br> Kaduna, Nigeria.
								</address>
								<address>
									<strong>Phone:</strong>	+234 803 535 1694 <br>
									<strong>Email:</strong> info@abenigeria.com
								</address>
							</td>
						</tr>

						<tr>
							<td>
								<p><strong>Kano centre</strong></p>
								<address>
									<strong>COMING SOON!</strong>
								</address>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	@include('layouts.partials._footer-call-to-action')

@endsection
	