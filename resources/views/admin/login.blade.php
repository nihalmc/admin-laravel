<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.Coperor Creativesteam.org/html/Coperor Creatives/light/page-login.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Fri, 02 Feb 2024 09:16:20 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Coperor Creatives</title>
	<link rel="stylesheet" href="{{ asset('admin/styles/style.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/styles/custom.css') }}">

<!-- Waves Effect -->
<link rel="stylesheet" href="{{ asset('admin/plugin/waves/waves.min.css') }}">


</head>

<body>

<div id="single-wrapper">
	<form id="login-form" method="post" action="{{ route('admin.login') }}" class="frm-single" >
    @csrf
		<div class="inside">
			<div class="title"><strong>Coperor Creatives</strong>Admin</div>
			<!-- /.title -->
			<div class="frm-title">Login</div>
			<!-- /.frm-title -->
			<div class="frm-input"><input type="text" placeholder="Username" class="frm-inp" id="username" name="username"><i class="fa fa-user frm-ico"></i></div>
			<!-- /.frm-input -->
			<div class="frm-input"><input type="password" placeholder="Password" class="frm-inp" id="password" name="password" ><i class="fa fa-lock frm-ico"></i></div>
			<!-- /.frm-input -->
			<!-- /.clearfix -->
			<button type="submit" class="frm-submit">Login<i class="fa fa-arrow-circle-right"></i></button>
			<div class="row small-spacing">
				<div class="col-md-12">

				</div>
				
			</div>
			<div class="frm-footer">Coperor CreativesAdmin © 2024.</div>
			<!-- /.footer -->
		</div>
        <p class="text-muted" id="login-error"></p>
		<!-- .inside -->
	</form>
	<!-- /.frm-single -->
</div><!--/#single-wrapper -->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="admin/script/html5shiv.min.js"></script>
		<script src="admin/script/respond.min.js"></script>
	<![endif]-->
	<!-- 
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ asset('admin/scripts/jquery.min.js') }}"></script>
<script src="{{ asset('admin/scripts/modernizr.min.js') }}"></script>
<script src="{{ asset('admin/plugin/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/plugin/nprogress/nprogress.js') }}"></script>
<script src="{{ asset('admin/plugin/waves/waves.min.js') }}"></script>

<script src="{{ asset('admin/scripts/main.min.js') }}"></script>
<script src="{{ asset('admin/scripts/mycommon.js') }}"></script>
<script src="{{ asset('admin/js/custom-js.js') }}"></script>
</body>

<!-- Mirrored from demo.Coperor Creativesteam.org/html/Coperor Creatives/light/page-login.html by HTTraQt Website Copier/1.x [Karbofos 2012-2017] Fri, 02 Feb 2024 09:16:20 GMT -->
</html>