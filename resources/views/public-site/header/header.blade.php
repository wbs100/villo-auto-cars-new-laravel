<!-- Loader 
<div id="page-preloader"><span class="spinner"></span></div>
- Loader end -->

<div id="this-top" class="layout-theme animated-css" data-header="sticky" data-header-top="200">
	<!-- Start Switcher 
	<div class="switcher-wrapper">
		<div class="demo_changer">
			<div class="demo-icon customBgColor">
				<i class="fa fa-cog fa-spin fa-2x"></i>
			</div>
			<div class="form_holder">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="predefined_styles">
							<div class="skin-theme-switcher">
								<h4>Color</h4>
								<a href="javascript:void(0);" data-switchcolor="color1" class="styleswitch" style="background-color: #fe5656"></a>
								<a href="javascript:void(0);" data-switchcolor="color2" class="styleswitch" style="background-color: #4fb0fd"></a>
								<a href="javascript:void(0);" data-switchcolor="color3" class="styleswitch" style="background-color: #ffc73c"></a>
								<a href="javascript:void(0);" data-switchcolor="color4" class="styleswitch" style="background-color: #ff8300"></a>
								<a href="javascript:void(0);" data-switchcolor="color5" class="styleswitch" style="background-color: #d32f2f"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{ asset('NewAssts/plugins/switcher/js/bootstrap-select.js') }}"></script>
		<script src="{{ asset('NewAssts/plugins/switcher/js/evol.colorpicker.min.js') }}"></script>
		<script src="{{ asset('NewAssts/plugins/switcher/js/dmss.js') }}"></script>
	</div>
	 End Switcher -->

	<div id="wrapper">
		<!-- HEADER -->
		<div class="header">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="header-contacts">
						<span class="header-contacts__item"><i class="icon fa fa-phone"></i> 076 905 7272</span>
						<a class="header-contacts__item" href="mailto:villoauto@gmail.com"><i class="icon fa fa-envelope"></i> villoauto@gmail.com</a>
					</div>
					<ul class="social-links list-inline">
						<li><a href="javascript:void(0);"><i class="bi bi-facebook"></i></a></li>
						<li><a href="javascript:void(0);"><i class="bi bi-instagram"></i></a></li>
						<li><a href="javascript:void(0);"><i class="bi bi-whatsapp"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="header__inner">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-xs-12">
					<a href="{{ route('home') }}" class="logo d-none d-lg-block">
						<img class="logo__img img-responsive" src="{{ asset('NewAssts/img/logo-white.png') }}" style="height: 100px; object-fit: contain;" alt="Logo" />
					</a>
					<div class="navbar yamm">
						<div class="navbar-header hidden-md hidden-lg hidden-sm">
							<button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
								<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
							</button>
							<a href="javascript:void(0);" class="navbar-brand"></a>
						</div>
						<div id="navbar-collapse-1" class="navbar-collapse collapse">
							<ul class="nav navbar-nav">
								<li><a href="{{ route('home') }}">HOME</a></li>
								<li><a href="{{ route('vehicle-listings') }}">VEHICLE LISTINGS</a></li>
								<li><a href="{{ route('services') }}">SERVICES</a></li>
								<li><a href="{{ route('about') }}">ABOUT US</a></li>
								<li><a href="{{ route('gallery') }}">GALLERY</a></li>
								<li><a href="{{ route('contact') }}">CONTACT US</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div> <!-- .header end -->
