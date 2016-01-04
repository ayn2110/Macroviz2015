<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="http://pingendo.github.io/pingendo-bootstrap/themes/default/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet" type="text/css">
  <style>

  </style>
</head>

<body>
  <div class="cover">




	@include ('frontend/layouts/navbar')


    <div class="cover-image" style="background-image: url('{{ asset('images/frontend/index_banner.jpg') }}')"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1 class="text-inverse">We are a digital creative agency.</h1>
          <p class="text-inverse">We Build Web & Mobile Apps</p>
          <br>
          <br>
          <a class="btn btn-lg btn-primary">See Our Work</a>
        </div>
      </div>
    </div>
  </div>


  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class="text-center text-primary">Our Services</h1>
          <p class="text-center">We deliver interactive services and media platforms, including e-commerce, web applications, mobile apps, and print media.</p>
        </div>
      </div>
      <div class="row" id="Service">
        <div class="col-md-4">
          <img src="{{ asset('images/frontend/icon/cart.svg') }}" class="center-block img-circle img-responsive">
          <h3 class="text-center">E-Commerce</h3>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('images/frontend/icon/e_learning.svg')}}" class="center-block img-circle img-responsive">
          <h3 class="text-center">E-Learning</h3>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('images/frontend/icon/app.svg')}}" class="center-block img-circle img-responsive">
          <h3 class="text-center">Mobile Marketing</h3>
        </div>
      </div>
    </div>
  </div>


</body>

</html>
