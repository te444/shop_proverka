@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center">Выберите фирму</div>

				<div class="panel-body" align='center' >
                                    <table id="product_table">
                                        <tr>
										
										@foreach($cats as $cat)
				<td><a href="{{asset('products/'.str_replace(' ', '_', $cat->name))}}">{{$cat->name}}</a></td>
										@endforeach
                                        
                                       
                                        </tr>
                                    </table>	
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p align='center'><b >Последние добавления</b></p></div>
                                   
				<div class="panel-body">
			{!!$table!!}
				</div>
			</div>
		
	</div>
</div>




@endsection
    
   
