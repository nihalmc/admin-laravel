<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.Coperor Creativesteam.org/html/ /light/ by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Fri, 02 Feb 2024 09:12:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
 <!-- Favicons -->
 <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/x-icon">

	<title>Coperor Creatives</title>

	<!-- Main Styles -->
	<link rel="stylesheet" href="{{ asset('admin/styles/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/styles/custom.css') }}">

<!-- Material Design Icon -->
<link rel="stylesheet" href="{{ asset('admin/fonts/material-design/css/materialdesignicons.css') }}">

<!-- mCustomScrollbar -->
<link rel="stylesheet" href="{{ asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css') }}">

<!-- Waves Effect -->
<link rel="stylesheet" href="{{ asset('admin/plugin/waves/waves.min.css') }}">

<!-- Sweet Alert -->
<link rel="stylesheet" href="{{ asset('admin/plugin/sweet-alert/sweetalert.css') }}">

<!-- Percent Circle -->
<link rel="stylesheet" href="{{ asset('admin/plugin/percircle/css/percircle.css') }}">

<!-- Chartist Chart -->
<link rel="stylesheet" href="{{ asset('admin/plugin/chart/chartist/chartist.min.css') }}">

<!-- FullCalendar -->
<link rel="stylesheet" href="{{ asset('admin/plugin/fullcalendar/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugin/fullcalendar/fullcalendar.print.css') }}" media='print'>

<!-- Color Picker -->
<link rel="stylesheet" href="{{ asset('admin/color-switcher/color-switcher.min.css') }}">
	<!-- Data Tables -->
	<link rel="stylesheet" href="{{ asset('admin/plugin/datatables/media/css/dataTables.bootstrap4.min.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/plugin/datatables/extensions/Responsive/css/responsive.bootstrap.min.css') }}">
	

</head>

<body>
<div class="main-menu">
	<header class="header">
		<a href="{{ route('dashboard') }}" class="logo"><img src="{{ asset('images/logo.png') }}" width="81" height="53"></a>
		<button type="button" class="button-close fa fa-times js__menu_close"></button>
	</header>
	<!-- /.header -->
	<div class="content">

		<div class="navigation">
			<ul class="menu js__accordion">
				<li class="{{ Request::routeIs('dashboard') ? 'current' : '' }}">
					<a class="waves-effect" href="{{ route('dashboard') }}">
						<i class="menu-icon mdi mdi-view-dashboard"></i><span>Dashboard</span>
					</a>
				</li>
				<li class="{{ Request::is('salesmans*') ? 'current' : '' }}">
					<a class="waves-effect" href="{{ url('/salesmans') }}">
						<i class="menu-icon mdi mdi-pencil-box"></i><span>Forms</span>
					</a>
				</li>
				<li class="{{ Request::is('sample') ? 'current' : '' }}">
					<a class="waves-effect" href="{{ url('/sample') }}">
						<i class="menu-icon mdi mdi-pencil-box"></i><span>Sample</span>
					</a>
				</li>
				<li class="{{ Request::routeIs('change.password.form') ? 'current' : '' }}">
					<a class="waves-effect" href="{{ url('/change-password') }}">
						<i class="menu-icon mdi mdi-lock-open"></i><span>CHANGE PASSWORD</span>
					</a> 
				</li>
				
				
			</ul>
			<!-- /.menu js__accordion -->
		</div>
		<!-- /.navigation -->
	</div>
	<!-- /.content -->
</div>
<!-- /.main-menu -->
<div class="fixed-navbar">
	<!-- /.float-left -->
	<div class="float-right">
		<div class="ico-item">
			
			<!-- /.searchform -->
		</div>
			<!-- /.searchform -->
			<div class="ico-item fa fa-arrows-alt js__full_screen"></div>
		<div class="ico-item">
			<span class="fa fa-power-off js__drop_down_button"></span>
			<ul class="sub-ico-item">
    <li><a class="js__logout" href="#">Log Out</a></li>
</ul>

			<!-- /.sub-ico-item -->
		</div>
		<!-- /.ico-item -->
	</div>
	<!-- /.float-right -->
</div>
<!-- /.fixed-navbar -->




@yield('content')


		
		
	</div>
	<!-- /.main-content -->
</div>

<script>
    @if (session('success'))
        // Display a success alert
        alert("{{ session('success') }}");
    @endif

    @if (session('error'))
        // Display an error alert
        alert("{{ session('error') }}");
    @endif

    @if($errors->any())
        // Display all validation errors in an alert
        alert("{{ implode('\n', $errors->all()) }}");
    @endif
</script>
<!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="admin/script/html5shiv.min.js"></script>
		<script src="admin/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<script src="{{ asset('admin/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('admin/scripts/modernizr.min.js') }}"></script>
<script src="{{ asset('admin/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('admin/plugin/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('admin/plugin/sweet-alert/sweetalert.min.js') }}"></script>
<script src="{{ asset('admin/plugin/waves/waves.min.js') }}"></script>
<!-- Full Screen Plugin -->
<script src="{{ asset('admin/plugin/fullscreen/jquery.fullscreen-min.js') }}"></script>

<!-- Data Tables -->
<script src="{{ asset('admin/plugin/datatables/media/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugin/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugin/datatables/extensions/Responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugin/datatables/extensions/Responsive/js/responsive.bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/scripts/datatables.demo.min.js') }}"></script>v
<!-- Google Chart -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- chart.js Chart -->
<script src="{{ asset('admin/plugin/chart/chartjs/Chart.bundle.min.js') }}"></script>
<script src="{{ asset('admin/scripts/chart.chartjs.init.min.js') }}"></script>

<!-- FullCalendar -->
<script src="{{ asset('admin/plugin/moment/moment.js') }}"></script>
<script src="{{ asset('admin/plugin/fullcalendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('admin/scripts/fullcalendar.init.js') }}"></script>

<!-- Sparkline Chart -->
<script src="{{ asset('admin/plugin/chart/sparkline/jquery.sparkline.min.js') }}"></script>
<script src="{{ asset('admin/scripts/chart.sparkline.init.min.js') }}"></script>

<script src="{{ asset('admin/scripts/main.min.js') }}"></script>
<script src="{{ asset('admin/scripts/mycommon.js') }}"></script>
<script src="{{ asset('admin/color-switcher/color-switcher.min.js') }}"></script>
<!-- Validator -->
<script src="{{ asset('admin/plugin/validator/validator.min.js') }}"></script>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

<!-- Mirrored from demo.Coperor Creativesteam.org/html/ /light/ by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Fri, 02 Feb 2024 09:13:51 GMT -->
</html>