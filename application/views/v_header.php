<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="<?php echo base_url() ?>assett/img/favicon.png" type="image/png">
	<title>Noesantara Travel</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/vendors/linericon/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/vendors/lightbox/simpleLightbox.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/vendors/animate-css/animate.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/vendors/jquery-ui/jquery-ui.css">
	<!-- main css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/css/style.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assett/css/responsive.css">
</head>

<body>

	<!--================Header Menu Area =================-->
	<header class="header_area">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="<?php echo base_url() ?>assett/img/logo2.png" alt="">
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav justify-content-center mx-auto">
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>">Home</a>
							</li>
							<!-- <li class="nav-item submenu dropdown active">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="nav-item">
										<a class="nav-link" href="elements.html">Culture</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="single-blog.html">Post Details</a>
									</li>
								</ul>
							</li> -->
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>Destinations">Destinations</a>
							</li>					
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>Cultures">Cultures</a>
							</li>					
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>ArtCrafts">Arts and Crafts</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>FloraFauna">Flora and Fauna</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>Adventures">Adventures</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>Culinaries">Culinaries</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>News">News</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="<?php echo site_url() ?>About">About</a>
							</li>
						</ul>
						<ul class="nav navbar-nav ml-auto search">
								<li class="nav-item d-flex align-items-center mr-10">
									<div class="menu-form">
										<form>
											<div class="form-group">
												<input type="text" class="form-control" placeholder="Search here">
											</div>
										</form>
									</div>
									<button type="submit" class="search-icon">
										<i class="lnr lnr-magnifier"></i>
									</button>
								</li>
							</ul>
					</div>
				</div>
			</nav>
		</div>
	</header>
	<!--================ Header Menu Area =================-->

	<!--================ Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="owl-carousel owl-theme" id="home-owl">
			<div class="slide-item owl-lazy" data-src="<?php echo base_url() ?>assett/img/banner/home-banner.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
								<div class="blog_text">
									<img class="img-fluid" src="<?php echo base_url() ?>assett/img/banner/banner-img.png" alt="">
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> March 14, 2018
											<span class="icon fa fa-comments"></span> 05
										</div>
										<div>
											<a class="read_more" href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slide-item owl-lazy" data-src="<?php echo base_url() ?>assett/img/banner/home-banner2.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
								<div class="blog_text">
									<img class="img-fluid" src="<?php echo base_url() ?>assett/img/banner/banner-img2.png" alt="">
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> March 14, 2018
											<span class="icon fa fa-comments"></span> 05
										</div>
										<div>
											<a class="read_more" href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slide-item owl-lazy" data-src="<?php echo base_url() ?>assett/img/banner/home-banner3.jpg">
				<div class="container">
					<div class="row">
						<div class="col-lg-5"></div>
						<div class="col-lg-7">
							<div class="blog_text_slider">
								<div class="blog_text">
									<img class="img-fluid" src="<?php echo base_url() ?>assett/img/banner/banner-img3.png" alt="">
									<div class="blog-meta bottom d-flex justify-content-between align-items-center flex-wrap">
										<div class="meta">
											<span class="icon fa fa-calendar"></span> March 14, 2018
											<span class="icon fa fa-comments"></span> 05
										</div>
										<div>
											<a class="read_more" href="#">Read More</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> 
	<!--================ End Home Banner Area =================-->
