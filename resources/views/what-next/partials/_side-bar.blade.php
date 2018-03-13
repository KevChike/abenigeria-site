	<div class="sidebar">
		<div class="widget">
			<ul class="nav nav-tabs nav-stacked service-menu">
				<li class="{{ ($active_sidebar == 'what-next') ? 'active' : '' }}">
					<a href="{{ url('/what-next') }}"><small>What Next?</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'career-progression') ? 'active' : '' }}">
					<a href="{{ url('/what-next/career-progression') }}"><small>Career Progression</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'university-progression') ? 'active' : '' }}">
					<a href="{{ url('/what-next/university-progression') }}"><small>University Progression</small></a>
				</li>
				<li>
					<a href=" {{ url('/downloads/List-of-schools-for-ABE.pdf') }}" target="_blank"><small>Find a University</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'professional-exemptions') ? 'active' : '' }}">
					<a href=" {{ url('/what-next/professional-exemptions') }}"><small>Professional Exemptions</small></a>
				</li>
			</ul>
		</div>
	</div>
