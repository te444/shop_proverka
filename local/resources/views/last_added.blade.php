
<table id="lastadd" >
    <tr>
    <?php 
    $i=1;
    $k=0;
    foreach ($products as $product){
        echo "<td ><table id='onepr' border='1'>";
        echo "<tr><td>".$product->marka.": ".$product->model."</td><td>Добавлен".$product->created_at."</td><td> Цена:".$product->price." $</td></tr>"; 
        echo "<tr><td id='primg' colspan='3'> <img src='img/clock/".$product->img."' width='57%'/></td></tr>";
        echo "<tr><td  id='more' colspan='3'><a href='product/".$product->id."' class='btn btn-primary' role='button'>Подробнее<a/></td></tr>";
        echo "</table></td>";
        
        if($i==3)
                echo "</tr><tr>";
        $i++;
        $k++;
          if($k==6){
              break;
          }
    }
    
    
    
    ?>
    
    </tr>
</table>
    
   