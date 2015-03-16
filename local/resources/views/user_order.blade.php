@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center;"><?php
 echo "<b>".$product->name."</b>";
?></div>

		
<table class="table">

<tr>
<td>Марка</td>
<td><?php
 echo $product->marka;
?></td>
</tr>




<tr>
<td>Модель</td>
<td>sdfsdfd</td>
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
    <a href="#" class="btn btn-primary btn-lg active" role="button">Добавить в карзину</a>
</td>
</tr>

</table>

		</div>
	</div>
</div>
    
    
    
    
    
    
   


@endsection
    
   
