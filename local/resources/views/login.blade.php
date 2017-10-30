@extends('plantilla.plantilla')
@section('content')
<body onload="nobackbutton()">
	<section style="width: 100%;">
	<div class="container-fluid" style="margin-bottom: 2%;">
		<div class="col-xs-6 col-md-6" style=" width:50% ;background: white; margin-top: 80px;">
					<img src="<?php echo URL::asset('img/principal.jpg') ?>" alt="No disponible" style=""/>
		</div>
		<div class="col-xs-6 col-md-6" style="width:50%; margin-top: 60px; background: #e0fffb; border-style: groove;  border-radius: 20px;">
		<h3 class="text-center" style="color:black"><b>Inicio de Sesión</b></h3>
		@if(Session::has('mensaje'))
			<p style="color:red" class="text-center">{{ Session::get('mensaje') }}</p>
		@endif

		{!! Form::open(array('url' => 'login', 'method'=>'post')) !!}
			<div class="form-group" style="margin-top: 15%; width: 60%; margin-left:100px">
				<div class="input-group">
					{!! Form::text('username', Input::old('username'), ['class' => 'textfield','class'=>'form-control','id'=>'uLogin','placeholder'=>'Usuario']) !!}
					<label for="uLogin" class="input-group-addon glyphicon glyphicon-user"></label>
				</div>
			</div> <!-- /.form-group -->

			<div class="form-group" style="margin-top: 10%;width: 60%; margin-left:100px">
				<div class="input-group">
					<input type="password" class="form-control" id="uPassword" placeholder="Password" name='password'>
					<label for="uPassword" class="input-group-addon glyphicon glyphicon-lock"></label>
				</div> <!-- /.input-group -->
			</div> <!-- /.form-group -->

			<div class="checkbox" style="margin-left: 100px;">
				<label>
					<input type="checkbox" true name="remember"> Recordar
				</label>
			</div> <!-- /.checkbox -->
		
			{!! Form::submit('Ingresar', ['class' => 'btnIngresar','style'=>'margin-top: 10%; margin-bottom: 5%; width:40%;margin-left:30%', 'class'=>'btn btn-success']) !!}
			{!! Form::close() !!}
			</div>
		</div>
	</section>


</body>
@endsection


