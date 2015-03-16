@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p>Корзина товаров</p></div>
                                   
				<div class="panel-body">
			       <table class="table table-hover basket-table">
  
  
                                   <tr>
                                       <th>Товар</th>
                                       <th>Изображение</th>
                                       <th>Дата добавления заказа</th>
                                       <th>Удалить из корзины</th>
                                   </tr>
                                   
                           {!! print_r($orderproducts)!!}
                           
  
  
  
  
                             </table>

				</div>
			</div>
		
	</div>
</div>
@endsection
