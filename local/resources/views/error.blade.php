@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p style="text-align: center;"><b>Что-то пошло не так</b></p></div>
                                   
				<div class="panel-body">
			
                                   @if(isset($prod_status))
                                   <p>Заказ с указанным телефоном не найден</p>
                                   <p>Пожалуйста укажите номер в точности такой который вы указали в заказе</p>
                                   <p><?php
                                        echo Form::open(array('url' => 'basket/status', 'method' => 'post'));
                                        echo  Form::label('tel_status', 'Введите телефон указанный при добавлении заказа').":".Form::text('tel_status')."<br />";
                                        echo Form::submit('Запрос').Form::close() ;
                                        ?>
                                   </p>
                                   @endif
                                    
                                    
				</div>
			</div>
		
	</div>
</div>
@endsection
