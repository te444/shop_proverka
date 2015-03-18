@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p align="center"><b>Корзина товаров</b></p></div>
                                   
				<div class="panel-body">
                                    <div id="pre_text"<p><b>Отметьте интересующие вас товары и перейдите к заполнению формы отправки заказа</b></p></div>
			       <table class="table table-hover basket-table">
  
  
                                   <tr>
                                       <th>Товар</th>
                                       <th>Изображение</th>
                                       <th>Дата добавления заказа</th>
                                       <th>Удалить из корзины</th>
                                   </tr>
                                   
                           @foreach($orderproducts as $orderproduct)
                           <tr>
                               <td>{{$orderproduct->marka.": ".$orderproduct->model}}</td>
                               <td><img src="{{asset('img/clock/'.$orderproduct->img)}}" width="25%"/></td>
                               <td></td>
                               <td><img src="{{asset('img/system/delete.png')}}" width="15%"/></td>
                           </tr>
                           
                           
                           @endforeach
                           
  
  
  
  
                             </table>
                                    <div id='order'>
                                        <hr/>
                                        <br/>
                                        <br/>
                                        <p id="pre_text2"><b>Укажите ваши данные</b></p>
                                        <table class="table order_form" style="text-align: center;">
                                            <?php
                

                echo Form::open(array('url' => '/admin/add', 'method' => 'get'));
                echo  "<tr><td>".Form::label('name', 'Имя').":".Form::text('name')."</td><br />";
                echo  "<td>".Form::label('last_name', 'Фамилия').":".Form::text('last_name')."</td></tr><br />";
                echo  "<tr><td>".Form::label('address', 'Адрес').":".Form::text('address')."</td><br />";
                echo  "<td>".Form::label('tel', 'Телефон').":".Form::text('tel')."</td></tr><br />";
               
                echo "<tr><td colspan='2'>".Form::submit('Заказать')."</td></tr>";

        
?>
                                            </table> 
                                        
                                        
                                    </div>
				</div>
			</div>
		
	</div>
</div>
@endsection
