<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Macroviz - @yield('document_title')</title>
	@include ('frontend/layouts/head')
	@yield('head')
</head>

<body>
	<div id="List"></div>
<div id="Page">
<div class="cover">
	@include ('frontend/layouts/navbar')
	<div class="cover-image" style="background-image: url('{{ asset('images/frontend/banner/article_banner.jpg') }}')"></div>
	<div class="section" id="PageSection">

@yield('content')
	</div>


</div>
</div>
	@include('frontend/layouts/footer')
</body>

</html>
