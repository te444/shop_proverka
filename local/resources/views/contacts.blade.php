@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p style="text-align: center;"><b>Как нас найти</b></p></div>
                                   
				<div class="panel-body">
                                    <div id="contat_img">
                                        <table>
                                            <tr>
                                                <td><img src="{{asset('img/system/nemiga04.08.1.jpg')}}" width="85%"/></td>
                                                <td><img src="{{asset('img/system/shop.jpg')}}" width="100%"/></td>
                                            </tr>
                                        </table>
                                    
                                    
                                    </div>
                                    <p style="font-style: italic"> <b> Адрес</b>:<br/>
                                        г.Минск, ул. Немига 3,<br /> ТЦ Немига-3, 2-ой этаж, пав.№231 </p><hr/>
                                   
                                    <p style="font-size: 110%;"><b><i>Контактный телефон</i></b>:<br/>
                                    MTC 80297418896;<br/>
                                    Velcom 80441688675;<br/>
                                    Life :) 80259632538;<br/>
                                    </p>
                                     <hr/>
                                     <br/>
                                     <br/>
                                     <div id="contact_map"><br/> <p><b>Мы на карте</b></p> 
                                         <p>
                                             <script src="http://api-maps.yandex.ru/2.0/?load=package.full&lang=ru-RU" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=S0cNAud_5mUcNsM7mAnk3J8wIIMN7uK-&width=550&height=400"></script>
                                             
                                         </p>
                                         </div>
				</div>
			</div>
		
	</div>
</div>
@endsection
