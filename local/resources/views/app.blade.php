<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<link href="/css/app.css" rel="stylesheet">
@foreach ($styles as $style)
<link href='{{asset($style)}}' rel='stylesheet' />
@endforeach

<!-- Fonts -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle Navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>

</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<ul class="nav navbar-nav">
<li><a href="/">Главная</a></li>
<li><a href="{{asset('/products')}}">Продукция</a></li>
    <li><a href="{{asset('/contacts')}}">Контакты</a></li>

</ul>
<ul class="basket_img">

<li><a href="{{asset('/basket')}}"><img src="{{asset('img/system/basket.png')}}" width="7%;"/></a></li>

</ul>
</div>
</div>
</nav>
    
	
	
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="img_carusel" src="{{asset('img/slide-bar/slide1.jpg')}}" alt="...">
      <div class="carousel-caption">
          <p><b><i>Гарнтия качества</i></b></p>
      </div>
    </div>
    <div class="item">
      <img class="img_carusel" src="{{asset('img/slide-bar/slide2.jpg')}}" alt="...">
      <div class="carousel-caption">
          <p><b><i>Гарнтия качества</i></b></p>
          <p><b><i>Быстрая доставка</i></b></p>
      </div>
    </div><div class="item">
      <img class="img_carusel" src="{{asset('img/slide-bar/slide3.jpg')}}" alt="...">
      <div class="carousel-caption">
            <p><b><i>Гарнтия качества</i></b></p>
         <p> <b><i>Быстрая доставка</i></b></p>
         <p>  <b><i>Низкие цены</i></b></p>
         
      </div>
    </div>
   <!-- Controls -->
  
  </div>

  
</div>

    
@yield('content')

<div>
<p>asdasd

</p>
</div>
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
