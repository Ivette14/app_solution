<html>
	<head>
		<meta charset="utf-8">
		<title>DevOOPS</title>
		<meta name="description" content="description">
		<meta name="author" content="DevOOPS">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <base href="<?php echo base_url();  ?>">
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
				<a href="index.html">DevOOPS</a>
			</div>
			<div id="top-panel" class="col-xs-12 col-sm-10">
				<div class="row">
					<div class="col-xs-8 col-sm-4">
						<a href="#" class="show-sidebar">
						  <i class="fa fa-bars"></i>
						</a>
						<div id="search">
							<input type="text" placeholder="search"/>
							<i class="fa fa-search"></i>
						</div>
					</div>
					<div class="col-xs-4 col-sm-8 top-panel-right">
						<ul class="nav navbar-nav pull-right panel-menu">
							<li class="hidden-xs">
								<a href="index.html" class="modal-link">
									<i class="fa fa-bell"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="hidden-xs">
								<a class="ajax-link" href="ajax/calendar.html">
									<i class="fa fa-calendar"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="hidden-xs">
								<a href="ajax/page_messages.html" class="ajax-link">
									<i class="fa fa-envelope"></i>
									<span class="badge">7</span>
								</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle account" data-toggle="dropdown">
									<div class="avatar">
										<img src="img/avatar.jpg" class="img-rounded" alt="avatar" />
									</div>
									<i class="fa fa-angle-down pull-right"></i>
									<div class="user-mini pull-right">
										<span class="welcome">Welcome,</span>
										<span>Jane Devoops</span>
									</div>
								</a>
								<ul class="dropdown-menu">
									<li>
										<a href="#">
											<i class="fa fa-user"></i>
											<span class="hidden-sm text">Profile</span>
										</a>
									</li>
									<li>
										<a href="ajax/page_messages.html" class="ajax-link">
											<i class="fa fa-envelope"></i>
											<span class="hidden-sm text">Messages</span>
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
											<span class="hidden-sm text">Tasks</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-cog"></i>
											<span class="hidden-sm text">Settings</span>
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
	</div><div class="row">
	<div id="breadcrumb" class="col-md-12">
		<ol class="breadcrumb">
			<li><a href="index.html">Dashboard</a></li>
			<li><a href="#">Forms</a></li>
			<li><a href="#">Forms elements</a></li>
		</ol>
	</div>
</div>
<div class="well">
	<p class="lead">Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes <a href="http://getbootstrap.com/css/#grid-example-basic">predefined classes</a> for easy layout options, as well as powerful <a href="http://getbootstrap.com/css/#grid-less">mixins for generating more semantic layouts</a>.</p>
	<h3 id="grid-options">Column sizing</h3>
	<p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
	<div class="row show-grid-forms">
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="col-sm-2">
		</div>
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="col-sm-2">
		</div>
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="col-sm-2">
		</div>
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="col-sm-2">
		</div>
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="col-sm-2">
		</div>
		<div class="col-sm-2">
			<input type="text" class="form-control" placeholder="col-sm-2">
		</div>
	</div>
	<div class="row show-grid-forms">
		<div class="col-sm-3">
			<input type="text" class="form-control" placeholder="col-sm-3">
		</div>
		<div class="col-sm-3">
			<input type="text" class="form-control" placeholder="col-sm-3">
		</div>
		<div class="col-sm-3">
			<input type="text" class="form-control" placeholder="col-sm-3">
		</div>
		<div class="col-sm-3">
			<input type="text" class="form-control" placeholder="col-sm-3">
		</div>
	</div>
	<div class="row show-grid-forms">
		<div class="col-sm-4">
			<input type="text" class="form-control" placeholder="col-sm-4">
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" placeholder="col-sm-4">
		</div>
		<div class="col-sm-4">
			<input type="text" class="form-control" placeholder="col-sm-4">
		</div>
	</div>
	<div class="row show-grid-forms">
		<div class="col-sm-6">
			<input type="text" class="form-control" placeholder="col-sm-6">
		</div>
		<div class="col-sm-6">
			<input type="text" class="form-control" placeholder="col-sm-6">
		</div>
	</div>
	<div class="row show-grid-forms">
		<div class="col-sm-12">
			<input type="text" class="form-control" placeholder="col-sm-12">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-bar-chart-o"></i>
					<span>Checkboxes</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Checkboxes in columns</h4>
				<div class="row form-group">
					<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" checked> One
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Two
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Three
								<i class="fa fa-square-o"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Four
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Five
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Six
								<i class="fa fa-square-o"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Seven
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Eight
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Nine
								<i class="fa fa-square-o"></i>
							</label>
						</div>
					</div>
				</div>
				<h4 class="page-header">Checkboxes inline</h4>
				<div class="row form-group">
					<div class="col-sm-12">
						<div class="checkbox-inline">
							<label>
								<input type="checkbox" checked> One
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox-inline">
							<label>
								<input type="checkbox"> Two
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox-inline">
							<label>
								<input type="checkbox"> Three
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox-inline">
							<label>
								<input type="checkbox"> Four
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox-inline">
							<label>
								<input type="checkbox"> Five
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox-inline">
							<label>
								<input type="checkbox"> Six
								<i class="fa fa-square-o"></i>
							</label>
						</div>
						<div class="checkbox-inline">
							<label>
								<input type="checkbox"> Seven
								<i class="fa fa-square-o"></i>
							</label>
						</div>
					</div>
				</div>
				<h4 class="page-header">Small sizes</h4>
				<div class="row form-group">
					<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" checked> One
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Two
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Three
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Four
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Five
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Six
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="checkbox">
							<label>
								<input type="checkbox"> Seven
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Eight
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox"> Nine
								<i class="fa fa-square-o small"></i>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-circle"></i>
					<span>Radios</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Radios in columns</h4>
				<div class="row form-group">
					<div class="col-sm-4">
						<div class="radio">
							<label>
								<input type="radio" name="radio" checked> One
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Two
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Three
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Four
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Five
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Six
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Seven
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Eight
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Nine
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
					</div>
				</div>
				<h4 class="page-header">Radios inline</h4>
				<div class="row form-group">
					<div class="col-sm-12">
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline" checked> One
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline"> Two
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline"> Three
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline"> Four
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline"> Five
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline"> Six
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
						<div class="radio-inline">
							<label>
								<input type="radio" name="radio-inline"> Seven
								<i class="fa fa-circle-o"></i>
							</label>
						</div>
					</div>
				</div>
				<h4 class="page-header">Small sizes</h4>
				<div class="row form-group">
					<div class="col-sm-4">
						<div class="radio">
							<label>
								<input type="radio" name="radio" checked> One
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Two
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Three
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Four
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Five
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Six
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Seven
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Eight
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="radio"> Nine
								<i class="fa fa-circle-o small"></i>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-bar-chart-o"></i>
					<span>Selects</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Basic select</h4>
				<div class="row form-group">
					<div class="col-sm-12">
						<select class="form-control">
							<option>Android</option>
							<option>Sailfish OS</option>
							<option>CyanogenMod</option>
							<option>FirefoxOS</option>
							<option>MeeGo</option>
						</select>
					</div>
				</div>
				<h4 class="page-header">Multiple select</h4>
				<div class="row form-group">
					<div class="col-sm-12">
						<select multiple class="form-control">
							<option>Android</option>
							<option>Sailfish OS</option>
							<option>CyanogenMod</option>
							<option>FirefoxOS</option>
							<option>MeeGo</option>
						</select>
					</div>
				</div>
				<h4 class="page-header">Select2 plugin</h4>
				<div class="row form-group">
					<div class="col-sm-12">
						<select id="el2">
							<option>Android</option>
							<option>Sailfish OS</option>
							<option>CyanogenMod</option>
							<option>FirefoxOS</option>
							<option>MeeGo</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<i class="fa fa-circle"></i>
					<span>Toggles and raiting</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<h4 class="page-header">Toggle checkbox</h4>
				<div class="row form-group">
					<div class="col-sm-2">
						<div class="toggle-switch">
							<label>
								<input type="checkbox">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-danger">
							<label>
								<input type="checkbox">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-warning">
							<label>
								<input type="checkbox" checked>
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-info">
							<label>
								<input type="checkbox">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-success">
							<label>
								<input type="checkbox" checked>
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-primary">
							<label>
								<input type="checkbox">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
				</div>
				<h4 class="page-header">Toggle radio</h4>
				<div class="row form-group">
					<div class="col-sm-2">
						<div class="toggle-switch">
							<label>
								<input type="radio" name="toggle-switch">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-danger">
							<label>
								<input type="radio" name="toggle-switch" checked>
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-warning">
							<label>
								<input type="radio" name="toggle-switch">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-info">
							<label>
								<input type="radio" name="toggle-switch">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-success">
							<label>
								<input type="radio" name="toggle-switch">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="toggle-switch toggle-switch-primary">
							<label>
								<input type="radio" name="toggle-switch">
								<div class="toggle-switch-inner"></div>
								<div class="toggle-switch-switch"><i class="fa fa-check"></i></div>
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
// Run Select2 on element
function Select2Test(){
	$("#el2").select2();
}
$(document).ready(function() {
	// Load script of Select2 and run this
	LoadSelect2Script(Select2Test);
	WinMove();
});
</script>

<!--End Container-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://code.jquery.com/jquery.js"></script>-->
<script src="<?php echo base_url().'seteo/plugins/jquery/jquery-2.1.0.min.js'; ?>"></script>
<script src="<?php echo base_url().'seteo/plugins/jquery-ui/jquery-ui.min.js';?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url().'seteo/plugins/bootstrap/bootstrap.min.js';?>"></script>
<script src="<?php echo base_url().'seteo/plugins/justified-gallery/jquery.justifiedgallery.min.js';?>"></script>
<script src="<?php echo base_url().'seteo/plugins/tinymce/tinymce.min.js';?>"></script>
<script src="<?php echo base_url().'seteo/plugins/tinymce/jquery.tinymce.min.js';?>"></script>
<!-- All functions for this theme + document.ready processing -->
<script src="<?php echo base_url().'seteo/js/devoops.js';?>"></script>
</body>
</html>