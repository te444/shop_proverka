@extends('app')

@section('content')
<div class="container">
	<div class="row">
			<div class="panel panel-default">
                            <div class="panel-heading"><p align="center"><b>Корзина товаров</b></p></div>
                                   
				<div class="panel-body">
                                    
                                   @if(isset($orderproducts) && count($orderproducts)>0)
                                    <div id="pre_text"><p><b>Товары помещенные в корзину. </b></p></div>
			       <table class="table table-hover basket-table">
  
  
                                   <tr>
                                       <th>Товар</th>
                                       <th>Изображение</th>
                                       <th>Количество</th>
                                       <th>Дата добавления заказа</th>
                                       <th>Удалить из корзины</th>
                                   </tr>
                                   
                           @foreach($orderproducts as $orderproduct)
						   
                           <tr>
                               <td><b>{{$orderproduct->marka.": ".$orderproduct->model}}</b></td>
                               <td><img src="{{asset('img/clock/'.$orderproduct->img)}}" width="25%"/></td>
                               <td><?php echo Form::open(array('url' => '/basket/add', 'method' => 'get'));
                                     
                                  ?>
                                   <input type="number" min="1" value="1" name="number" /></td>
                               <td>
                                  
                               </td>
                               <td><a href="{{asset('basket/delete/'.$orderproduct->id)}}" ><img src="{{asset('img/system/delete.png')}}" width="12%"/></a></td>
                           </tr>
                           
                           
                           @endforeach
                          
  
  
  
  
                             </table> 
                                    @endif
                                    
                                    @if(isset($orderproducts) && count($orderproducts)<1)
                                    <div id="empty_basket">
                                        <div id="empty_basket_img"><img src="{{asset('/img/system/empty_basket.png')}}" width="35%" /></div>
                                        <div id="empty_basket_prew"><p><b>Корзина на даный момент пуста<br/><br/>Перейдите в раздел "Продукция", и добавьте понравившийся товар в корзину.</b></p><br/>
                                            
                                            <p style="color:red;"><b> Если вы ранее отправляли заказ, и хотите узнать его статус пожалуйста</b></p>
                                        <?php
                                        echo Form::open(array('url' => 'basket/status', 'method' => 'post'));
                                        echo  Form::label('tel_status', 'Введите телефон указанный при добавлении заказа').":".Form::text('tel_status')."<br />";
                                        echo Form::submit('Запрос').Form::close() ;
                                        ?>
                                        </div>
                                    </div>
                                    @endif
                                    
                                    @if(Session::has('alert') != null)
                                    <script>
                                        alert('Заказ отправлен на обработку.В ближайшее время с вами свяжутся по телефону.Что бы узнать статус вашего заказа веведите номер телефона(в таком же формате, который указывали при добавлении заказа),нажав на кнопку "Статус заказа"');
                                    </script>
                                    @endif
                                    
                                   <?php 
                                   
                if(isset($orderproducts) && count($orderproducts)>0){
                echo " <div id='order'>
                                        <hr/>
                                        <br/><br/>";
               echo "<p id='pre_text2'><b>Укажите ваши данные</b></p> 
			   <table class='table order_form' style='text-align: center;'>";
                  
               echo  "<tr><td>".Form::label('name', 'Имя').":".Form::text('name')."</td><br />";
               echo  "<td>".Form::label('last_name', 'Фамилия').":".Form::text('last_name')."</td></tr><br />";
               echo  "<tr><td>".Form::label('address', 'Адрес').":".Form::text('address')."</td><br />";
               echo  "<td>".Form::label('tel', 'Телефон').":".Form::text('tel')."</td></tr><br />";
               echo "<tr><td colspan='2'>".Form::submit('Заказать').Form::close()."</td></tr> </table> ";
               
                            }
        
?>
                                    </div>
				</div>
			</div>
		
	</div>
</div>
@endsection
