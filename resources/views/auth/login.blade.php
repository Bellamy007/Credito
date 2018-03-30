<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- Mirrored from demo.thedevelovers.com/dashboard/kingadmin-v1.6.2/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Sep 2017 20:13:52 GMT -->
<head>
	<title>Login | KingAdmin - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="KingAdmin Dashboard">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
	{!!Html::style('assets/css/bootstrap.min.css')!!}
        {!!Html::style('assets/css/font-awesome.min.css')!!}
        {!!Html::style('assets/css/main.css')!!}
        {!!Html::style('assets/css/skins/transparent.css')!!}
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- Fav and touch icons -->
</head>
<body class="wallpaper-background">
	<div class="wrapper full-page-wrapper page-auth page-login text-center">
		<div class="inner-page">
			<div class="logo">
                            <h3><strong class=" bg-info"><em>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C F P M&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</em></strong></h3>
			</div>
			<button type="button" class="btn btn-auth-facebook"><span>Iniciar sesión con Facebook</span></button>
			<div class="separator"><span>O</span></div>
			<div class="login-box center-block">
                                {!!Form::open(['route'=>'login','method'=>'POST','id'=>'frmdoLogin','class'=>'form-horizontal','role'=>'form'])!!}
					<p class="title">Ingrese sus datos</p>
                                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                            <label for="username" class="control-label sr-only">Nombre de usuario</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <input type="text" placeholder="username" id="username" name="username" class="form-control">
                                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                                </div>
                                            </div>
                                            @if ($errors->has('username'))
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('username') }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
                                        </div>   
					<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="control-label sr-only">Contrase&ntilde;a</label>
                                            <div class="col-sm-12">
                                                <div class="input-group">
                                                    <input type="password" placeholder="password" id="password" name="password"class="form-control">
                                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                </div>
                                            </div>
                                            @if ($errors->has('password'))
                                                <div class="col-sm-12">
                                                    <div class="input-group">
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    </div>
                                                </div>
                                            @endif
					</div>
					<label class="fancy-checkbox">
						<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
						<span>Rocarme la próxima vez</span>
					</label>
					<button class="btn btn-custom-primary btn-lg btn-block btn-auth"><i class="fa fa-arrow-circle-o-right"></i> Login</button>
                                {!!Form::close()!!}
				<div class="links">
                                    <p><a href="{{ route('password.request') }}">¿Olvido su contrase&ntilde;a?</a></p>
					<p><a href="#">Crear nueva cuenta</a></p>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer">&copy; 2014-2015 The Develovers</footer>
	<!-- Javascript -->
	{!!Html::script('assets/js/jquery/jquery-2.1.0.min.js')!!}
        {!!Html::script('assets/js/bootstrap/bootstrap.js')!!}
        {!!Html::script('assets/js/plugins/modernizr/modernizr.js')!!}
</body>
</html>
