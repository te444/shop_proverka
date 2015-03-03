@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Админка</div>

				
				<div id="admin_cat">
				<ul>
				<li><a href="{{asset('/tools')}}">Настройки сайта</a></li>
				<li><a href="{{asset('/look_and_fell')}}">Внешний вид</a></li>
				<li><a href="{{asset('/parse')}}">Парсинг</a></li>
				<li><a href="{{asset('/production_list')}}">Перечень продокции</a></li>
				<li><a href="{{asset('/registered_users')}}">Зарегестрированные пользователи</a></li>
				
				
				</ul>
				</div>	
				
			</div>
		</div>
	</div>
</div>
@endsection
