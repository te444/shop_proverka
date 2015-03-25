@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p style="text-align: center;"><b>Доставка и Оплата</b></p></div>
                                   
				<div class="panel-body dilevery">
                                    <div id="dilevery">
                                    <div id="dilevery_img">
                                        <img src="{{asset('/img/system/dilevery.jpg')}}"  width="75%"/>
                                    </div>
                                    <p>Мы доставим ваш заказ в любую точку мира.</p>
                                    <p>  Доставка по Москве,Минску,Киеву — бесплатно. Заказ можно оплатить курьеру.</p><hr />
                                    <p> Самовывоз в Минске — бесплатно. Адрес: г.Минск, ул. Немига 3,. Пн-Пт с 9:00 до 18:00.</p><hr />
                                    <p> Доставка по СНГ и миру — по тарифам выбранной транспортной компании указанной в телефонном звонке.</p>
                                    <img id='dilevery_img2' src="{{asset('/img/system/dilevery2.jpg')}}"  width="20%"/>
                                    </div>
				</div>
			</div>
		
	</div>
</div>
@endsection
