@extends('app')

@section('content')
<?php
 echo $product->name;
?>
<table>

<tr>
<td>Марка</td>
<td><?php
 echo $product->marka;
?></td>
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
 echo $product->price;
?></td>
</tr>


<tr>
<td colspan="2">
<a href="">Добавить в карзину</a>
</td>
</tr>

</table>



@endsection
    
   
