<html>
	@include('partials.head')
<body>
	<div class="main-wrapper">
		@include('partials.header')
		@yield('content')
		@include('partials.footer')
	</div>
</body>
</html>