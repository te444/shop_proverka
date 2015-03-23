
<table id="lastadd" >
    
        <?php
        
        $i=1;
         $k=0;
        ?>
        @foreach($products as $product)  
           <td ><table id='onepr' >
                   <tr><td id='price_prew'><b>{{$product->marka.":".$product->model}}</b></td></tr>
        <tr><td id='primg' > <img src='{{asset('img/clock/'.$product->img)}}' width='57%'/></td></tr>
        <tr><td id='price_prod'>Цена: {{$product->price}} $</td></tr>
        
        <tr><td  id='more' ><a href='{{asset('product/'.$product->id)}}' class='btn btn-primary' role='button'>Подробнее<a/></td></tr>
               </table></td>
               
        <?php
       
        if($i==3)
                echo "</tr><tr>";
        $i++;
        $k++;
          if($k==6){
              break;
          }
          ?>
        @endforeach
   <?php
        if (isset($products))
           echo "<tr><td colspan='6'>".$products->render()."</td></tr>";
    ?>
  
    
    
</table>
    
   