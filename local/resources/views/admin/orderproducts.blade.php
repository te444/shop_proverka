<div>
   <hr /> 
    <table id="orderproducts" border="1">
        
        <tr>
            <th><b>Наименование</b></th>
            <th><b>Дата заказа</b></th>
            <th><b>Количество</b></th>
            <th><b>Коментарии к заказу</b></th>
			<th><b>Действие</b></th>
			
        </tr>
       <?php 
       
       foreach ($orders as $order){
           echo "<tr><td>".$order->product_name."</td><td>".$order->date."</td><td>".$order->number."</td><td>".$order->comments."</td>
		   <td></td></tr>";
       }
       
       
       ?>
        
        
        
        
    </table>
    
</div>
