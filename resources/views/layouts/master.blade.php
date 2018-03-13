@include('layouts.partials._header')

	@include('layouts.partials._top-bar')

	{{-- @include('layouts.partials._campaign-bar') --}}

	@include('layouts.partials._logo-area')

	@include('layouts.partials._nav')

	@yield('content')
	
@include('layouts.partials._footer')