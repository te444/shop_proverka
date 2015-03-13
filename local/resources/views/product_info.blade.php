@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center;"><?php
 echo "Описание     <b>". $product->marka.": ".$product->model."</b>";
?></div>

		
<table class="table">

<tr>
<td>Марка</td>
<td><?php
 echo $product->marka;
?></td>
<td rowspan="5"><img src='<?php echo asset("img/clock/".$product->img); ?>' width='80%'>
</td>
<td rowspan="5">
    <video src='<?php echo asset("video/clock/".$product->video); ?>' width="80%" style="border-radius: 10px;" controls></video>
</td>
</tr>




<tr>
<td>Модель</td>
<td><?php
 echo $product->model;
?></td>
</tr>


<tr>
<td>Вес</td>
<td><?php
 echo $product->weight;
?></td>
</tr>


<tr>
<td>Особые характеристики</td>
<td><?php
 echo $product->property;
?></td>
</tr>


<tr>
<td>Цена</td>
<td><?php
 echo $product->price." $";
?></td>
</tr>


<tr>
    <td colspan="2" style="text-align: center;">
        <form method="get" >
         <input type="hidden" name="add" value="<?php echo $product->id; ?>" />
         <input type="submit" value="Добавить в корзину" />
        </form>
    
</td>
</tr>

</table>
                            
		</div>
	</div>
</div>
    
    
    
    
    
    
    
    
   


@endsection
    
   
