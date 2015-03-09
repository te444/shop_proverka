
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
    
   