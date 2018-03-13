
	<nav class="site-navigation navigation">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="site-nav-inner pull-left">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
		    			</button>

		    			<div class="collapse navbar-collapse navbar-responsive-collapse">
		    				<ul class="nav navbar-nav">
								<li class="{{ ($active_menu == 'home') ? 'active' : '' }}">
			                  		<a href="{{ env('APP_URL') }}">Home</a>
			               		</li>
			               		<li class="{{ ($active_menu == 'study-with-us') ? 'active' : '' }}">
			                  		<a href="{{ env('APP_URL') }}/study-with-us">Study With Us</a>
			               		</li>
			               		<li class="{{ ($active_menu == 'qualifications') ? 'active' : '' }}">
			                  		<a href="{{ env('APP_URL') }}/qualifications">Qualifications</a>
			               		</li>
			               		<li class="{{ ($active_menu == 'what-next') ? 'active' : '' }}">
			                  		<a href="{{ env('APP_URL') }}/what-next">What Next</a>
			               		</li>
			               		<li class="{{ ($active_menu == 'fees') ? 'active' : '' }}">
			                  		<a href="{{ env('APP_URL') }}/fees">Fees</a>
			               		</li>
			               		<li class="{{ ($active_menu == 'centres') ? 'active' : '' }}">
			                  		<a href="{{ env('APP_URL') }}/centres">Centres</a>
			               		</li>
			            	</ul>
		    			</div>
					</div>
					{{-- <div class="request-quote pull-right">
		    			<a href="#">Request Quote</a>
		    		</div> --}}
				</div>
			</div>
		</div>
	</nav>