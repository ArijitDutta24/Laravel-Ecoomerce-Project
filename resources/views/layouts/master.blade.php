@include('partials.header')

<div class="wrapper">
<!-- Navigation Start -->
	@include('partials.nav')		
<!-- Navigation End -->

<!--Sidebar + Content Part -->
	@yield('content')

<!-- Footer -->
	@include('partials.footer')
	
</div>

@include('partials.script')