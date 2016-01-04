<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Macroviz - @yield('document_title')</title>
	@include ('layouts/head')
</head>

<body>
	@include ('layouts/navbar')
	@include ('layouts/banner')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				@include ('layouts/content')
			</div>
		</div>
	</div>
		@include ('layouts/list')
	@include('layouts/footer')
</body>

</html>
