@extends('app')

@section('content')
<div class="container">
	<div class="row">
		
			<div class="panel panel-default">
                            <div class="panel-heading"><p style="text-align: center;"><b>Последние добавления</b></p></div>
                                   
				<div class="panel-body">
			<?php
                        echo $last_added;
                         ?>       
				</div>
			</div>
		
	</div>
</div>
@endsection
