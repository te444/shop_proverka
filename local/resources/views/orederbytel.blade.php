<div>
    
    <table class='table list'>
        
        <tr>
	        <th>Информация о заказчике</th>	
            <th>Товар</th>
            <th>Картинка</th>
            <th>Дата Добавления</th>
            <th>Статус</th>
        </tr>
       <?php 
       
       foreach ($products as $product){
	   echo "<tr><td>".$product->lastname." ".$product->name."
	   <br />".$product->tel."<br />".$product->address." </td><td vertialign='middel' align='center'>";
	   foreach($prodinfo as $prod){
           echo $prod->marka." :".$prod->model."<br />";
		 }
		 echo "</td><td align='center'>";
		 foreach($prodinfo as $prod){
		 echo "<img src='".asset("img/clock/".$prod->img)."' width='10%'/><br />";
		 }
	   echo "</td><td></td><td></td></tr>";
       }
       
       ?>
        
        
        
        
    </table>
    
</div>
