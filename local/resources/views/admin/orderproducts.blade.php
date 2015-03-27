<div>
   <hr /> 
   <table class="table table-hover adminorder">
        
        <tr>
            <th><b>Инфо о заказчике</b></th>
            <th><b>Заказ</b></th>
            <th><b>Количество</b></th>
            <th><b>Адресс</b></th>
            <th><b>Дата заказа</b></th>
            <th>Статус</th>
			
        </tr>
       <?php 
      
       foreach ($orders as $order){
           echo "<tr><td><b>ФИО : </b>".$order->lastname." ".$order->name."
	   <br /><b>Телефон: </b>".$order->tel;
           echo "</td><td vertialign='middel' align='center'>";
          
	   foreach($order->id_product as $p){
               
               echo $p->marka." :".$p->model." <img src='".asset("img/clock/".$p->img)."' width='14%'/><br />";
         }
         echo "</td><td>";
         foreach($order->number as $n){
             echo $n."<br / ><br / >";
         }
       echo "</td><td>".$order->address."</td><td>".$order->created_at."</td><td>";
       
       if($order->status == null){
           echo Form::open(array('url' => '/admin/orderprod', 'method' => 'get'));
           echo Form::label('stat', 'Укажите статус заказа').":".Form::select('stat', array('Ожидает отправки' => 'Ожидает отправки', 'Отправлен' => 'Отправлен', 'Ожидает модерации'=>'Ожидает модерации'))."<br />";
           echo "<input type='hidden' name='order_id' value='".$order->id."'/>";
           echo Form::submit('Указать').Form::close()."</td>" ;
       }
 else {
           echo $order->status."</td>";
       }
       }
       ?>
        
        
        
        
    </table>
    
</div>
