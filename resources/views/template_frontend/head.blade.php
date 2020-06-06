<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="laravel blog seo">
	<meta property="og:title" content="European Travel Destinations">
	<meta property="og:description" content="Offering tour packages for individuals or groups.">
	<meta property="og:image" content="http://euro-travel-example.com/thumbnail.jpg">
	<meta property="og:url" content="http://euro-travel-example.com/index.htm">
	<meta name="twitter:title" content="European Travel Destinations ">
	<meta name="twitter:description" content=" Offering tour packages for individuals or groups.">
	<meta name="twitter:image" content=" http://euro-travel-example.com/thumbnail.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Laravel &nbsp; &mdash; &nbsp; CRUD</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="https://www.facebook.com/profile.php?id=100007787444809"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://api.whatsapp.com/send?phone=6281246835129"><i class="fa fa-whatsapp"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCSU_al9Rti8l4AQtgb4dZlg?view_as=subscriber"><i class="fa fa-youtube"></i></a></li>
						<li><a href="https://www.instagram.com/adhiariyadi_/"><i class="fa fa-instagram"></i></a></li>
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="index.html" class="logo"><img src="{{ asset('img/logo.png') }}" alt=""></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<button class="search-btn"><i class="fa fa-search"></i></button>
						<div id="nav-search">
							<form action="{{ route('blog.cari') }}" method="GET">
								<input class="input" name="cari" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="{{ url('/') }}">Beranda</a></li>
						<li class="has-dropdown">
							<a href="#">Category</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										@foreach ($category_widget as $hasil)
										  <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }}</a></li>
										@endforeach
									</ul>
								</div>
							</div>
						</li>
						<li><a href="{{ route('blog.list') }}">List Post</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="{{ url('/') }}">Beranda</a></li>
					<li class="has-dropdown"><a>Category</a>
						<ul class="dropdown">
							@foreach ($category_widget as $hasil)
							  <li><a href="{{ route('blog.category', $hasil->slug) }}">{{ $hasil->name }}</a></li>
							@endforeach
						</ul>
					</li>
					<li><a href="{{ route('blog.list') }}">List Post</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->
