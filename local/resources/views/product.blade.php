@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                            <div class="panel-heading" style="text-align: center">Выберите фирму</div>

				<div class="panel-body" align='center' >
                                					
				@foreach($cats as $cat)
                                <div class="prod_img">   <a href="{{asset('products/'.str_replace(' ', '_', $cat->name))}}"><img src="{{asset('img/system/'.str_replace(' ', '_', $cat->name).'.jpg')}}" width="35%"/></a></div>
				@endforeach
                                        
                                      	
                                    
                                      
                                    
                                        
                                        
                                    
				</div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p align='left'><b><?php if(isset($title)) echo $title; else echo 'Каталог продукции'; ?></b></p></div>
                                   
				<div class="panel-body">
			{!!$table!!}
				</div>
			</div>
		
	</div>
</div>




@endsection
    
   
