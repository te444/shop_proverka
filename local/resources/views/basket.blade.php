@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p align="center"><b>Корзина товаров</b></p></div>
                                   
				<div class="panel-body">
                                   @if(count($orderproducts)>0)
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
                               <td><a href="{{asset('basket/delete/'.$orderproduct->id)}}" ><img src="{{asset('img/system/delete.png')}}" width="12%"/></a></td>
                           </tr>
                           
                           
                           @endforeach
                          
  
  
  
  
                             </table> 
                                    @endif
                                    
                                    @if(count($orderproducts)<1)
                                    <div id="empty_basket">
                                        <div id="empty_basket_img"><img src="{{asset('/img/system/empty_basket.png')}}" width="35%" /></div>
                                        <div id="empty_basket_prew"><p><b>Корзина пока что пуста<br/><br/>Перейдите в раздел "Продукция", и добавьте понравившийся товар в корзину.</b></p></div>
                                    </div>
                                    @endif
                                   <?php 
                                       
                                            
                
                            if(count($orderproducts)>0){
                echo " <div id='order'>
                                        <hr/>
                                        <br/><br/>";
                echo "<p id='pre_text2'><b>Укажите ваши данные</b></p>
                                        <table class='table order_form' style='text-align: center;'>";
                echo Form::open(array('url' => '/admin/add', 'method' => 'get'));
                echo  "<tr><td>".Form::label('name', 'Имя').":".Form::text('name')."</td><br />";
                echo  "<td>".Form::label('last_name', 'Фамилия').":".Form::text('last_name')."</td></tr><br />";
                echo  "<tr><td>".Form::label('address', 'Адрес').":".Form::text('address')."</td><br />";
                echo  "<td>".Form::label('tel', 'Телефон').":".Form::text('tel')."</td></tr><br />";
               
                echo "<tr><td colspan='2'>".Form::submit('Заказать')."</td></tr> </table> ";
                            }
        
?>
                                          
                                        
                                        
                                    </div>
				</div>
			</div>
		
	</div>
</div>
@endsection
