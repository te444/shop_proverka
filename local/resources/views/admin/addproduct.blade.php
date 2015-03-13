@extends('app')

@section('content')

<?php
echo "<hr / >";

echo Form::open(array('url' => '/admin/add', 'method' => 'post', 'files'=>true));
echo  Form::label('marka', 'Марка товара').":".Form::text('marka')."<br />";
echo  Form::label('model', 'Модель товара').":".Form::text('model')."<br />";
echo  Form::label('price', 'Цена').":".Form::text('price')."<br />";
echo  Form::label('property', 'Характеристики').":".Form::text('property')."<br />";
echo  Form::label('weight', 'Вес').":".Form::text('weight')."<br />";
echo  Form::label('image', 'Изображение').":".Form::file('image')."<br />";
echo  Form::label('video', 'Видео').":".Form::file('video')."<br />";
echo Form::submit('Отправить');

        
?>



@endsection