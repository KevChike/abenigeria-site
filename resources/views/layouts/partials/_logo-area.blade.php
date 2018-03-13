
	<header id="header" class="header">
		<div class="container">
			<div class="row">
				<div class="logo col-lg-3 col-sm-3 col-xs-12">
	                <a href="{{ env('APP_URL') }}">
	                	<img src="/assets/images/CTL-logo.png" alt="" class="ctl_logo">
	                </a>
	         	</div>

	         	<div class="col-xs-12 col-lg-9 col-sm-9 header-right text-center" style="margin-topz: 20px;">
	         		<ul class="top-info">
						<li>
							<div class="info-box"><span class="info-icon"><i class="fa fa-phone">&nbsp;</i></span>
								<div class="info-box-content">
									<p class="info-box-title">{{ config('app.phone1') }}</p>
									<p>&nbsp;</p>
								</div>
							</div>
						</li>
						<li>
							<div class="info-box"><span class="info-icon"><i class="fa fa-envelope">&nbsp;</i></span>
								<div class="info-box-content">
									<p class="info-box-title">{{ config('app.info_email') }}</p>
									<p>&nbsp;</p>
								</div>
							</div>
						</li>
						<li>
							<div class="info-box hidden-sm hidden-xs">
								<div class="info-box-content">
					                <a href="{{ env('APP_URL') }}">
					                	<img src="/assets/images/ABE-logo.png" alt="" class="abe_logo">
					                </a>
						        </div>
					        </div>
						</li>
					</ul>
	         	</div>
	         	<div class="logo col-xs-12 visible-sm visible-xs">
	                <a href="{{ env('APP_URL') }}">
	                	<img src="/assets/images/ABE-logo.png" alt="" class="abe_logo">
	                </a>
	         	</div>
			</div>
		</div>
	</header>
	