<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laravel</title>
<link rel="icon" href="{{asset('/img/system/favicon.png')}}" type="image/x-icon" /> 
<link href="/css/app.css" rel="stylesheet">
@foreach ($styles as $style)
<link href='{{asset($style)}}' rel='stylesheet' />
@endforeach
  

<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

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
<ul id="menu" class="nav navbar-nav">
    <li><a href="/">Главная</a></li>
    <li ><a  href="{{asset('/products')}}" class="<?php if(asset($_SERVER['REQUEST_URI'])== asset('/products')) echo "selected";  ?>">Продукция</a></li>
    <li><a href="{{asset('/contacts')}}" class="<?php if(asset($_SERVER['REQUEST_URI'])== asset('/contacts')) echo "selected";  ?>">Контакты</a></li>

</ul>
    
<ul class="basket_img" align='right'>
    <li align='left'>
        <a href="{{asset('/basket')}}">
        <p >Корзина</p>
        <p>Товаров <span id="cart_ajax_output">: 0</span></p>
</a>

</li>

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
<img class="img_carusel" src="{{asset('img/slide-bar/slide-one.jpg')}}" alt="...">
<div class="carousel-caption">
<p><b><i>Гарнтия качества</i></b></p>
</div>
</div>
<div class="item">
<img class="img_carusel" src="{{asset('img/slide-bar/slide-two.jpg')}}" alt="...">
<div class="carousel-caption">
<p><b><i>Гарнтия качества</i></b></p>
<p><b><i>Быстрая доставка</i></b></p>
</div>
</div><div class="item">
<img class="img_carusel" src="{{asset('img/slide-bar/slide-three.jpg')}}" alt="...">
<div class="carousel-caption">
<p><b><i>Гарнтия качества</i></b></p>
<p> <b><i>Быстрая доставка</i></b></p>
<p> <b><i>Низкие цены</i></b></p>
</div>
</div>
<!-- Controls -->
</div>
</div>
    
@yield('content')


<!-- Scripts -->
	<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<div id="footer">
    <table id="table_footer">
        <tr>
            <td>  <img src="{{asset('/img/system/footer_logo.png')}}"</td>
            <td id="main_prew"> <b>Контактыный телефон</b><br/>+375(33)359-85-22  </td>
            <td><b>Вопросы и пожелания отправляйте на почту</b><br/>
                                  clock-shop@gmail.com</td>
                
        </tr>
    </table>
 
</div>
</body>
</html>
