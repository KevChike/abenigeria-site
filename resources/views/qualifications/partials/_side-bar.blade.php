	<div class="sidebar">
		<div class="widget">
			<ul class="nav nav-tabs nav-stacked service-menu">
				<li class="{{ ($active_sidebar == 'qualifications') ? 'active' : '' }}">
					<a href="{{ url('/qualifications') }}"><small>Qualifications</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'business-management') ? 'active' : '' }}">
					<a href="{{ url('/qualifications/business-management') }}"><small>Business Management</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'business-marketing') ? 'active' : '' }}">
					<a href="{{ url('/qualifications/business-management-and-marketing') }}"><small>Business Management and Marketing</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'business-hr') ? 'active' : '' }}">
					<a href=" {{ url('/qualifications/business-management-and-human-resources') }}"><small>Business Management and Human Resources</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'business-start-up') ? 'active' : '' }}">
					<a href=" {{ url('/qualifications/business-start-up-and-entrepreneurship') }}"><small>Business Start-up and Entrepreneurship</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'short-courses') ? 'active' : '' }}">
					<a href=" {{ url('/qualifications/short-courses') }}"><small>Short Courses</small></a>
				</li>
			</ul>
		</div>
	</div>
