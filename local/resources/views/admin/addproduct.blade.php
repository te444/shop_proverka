

<div id="addproduct">
    <form  method="get" action="#" enctype="multipart/form-data">
       Название товара: <input type="text" name="name" /><br/>
        Цена:<input type="text" name="price"/><br/>
       Изображение: <input type="file" name="img"/><br/>
        <input type="submit" value="Добаваить" />
    </form>
    
</div>




<?php


echo Form::open('register', 'POST');

echo Form::label('username', 'Username') . Form::text('username', Input::old('username'));
echo Form::label('email', 'E-mail') . Form::text('email', Input::old('email'));
echo Form::label('password', 'Password') . Form::password('password');

echo Form::submit('Register!');

echo Form::token() . Form::close();

?>