@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading admin_pannel"><div id="admin_cat">
				<ul>
				<li><a href="{{asset('admin/add')}}">Добавить товар</a></li>
				<li><a href="{{asset('admin/productlist')}}">Перечень продокции</a></li>
				<li><a href="{{asset('admin/users')}}">Зарегестрированные пользователи</a></li>
				<li><a href="{{asset('admin/orderprod')}}">Корзина заказов</a></li>
				</ul>
				</div>	
</div>
				<div class="panel-body">
	<?php 
				if(isset($parse_form)){
				echo $parse_form; 
				}
				if(isset($regusers)){
				echo $regusers;
                                }
                                if(isset($addproduct)){
                                    echo $addproduct;
                                }
				   if(isset($productlist)){
                                    echo $productlist;
                                }
                                if(isset($orderproducts)){
                                    echo $orderproducts;
                                }
				
				?>
                                    </div>
                            	</div>

            </div>
            </div>
            </div>                
				
				

@endsection
