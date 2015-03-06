@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Админка</div>

				
				<div id="admin_cat">
				<ul>
				<li><a href="{{asset('admin/tools')}}">Настройки сайта</a></li>
				<li><a href="{{asset('admin/look_and_fell')}}">Внешний вид</a></li>
				<li><a href="{{asset('admin/parse')}}">Парсинг</a></li>
				<li><a href="{{asset('admin/production_list')}}">Перечень продокции</a></li>
				<li><a href="{{asset('admin/users')}}">Зарегестрированные пользователи</a></li>
				<li><a href="{{asset('admin/basket')}}">Корзина заказов</a></li>
				
				
				</ul>
				</div>	
				<?php 
				if(isset($parse_form)){
				echo $parse_form; 
				}
				if(isset($regusers)){
				echo $regusers;
				}
				
				
				?>
			</div>
		</div>
	</div>
</div>


@endsection
