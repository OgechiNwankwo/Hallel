<?php
//  include ("../Settings/db_cred.php");
require("../Controller/journal_controller.php");

$journal_id = $_GET['journal_id'];
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hallel.inc &mdash; </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"> -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i" rel="stylesheet"> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="fh5co-loader"></div>

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-xs-2">
						<div id="fh5co-logo"><a href="index.php">Hallel.inc</a></div>
					</div>
					<div class="col-md-6 col-xs-6 text-center menu-1">
						<ul>
							<li class="has-dropdown active">
								<a href="product.php">Journal</a>
							<li><a href="about.php">About</a></li>
						
							<li><a href="customization.php">Customization</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
						<ul>
							<li class="search">
							<form action="search.php" method="POST">
									<div class="input-group">
										<input type="text" name="search_value" placeholder="Search.." id='search_value'>
										<span class="input-group-btn">
											<button class="btn btn-primary" name="search" type="submit"><i class="icon-search"></i></button>
										</span>
									</div>
								</form>
							</li>
							<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/background.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Product Details</h1>

							</div>

						</div>
					</div>
				</div>
			</div>
		</header>

		<div id="fh5co-product">
			<div class="container">
				<?php

				// fetching one journal
				$journal_items = select_one_journal_ctr($journal_id);
				//print_r($journal_items);

				?>
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<div class="">
							<div class="item">
								<div class="active text-center">
									<figure>
										<img src="<?php echo $journal_items['journal_image'] ?>" alt="user" height="500">
									</figure>
								</div>
							</div>

						</div>
						<div class="row animate-box">
							<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
								<h2><?php echo $journal_items['journal_title'] ?></h2>
								<p>
									<a href="../Actions/cartprocess.php?journal_id=<?php echo $journal_items['journal_id'] ?>" class="btn btn-primary btn-outline btn-lg">Add to Cart</a>
	
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="fh5co-tabs animate-box">
							<ul class="fh5co-tab-nav" style="display: flex; justify-content: center;">
								<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-file"></i></span><span class="hidden-xs">Product Details</span></a></li>
							</ul>

							<!-- Tabs -->
							<div class="fh5co-tab-content-wrap">

								<div class="fh5co-tab-content tab-content active" data-tab-content="1">
									<div class="col-md-10 col-md-offset-1">
										<span class="price"><span>&#8373;</span>: <?php echo $journal_items['journal_price'] ?></span>
										<h2><?php echo $journal_items['journal_title'] ?></h2>
										<p><?php echo $journal_items['journal_desc'] ?></p>

									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<?php
				//}
				?>
			</div>

		</div>
	</div>
	</div>
	</div>
	</div>


	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-4 fh5co-widget">
					<h3>Hallel.inc</h3>
					<p>The core and soul of Hallel finds its roots in also establishing excellence.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="fh5co-footer-links">
						<li><a href="#">Hallel.inc</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Journal</a></li>
						<li><a href="#">Customization</a></li>
					</ul>
				</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2022 Hallel.inc All Rights Reserved.</small>
						<small class="block"><a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
					</p>
					<p>
					<ul class="fh5co-social-icons">
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-dribbble"></i></a></li>
					</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

</body>

</html>