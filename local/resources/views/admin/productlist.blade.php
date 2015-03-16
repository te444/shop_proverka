<div>
    
    <table class='table list'>
        
        <tr>
            <th>Товар</th>
            <th>Картинка</th>
            <th>Дата Добавления</th>
            <th>Действие</th>
        </tr>
       <?php 
       
       foreach ($allproduct as $product){
           echo "<tr><td>".$product->marka." :".$product->model."</td><td><img src='".asset("img/clock/".$product->img)."' width='25%'/></td><td>".$product->created_at."</td>
		   <td><a href='".asset('/admin/delete/'.$product->id)."'>
		   <img src='".asset('/img/system/delete.png')."' width='12%'></a> &nbsp &nbsp &nbsp 
		   <a href='".asset('/admin/edit/'.$product->id)."'>
		   <img src='".asset('/img/system/edit.png')."' width='12%'></a></td></tr>";
       }
       
       
       ?>
        
        
        
        
    </table>
    
</div>
