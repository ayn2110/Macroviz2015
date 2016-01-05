<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Macroviz - @yield('document_title')</title>
	@include ('frontend/layouts/head')
	@yield('head')
</head>

<body>
	<div class="container List hidden-xs">

@yield('list')
@include('frontend/layouts/footer')
	</div>
<div id="Page">
<div class="cover">
	@include ('frontend/layouts/navbar')
	<div class="cover-image" style="background-image: url('{{ asset('images/frontend/banner/article_banner.jpg') }}')"></div>
	<div class="section" id="PageSection">

@yield('content')
	</div>


</div>
</div>
<footer class="section visible-xs">
      <div class="container">
        <div class="row">
          <div class="col-sm-12" style="text-align:center">
            <p>
              <span>Macroviz © 2015&nbsp;&nbsp;</span>
              <span>English</span><span>&nbsp;&middot;</span>
              <span>日本語</span><span>&nbsp;&middot;</span>
              <span>中文</span>
            </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>

</html>
