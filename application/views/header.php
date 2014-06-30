<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>App_Solution</title>
		<meta name="description" content="description">
		<meta name="author" content="App_Solution">
		<meta name="viewport" content="width=device-width, initial-scale=1">
			 <base href="<?php echo base_url();  ?>">

			 <link href="<?php echo base_url().'seteo/js/devoops.js'; ?>" type="javascript" >
			 <link href="<?php echo base_url().'seteo/js/devoops.min.js'; ?>" type="javascript">
		<link href="<?php echo base_url().'seteo/plugins/bootstrap/bootstrap.css'; ?>" rel="stylesheet">
		<link href="<?php echo base_url().'seteo/plugins/jquery-ui/jquery-ui.min.css'; ?>" rel="stylesheet">
		<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		<link href="<?php echo base_url().'seteo/plugins/fancybox/jquery.fancybox.css'; ?>" rel="stylesheet">
		<link href="<?php echo base_url().'seteo/plugins/fullcalendar/fullcalendar.css'; ?>" rel="stylesheet">
		<link href="<?php echo base_url().'seteo/plugins/xcharts/xcharts.min.css'; ?>" rel="stylesheet">
		<link href="<?php echo base_url().'seteo/plugins/select2/select2.css'; ?>" rel="stylesheet">
		<link href="<?php echo base_url().'seteo/css/style.css' ; ?>" rel="stylesheet">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
				<script src="http://getbootstrap.com/docs-assets/js/html5shiv.js"></script>
				<script src="http://getbootstrap.com/docs-assets/js/respond.min.js"></script>
		<![endif]-->


		
	
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="http://www.google.com/jsapi"></script>
		<script type="text/javascript">
		google.load("jquery", "1.4.4");
		</script>
		<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>


	</head>
<body>
<!--Start Header-->
<div id="screensaver">
	<canvas id="canvas"></canvas>
	<i class="fa fa-lock" id="screen_unlock"></i>
</div>
<div id="modalbox">
	<div class="devoops-modal">
		<div class="devoops-modal-header">
			<div class="modal-header-name">
				<span>Basic table</span>
			</div>
			<div class="box-icons">
				<a class="close-link">
					<i class="fa fa-times"></i>
				</a>
			</div>
		</div>
		<div class="devoops-modal-inner">
		</div>
		<div class="devoops-modal-bottom">
		</div>
	</div>
</div>
<header class="navbar">
	<div class="container-fluid expanded-panel">
		<div class="row">
			<div id="logo" class="col-xs-12 col-sm-2">
				<a href="">App_Solution</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
						<div id="search">
							
						
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="seteo/img/images.jpg" class="img-rounded" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Bienvenido,</span>
										<span>MarioAbmi</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span class="hidden-sm text">Perfil</span>
										</a>
									</li>
									<li>
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span class="hidden-sm text">Mensajes</span>
										</a>
									</li>
									<li>
										<a href="ajax/gallery_simple.html" class="ajax-link">
											<i class="fa fa-picture-o"></i>
											<span class="hidden-sm text">Albums</span>
										</a>
									</li>
									<li>
										<a href="ajax/calendar.html" class="ajax-link">
											<i class="fa fa-tasks"></i>
											<span class="hidden-sm text">Tareas</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span class="hidden-sm text">Configuraciones</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-power-off"></i>
											<span class="hidden-sm text">Logout</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>
<!--End Header-->
<!--Start Container-->
<div id="main" class="container-fluid">
	<div class="row">
		<div id="sidebar-left" class="col-xs-2 col-sm-2">
			<ul class="nav main-menu">
				<li>
					<a href="ajax/dashboard.html" class="active ajax-link">
						<i class="fa fa-dashboard"></i>
						<span class="hidden-xs">Inicio</span>
					</a>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						<span class="hidden-xs">Casos</span>
					</a>
					<ul class="dropdown-menu">
					
						<li><a  href="<?php echo base_url().'crud_caso'; ?>">Nuevo Caso</a></li>
						<li><a href="<?php echo base_url().'crud_caso/responsable'; ?>">Casos Sin Responsable</a></li>
						<li><a href="<?php echo base_url().'crud_caso/casos_con_responsable'; ?>">Casos en Proceso</a></li>
						<li><a href="<?php echo base_url().'crud_caso/cerrar_casos'; ?>">Cerrar Casos</a></li>
						<li><a href="<?php echo base_url().'crud_historial'; ?>">Historial</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Categorizar</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="" href="crud_categoria">Categorias</a></li>
						<li><a class="" href="crud_subcategoria">Subcategorias</a></li>

					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-bar-chart-o"></i>
						 <span class="hidden-xs">Graficos De Casos</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="" href="charts">Historial e Casos</a></li>
						
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-desktop"></i>
						 <span class="hidden-xs">Usuarios</span>
					</a>
					<ul class="dropdown-menu">
						<li><a class="ajax-link" href="ajax/ui_grid.html">Register</a></li>
						<li><a class="ajax-link" href="ajax/ui_buttons.html">Usuarios</a></li>
					</ul>
				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle">
						<i class="fa fa-list"></i>
						 <span class="hidden-xs">Setting</span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="ajax/page_login.html">No se que van a poner aqui</a></li>
					
					</ul>
				</li>
			
			</ul>
		</div>