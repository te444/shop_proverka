@extends('app')
@section('content')
<div class="container">
    <div class="row">
			<div class="panel panel-default">
                            <div class="panel-heading"><p align="center"><b>Информация о вашем заказе</b></p></div>
                              <div class="panel-body">
    <table class='table table-hover telorder'>
       <tr>
	    <th>Информация о заказчике</th>	
            <th>Товар</th>
            <th>Картинка</th>
            <th>Дата Добавления</th>
            <th>Статус</th>
        </tr>
       
       <?php 
       foreach ($products as $product){
	   echo "<tr><td id='yni'><b>ФИО : </b>".$product->lastname." ".$product->name."
	   <br /><br /><b>Телефон: </b>".$product->tel."<br /><br /><b>Адрес : </b>".$product->address." </td><td vertialign='middel' align='center'>";
	   foreach($prodinfo as $prod){
           echo $prod->marka." :".$prod->model."<br /><br />";
		 }
		 echo "</td><td align='center'>";
		 foreach($prodinfo as $prod){
		 echo "<img src='".asset("img/clock/".$prod->img)."' width='14%'/><br /><br />";
		 }
	   echo "</td><td>".$product->created_at."</td><td></td></tr>";
       }
       
       ?>
       
        
        
    </table>
                                    
                                    
                                    </div>
				</div>
			</div>
		
	</div>
    
</div>
@endsection
