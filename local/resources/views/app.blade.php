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
<li><a href="{{asset('/basket/basket')}}">Контакты</a></li>
<li><a href="{{asset('/basket/basket')}}">Корзина</a></li>
</ul>
<ul class="nav navbar-nav navbar-right">
@if (Auth::guest())
<li><a href="{{asset('/auth/login')}}">Login</a></li>
<li><a href="{{asset('/auth/register')}}">Register</a></li>
@else
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
<ul class="dropdown-menu" role="menu">
<li><a href="/auth/logout">Logout</a></li>
</ul>
</li>
@endif
</ul>
</div>
</div>
</nav>
    <p id="img_main"> <img  src="img/slide-bar/Untitled.jpg" alt="img" /></p>
@yield('content')
<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>
