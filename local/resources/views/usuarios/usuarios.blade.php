@extends('plantilla.plantilla')
<link rel="stylesheet" href="<?php echo URL::asset('css/ingreso.css') ?>" type="text/css"/>
<link rel="stylesheet" href="<?php echo URL::asset('css/consultas.css') ?>" type="text/css"/>
<script type="text/javascript" src="<?php echo URL::asset('js/jquery-3.1.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo URL::asset('js/mostrar.js') ?>"></script>
<script type="text/javascript" src="<?php echo URL::asset('js/consultarUsuario.js') ?>"></script>

@section('content')

<section style="width: 40%; margin-left: 30%">
		<h3 class="text-center"><b>REGISTRO DE USUARIOS</b></h3>
		@if(Session::has('mensaje'))
			<p style="color:red" class="text-center">{{ Session::get('mensaje') }}</p>
		@endif

		{!! Form::model(Request::all(),['url' => 'registrar-usuario', 'method'=>'post','onsubmit'=> 'return confirm("¿Está seguro de registrar un usuario con los datos ingresados?")']) !!}
			<div class="form-group" style="margin-top: 15%">
			
				<label class="etiquetas">Nombre:</label>
				<input type="text" name="nombre" required class="form-control"></input>
				
			</div> 

			<div class="form-group" >
			
				<label class="etiquetas" >Apellido:</label>
				<input type="text" name="apellido" class="form-control"  required></input>
				
			</div> 

			<div class="form-group" >
			
				<label class="etiquetas">Usuario:</label>
				<input type="text" name="usuario" placeholder="Ejemplo: pedro.lopez" pattern="[a-z]{1,}[.]{1}[a-z]{1,}" class="form-control" required></input>
				
			</div> 

			<div class="form-group" >
			
				<label class="etiquetas" >Contraseña:</label>
				<input type="password" name="contrasena" id="contraseña" class="form-control" minlength="8" maxlength="12" required></input>
				
			</div> 
			<div class="form-group" >
			
				<label class="etiquetas" >Repetir contraseña:</label>
				<input type="password" name="contrasena2" id="contraseña2" class="form-control" required></input>
				<input name="mostrar" minlength="8" maxlength="12" id="mostrar" type="checkbox" onchange="chek(this)"/>Mostrar contraseña
				
			</div> 

			<div class="form-group" >
			
				<label class="etiquetas" >Tipo usuario:</label>
				<select name= "tipo" id= "unidadSeleccionada" class="form-control" required>
					<option selected="selected" value=''>--Seleccione un tipo de usuario--</option>
					<option value="1">Administrador del sistema</option>
					<option value="2">Usuario Estratégico</option>
					<option value="3">Usuario Táctico</option>
				</select>
				
			</div> 
		
			

			{!! Form::submit('Guardar', ['class' => 'btnIngresar','style'=>'margin-top: 6%; width:40%;margin-left:30%', 'class'=>'btn btn-primary']) !!}
		{!! Form::close() !!}
	</section>

</body>
@endsection


