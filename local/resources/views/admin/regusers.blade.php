<div>
    
    <table id="regusers">
        
        <tr>
            <td>Имя пользователя</td>
            <td>Email</td>
            <td>Дата регистрации</td>
            <td>Действие</td>
        </tr>
       <?php 
       
       foreach ($users as $user){
           echo "<tr><td>".$user->name."</td><td>".$user->email."</td><td>".$user->created_at."</td><td></td></tr>";
       }
       
       
       ?>
        
        
        
        
    </table>
    
</div>
