<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="icon" href="<?php echo URL::asset('img/Odontologia.png') ?>" type="image/x-icon" />
	<link rel="shortcut icon" href="<?php echo URL::asset('img/Odontologia.png') ?>" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('css/bootstrap.min.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo URL::asset('calendar/css/bootstrap-datepicker.css') ?>" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimun-scale=1" />	
	<script type="text/javascript" src="<?php echo URL::asset('js/jquery.js') ?>"></script> 
	<script type="text/javascript" src="<?php echo URL::asset('js/bootstrap.min.js') ?>"></script> 
	<script type="text/javascript" src="<?php echo URL::asset('calendar/js/bootstrap-datepicker.js') ?>"></script>  
	<script>
		$( function() {
			$(".datepicker").datepicker({
				format: 'dd/mm/yyyy',
			});
		} );
	</script>
</head>
<body>
	<div class="container" >
		<header id="titulo">
			<div class="container-fluid" style="background: white;">
				<div class="col-xs-12 col-md-12">
					@if (Auth::check())
					<p style="color: black; font-size: 1em" class="text-right">{{{Auth::user()->nombre }}} {{{Auth::user()->apellido }}}&nbsp&nbsp <a href="{{url('logout')}}">(Cerrar Sesión)</a></p>
					@endif
				</div>
			</div>
			
			<div class="container-fluid" style="margin-bottom: 2%;">
				<div class="col-xs-12 col-md-2" style="background: white;">
					<img class="img-responsive center-block" src="<?php echo URL::asset('img/prueba.png') ?>" alt="No disponible"  class="img-responsive"/>
				</div>
				<div class="col-xs-12 col-md-10" style="background: #e0fffb; margin-top:0.5%; border-style: groove;">
					<h1 class="text-center" style="font-size: 2em" class="d-inline-block bg-warning">
						<b>Sistema Informatico para la Gestion de Ventas del Departamento de Despacho para la empresa ALINTER</b>
					</h1>
				</div>
			</div>
			
			@if (Auth::check()) 
			<nav class="navbar navbar-default" style="background: #E6E6E6;">
				<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="{{url('bienvenida')}}">Inicio</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							
							<?php if(Auth::user()->rol==2){ ?>  
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										Operaciones Estratégicas<b class="caret"></b>
									</a>
									<ul class="dropdown-menu">
										

										<li><a href="">Salida Estrategica</a></li>

									</ul>
								</li>
								<?php } ?>
								<?php if(Auth::user()->rol==2 ||Auth::user()->rol==3){ ?> 
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown">
											Operaciones Tácticas<b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											

											<li><a href="">Salida Tactica</a></li>

			

											<?php if(Auth::user()->rol==2){ ?>
											</ul>
										</li>
										<?php } ?>
										<?php } ?>
										<?php if(Auth::user()->rol==1){ ?>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
													Gestión de Usuarios<b class="caret"></b>
												</a>
												<ul class="dropdown-menu">
													

													<li><a href="{{url('usuarios')}}">Registrar usuarios</a></li>
													<li><a href="{{url('actualizar-usuarios')}}">Actualizar y eliminar usuarios</a></li>
													
												</ul>
												
											</li>
											<li>
											<a href="{{url('backup')}}"  >
													Generar Backup
												</a>
												
												</li>
											<?php } ?>
											

										</ul>
									</div><!-- /.navbar-collapse -->
								</div><!-- /.container-fluid -->
							</nav>	
							@endif
						</header>

						<div class="container-fluid"  style="background: white; border-style: groove;">
							@yield('content')
							<br>
							<br>
							<br>
							<br>
							<br>
							<br>
						</div>

						<footer style="margin-top: 0%;">
							<div class="container-fluid" style="background: #E6E6E6" >
								<div class="col-xs-12 col-md-12" style="height: 80px;">
									<p class="text-center" style="margin-top: 3%"><b>Copyright © 2017, Universidad de El Salvador</b></p>
								</div>
							</div>
						</footer>
					</div>
				</body>
				</html>