 	<div id="main-slide" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators visible-lg visible-md">
		  	<li data-target="#main-slide" data-slide-to="0" class="active"></li>
		   <li data-target="#main-slide" data-slide-to="1"></li>
		   <li data-target="#main-slide" data-slide-to="2"></li>
		   <li data-target="#main-slide" data-slide-to="3"></li>
		</ol>

		<div class="carousel-inner">
			<div class="item active" style="background-image:url(/assets/images/slider-main/slide-1.png)">
	           	<div class="slider-content text-left">
	               <div class="col-md-12">
	                   	<h2 class="slide-title animated2">Get started on</h2>
	                   	<h3 class="slide-sub-title animated3">your road to SUCCESS</h3>
	                   	<p class="animated3">
	                   		<a href="{{ env('APP_URL') }}/journey-to-success" class="slider btn btn-primary">Watch Video</a>
	                   	</p>	     
	               </div>
	           	</div>
		   	</div>

			<div class="item" style="background-image:url(/assets/images/slider-main/slide-2.jpg)">
	           	<div class="slider-content text-right">
	               <div class="col-md-12">
	                   	<h2 class="slide-title animated4">Achieve your</h2>
	                   	<h3 class="slide-sub-title animated5">University dream</h3>	
	                   	<p>
	                   		<a href="{{ env('APP_URL') }}/what-next/university-progression" class="slider btn btn-primary">Find out more</a>
	                   	</p>	     
	               </div>
	           	</div>
		   	</div>

		   <div class="item" style="background-image:url(/assets/images/slider-main/slide-3.jpg)">
	            <div class="slider-content text-left">
	               	<div class="col-md-12">
	                   	<h2 class="slide-title animated6">Be your own boss!</h2>
	                   	<h3 class="slide-sub-title animated7">Improve your entrepreneurial skills</h3>	
	                   	<p>
	                   	<a href="{{ env('APP_URL') }}/qualifications" class="slider btn btn-primary">Find out more</a>
	                   	</p>	     
	               	</div>
	           	</div>
		    </div>

		    <div class="item" style="background-image:url(/assets/images/slider-main/slide-4.jpg)">
	            <div class="slider-content text-right">
	               	<div class="col-md-12">
	                   	<h2 class="slide-title animated6">Advance in your</h2>
	                   	<h3 class="slide-sub-title animated7">CAREER!</h3>	
	                   	<p>
	                   		<a href="{{ env('APP_URL') }}/what-next/career-progression" class="slider btn btn-primary">Find out more</a>
	                   	</p>	     
	               </div>
	           	</div>
		    </div>
		</div>

		<!-- Controllers -->
		<a class="left carousel-control" href="#main-slide" data-slide="prev">
	    	<span><i class="fa fa-angle-left"></i></span>
		</a>
		<a class="right carousel-control" href="#main-slide" data-slide="next">
	    	<span><i class="fa fa-angle-right"></i></span>
		</a>
	</div><!--/ Carousel end --> 