<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie ie9" lang="en" class="no-js"> <![endif]-->
<!--[if !(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
	<title>Dashboard | KingAdmin - Admin Dashboard</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="description" content="KingAdmin - Bootstrap Admin Dashboard Theme">
	<meta name="author" content="The Develovers">
	<!-- CSS -->
        {!!Html::style('assets/css/bootstrap.min.css')!!}
        {!!Html::style('assets/css/font-awesome.min.css')!!}
        {!!Html::style('assets/css/main.css')!!}
        {!!Html::style('assets/css/skins/teal.css')!!}
	<!--[if lte IE 9]>
		<link href="assets/css/main-ie.css" rel="stylesheet" type="text/css"/>
		<link href="assets/css/main-ie-part2.css" rel="stylesheet" type="text/css"/>
	<![endif]-->
	<!-- CSS for demo style switcher. you can remove this -->
	<link href="demo-style-switcher/assets/css/style-switcher.css" rel="stylesheet" type="text/css">
	<!-- Fav and touch icons -->
        {!!Html::style('assets/ico/kingadmin-favicon144x144.png', array('sizes'=>'144x144','rel'=>'apple-touch-icon-precomposed'))!!}
        {!!Html::style('assets/ico/kingadmin-favicon114x114.png', array('sizes'=>'114x114','rel'=>'apple-touch-icon-precomposed'))!!}
	{!!Html::style('assets/ico/kingadmin-favicon72x72.png', array('sizes'=>'72x72','rel'=>'apple-touch-icon-precomposed'))!!}
        {!!Html::style('assets/ico/kingadmin-favicon57x57.png', array('sizes'=>'57x57','rel'=>'apple-touch-icon-precomposed'))!!}
	{!!Html::style('assets/ico/favicon.png', array('rel'=>'shortcut icon'))!!}
	
</head>

<body class="sidebar-fixed topnav-fixed dashboard">
	<!-- WRAPPER -->
	<div id="wrapper" class="wrapper">
		<!-- TOP BAR -->
		<div class="top-bar navbar-fixed-top">
			<div class="container">
				<div class="clearfix">
					<a href="#" class="pull-left toggle-sidebar-collapse"><i class="fa fa-bars"></i></a>
					<!-- logo -->
					<div class="pull-left left logo">
                                            <a href="index.html">{!!Html::image('assets/img/kingadmin-logo-white.png','Creditos financieros')!!}</a>
						<h1 class="sr-only">KingAdmin Admin Dashboard</h1>
					</div>
					<!-- end logo -->
					<div class="pull-right right">
						<!-- top-bar-right -->
						<div class="top-bar-right">
							<div class="notifications">
								<ul><!-- notification: general -->
									<li class="notification-item general">
										<div class="btn-group">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown">
												<i class="fa fa-bell"></i><span class="count">8</span>
												<span class="circle"></span>
											</a>
											<ul class="dropdown-menu" role="menu">
												<li class="notification-header">
													<em>You have 8 notifications</em>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-warning red-font"></i>
														<span class="text red-font">Low disk space!</span>
														<span class="timestamp">Oct 11</span>
													</a>
												</li>
												<li class="notification-footer">
													<a href="#">View All Notifications</a>
												</li>
											</ul>
										</div>
									</li>
									<!-- end notification: general -->
								</ul>
							</div>
							<!-- logged user and the menu -->
							<div class="logged-user">
								<div class="btn-group">
									<a href="#" class=" dropdown-toggle" data-toggle="dropdown">
                                                                            {!!Html::image('assets/img/user-avatar.png','User Avatar')!!}
                                                                            <span class="name text-white">{{ Auth::user()->name." ".Auth::user()->app }}</span> <span class="caret text-white"></span>
									</a>
									<ul class="dropdown-menu" role="menu">
										<li>
											<a href="#">
												<i class="fa fa-user"></i>
												<span class="text">{{ Auth::user()->name }}</span>
											</a>
										</li>
                                                                                <li>
                                                                                    <a href="{{ route('logout') }}"
                                                                                        onclick="event.preventDefault();
                                                                                                 document.getElementById('logout-form').submit();">
                                                                                        <i class="fa fa-power-off"></i>
                                                                                        <span class="text">Logout</span>
                                                                                    </a>

                                                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                                        {{ csrf_field() }}
                                                                                    </form>
                                                                                </li>
									</ul>
								</div>
							</div>
							<!-- end logged user and the menu -->
						</div>
						<!-- end top-bar-right -->
					</div>
				</div>
			</div>
			<!-- /container -->
		</div>
		<!-- END TOP BAR -->
		<!-- LEFT SIDEBAR -->
		<div id="left-sidebar" class="left-sidebar wallpaper-background2">
			
			<div class="sidebar-scroll">
                            <!-- main-nav -->
                                @include('template.menu')
                            <!-- /main-nav -->
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN CONTENT WRAPPER -->
		<div id="main-content-wrapper" class="content-wrapper ">
			<div class="row">
				<div class="col-md-4 ">
					<ul class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="#">Inicio</a></li>
						<li class="active">Estadisticas</li>
					</ul>
				</div>
				<div class="col-md-8 hidden-xs ">
					<div class="top-content">
						<ul class="list-inline mini-stat">
							<li>
								<h5>SUBSCRIBERS <span class="stat-value stat-color-orange"><i class="fa fa-plus-circle"></i> 150,743</span></h5>
								
							</li>
							<li>
								<h5>CUSTOMERS <span class="stat-value stat-color-seagreen"><i class="fa fa-plus-circle"></i> 43,748</span></h5>
								
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- main -->
			<div class="content">
				<div class="main-content">
					<!-- WIDGET MAIN CHART WITH TABBED CONTENT -->
					<div class="widget widget-table">
                                            <!--Div contenedor-->
						@yield('content')
                                                
                                        </div>
                                            
                                </div>
			</div>
			<!-- /main -->
			<!-- FOOTER -->
			<footer class="footer">
                            <strong class="text-white">&copy; 2018 by JDMR</strong>
			</footer>
			<!-- END FOOTER -->
		</div>
		<!-- END CONTENT WRAPPER -->
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
        {!!Html::script('assets/js/jquery/jquery-2.1.0.min.js')!!}
        {!!Html::script('assets/js/bootstrap/bootstrap.js')!!}
        {!!Html::script('assets/js/plugins/modernizr/modernizr.js')!!}
        {!!Html::script('assets/js/plugins/bootstrap-tour/bootstrap-tour.custom.js')!!}
        {!!Html::script('assets/js/plugins/jquery-slimscroll/jquery.slimscroll.min.js')!!}
	{!!Html::script('assets/js/king-common.js')!!}
<!--	{!!Html::script('demo-style-switcher/assets/js/deliswitch.js')!!}
	{!!Html::script('assets/js/plugins/stat/jquery.easypiechart.min.js')!!}
	{!!Html::script('assets/js/plugins/raphael/raphael-2.1.0.min.js')!!}-->
<!--	{!!Html::script('assets/js/plugins/stat/flot/jquery.flot.min.js')!!}
	{!!Html::script('assets/js/plugins/stat/flot/jquery.flot.resize.min.js')!!}-->
        
        
<!--        {!!Html::script('assets/js/plugins/stat/flot/jquery.flot.time.min.js')!!}
        {!!Html::script('assets/js/plugins/stat/flot/jquery.flot.pie.min.js')!!}
        {!!Html::script('assets/js/plugins/stat/flot/jquery.flot.tooltip.min.js')!!}
        {!!Html::script('assets/js/plugins/jquery-sparkline/jquery.sparkline.min.js')!!}
     -->   {!!Html::script('assets/js/plugins/datatable/jquery.dataTables.min.js')!!}
        {!!Html::script('assets/js/plugins/datatable/dataTables.bootstrap.js')!!}<!--
        {!!Html::script('assets/js/plugins/jquery-mapael/jquery.mapael.js')!!}
        {!!Html::script('assets/js/plugins/raphael/maps/usa_states.js')!!}
        {!!Html::script('assets/js/king-chart-stat.js')!!}
-->        {!!Html::script('assets/js/king-table.js')!!}<!--
        {!!Html::script('assets/js/king-components.js')!!}-->
        @if(!empty($scripts))
            @foreach($scripts as $js)
                <script src="{{url($js)}}"></script>
            @endforeach
        @endif
</body>

</html>