@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center">Выберите фирму</div>

				<div class="panel-body">
                                    <table id="product_table">
                                        <tr>
                                        <td><a href="">Adamas Piguet</a></td>
                                        <td><a href="">Casio</a></td>
                                        <td><a href="">Hublot</a></td>
                                        <td><a href="">Rolex</a></td>
                                        </tr>
                                    </table>	
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p>Последние добавления</p></div>
                                   
				<div class="panel-body">
			<table id="lastadd" >
    <tr>
    <?php 
    $i=1;
    foreach ($products as $product){
        echo "<td ><table id='onepr' border='1'>";
        echo "<tr><td>Добавлен".$product->created_at."</td><td> Цена:".$product->price."</td></tr>"; 
        echo "<tr><td id='primg' colspan='2'>".$product->img."</td></tr>";
        echo "<tr><td colspan='2'>".$product->inform."</td></tr>";
        echo "</table></td>";
        
        if($i==3)
                echo "</tr><tr>";
        $i++;
    }
    
    
    
    ?>
    
    </tr>
</table>     
				</div>
			</div>
		
	</div>
</div>




@endsection
    
   
