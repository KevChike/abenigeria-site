	<div class="sidebar">
		<div class="widget">
			<ul class="nav nav-tabs nav-stacked service-menu">
				<li class="{{ ($active_sidebar == 'study-with-us') ? 'active' : '' }}">
					<a href="{{ url('/study-with-us') }}"><small>Study With Us</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'reasons') ? 'active' : '' }}">
					<a href="{{ url('/study-with-us/reasons') }}"><small>Great reasons to study ABE</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'study-resources') ? 'active' : '' }}">
					<a href="{{ url('/study-with-us/study-resources') }}"><small>Study resources</small></a>
				</li>
				<li class="{{ ($active_sidebar == 'entry-guidelines') ? 'active' : '' }}">
					<a href=" {{ url('/study-with-us/entry-guidelines') }}"><small>Entry guidelines</small></a>
				</li>
			</ul>
		</div>
	</div>
