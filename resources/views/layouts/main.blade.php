<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials._head')
<body>
	@include('partials._header')
	@include('partials._nav')
	@yield('content')
	@include('partials._footer')
	@include('partials._script')


</body>

</html>