@extends('plantilla.plantilla')
<script type="text/javascript" src="<?php echo URL::asset('js/jquery-3.1.1.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo URL::asset('js/mostrar.js') ?>"></script>

@section('content')

<section style="width: 80%; margin-left: 10%">
	<h3 class="text-center"><b>ACTUALIZACIÓN Y ELIMINACIÓN DE USUARIOS</b></h3>
	@if(Session::has('mensaje'))
	<p style="color:red" class="text-center">{{ Session::get('mensaje') }}</p>
	@endif


	{!! Form::model(Request::all(),['url' => 'formconsultar', 'method'=>'post']) !!}

	<div class="form-group text-center" style="margin-top: 5%">

		<label class="etiquetas">Seleccione un usuario:</label>
		<select name= "usuarioSeleccionado" id= "usuarioSeleccionado" class="form-control text-center" required style="width: 30%; height: 6%; margin-left: 35%" onchange="this.form.submit()">
			<option selected="selected" value=''>--Seleccione un Usuario--</option>
			@foreach($usuarios as $usuario)
			<?php if($usuario->id==$persona->id){?>
				<option value="{{$usuario->id}}" selected>{{$usuario->nombre}} {{$usuario->apellido}}</option>		
			<?php }?>
			<option value="{{$usuario->id}}">{{$usuario->nombre}} {{$usuario->apellido}}</option>
			@endforeach
		</select>

	</div> 
	{!! Form::close() !!}

	{!! Form::model(Request::all(),['url' => 'actualizar-usuario', 'method'=>'post','onsubmit'=> 'return confirm("¿Está seguro de ejecutar la acción seleccionada?")']) !!}

	<div class="row" style="width: 100%; margin-top: 10%; margin-left: 12%">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group" >

						<label class="etiquetas">Nombre:</label>
						<input type="text" name="nombre" id="nombre" required class="form-control" value="{{$persona->nombre}}"></input>

					</div> 

					<div class="form-group" >

						<label class="etiquetas" >Apellido:</label>
						<input type="text" name="apellido" id="apellido" class="form-control"  value="{{$persona->apellido}}"required></input>

					</div> 

					<div class="form-group"  style="margin-top: 12%">

						<label class="etiquetas">Usuario:</label>
						<input type="text" name="usuario" id="usuario" placeholder="Ejemplo: pedro.lopez" pattern="[a-z]{1,}[.]{1}[a-z]{1,}" class="form-control" value="{{$persona->usuario}}"required></input>

					</div> 
				</div>
				<div class="col-md-6">
					<div class="form-group" >

						<label class="etiquetas" >Contraseña:</label>
						<input type="password" name="contrasena" id="contraseña" class="form-control" minlength="8" maxlength="12" value="{{$persona->contrasena}}"required></input>
					</div> 
					<div class="form-group" >

						<label class="etiquetas" >Repetir contraseña:</label>
						<input type="password" name="contrasena2" value="{{$persona->contrasena}}"id="contraseña2" class="form-control" required></input>
						<input name="mostrar" minlength="8" maxlength="12" id="mostrar" type="checkbox" onchange="chek(this)"/>Mostrar contraseña

					</div> 

					<div class="form-group" >
						<label class="etiquetas" >Tipo usuario:</label>
						<select name= "tipo" id="rol" class="form-control" required>
							<option selected="selected" value=''>--Seleccione un tipo de usuario--</option>
							<?php if($persona->rol==1){?>
								<option value="1" selected>Administrador del sistema</option>
								<option value="2">Usuario Estratégico</option>
								<option value="3">Usuario Táctico</option>
							<?php }?>
							<?php if($persona->rol==2){?>
								<option value="1" >Administrador del sistema</option>
								<option value="2" selected>Usuario Estratégico</option>
								<option value="3">Usuario Táctico</option>
							<?php }?>
							<?php if($persona->rol==3){?>
								<option value="1" >Administrador del sistema</option>
								<option value="2">Usuario Estratégico</option>
								<option value="3" selected>Usuario Táctico</option>
							<?php }?>


								
						</select>

					</div> 
					<input type="hidden" name="id" id="id" value="{{$persona->id}}">
				</div>
			</div>
		</div>
	</div>

	{!! Form::submit('Actualizar', ['class' => 'btnIngresar','style'=>'margin-top: 4%; width:20%;margin-left:40%', 'class'=>'btn btn-primary', 'name'=>'Actualizar']) !!}
	{!! Form::submit('Eliminar', ['class' => 'btnIngresar','style'=>'margin-top: 2%; width:20%;margin-left:40%', 'class'=>'btn btn-primary']) !!}
	{!! Form::close() !!}
</section>

</body>
@endsection


