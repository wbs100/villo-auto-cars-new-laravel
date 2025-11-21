<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
	<title>Villo Auto Cars</title>
	<link href="{{ asset('NewAssts/img/favicon.png') }}" type="image/x-icon" rel="shortcut icon" />
	<link href="{{ asset('NewAssts/css/master.css') }}" rel="stylesheet" />
	<link href="{{ asset('NewAssts/css/index.css') }}" rel="stylesheet" />
	<link href="{{ asset('NewAssts/plugins/iview/css/iview.css') }}" rel="stylesheet" />
	<link href="{{ asset('NewAssts/plugins/iview/css/skin/style.css') }}" rel="stylesheet" />

	<style>
		.row * { padding-left: 3px; padding-right: 3px; padding-top: 3px; }
		#sliderpro1 { display: block; }
		#sliderpro2 { display: none; }
		@media (max-width: 768px) {
			#sliderpro1 { display: none; }
			#sliderpro2 { display: block; }
		}
		.max-lg-larger { scale: 2; }
		.w-100 { width: 100% !important; }
		.h-100 { height: 100% !important; }
		.d-flex { display: flex; }
		.align-items-center { align-items: center; }
		.justify-content-end { justify-content: end; }
	</style>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
	<link rel="stylesheet" href="{{ asset('NewAssts/css/custom.css') }}">
	<!-- SWITCHER -->
	<link href="{{ asset('NewAssts/plugins/switcher/css/switcher.css') }}" rel="stylesheet" id="switcher-css" media="all" />
	<link href="{{ asset('NewAssts/plugins/switcher/css/color1.css') }}" rel="alternate stylesheet" title="color1" media="all" />
	<link href="{{ asset('NewAssts/plugins/switcher/css/color2.css') }}" rel="alternate stylesheet" title="color2" media="all" />
	<link href="{{ asset('NewAssts/plugins/switcher/css/color3.css') }}" rel="alternate stylesheet" title="color3" media="all" />
	<link href="{{ asset('NewAssts/plugins/switcher/css/color4.css') }}" rel="alternate stylesheet" title="color4" media="all" />
	<link href="{{ asset('NewAssts/plugins/switcher/css/color5.css') }}" rel="alternate stylesheet" title="color5" media="all" />

	<!-- jQuery (loaded in head for legacy scripts that expect it early) -->
	<script src="{{ asset('NewAssts/plugins/jquery/jquery-1.11.1.min.js') }}"></script>

	@stack('head')
</head>
