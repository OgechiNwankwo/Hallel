<?php
//  include ("../Settings/db_cred.php");
require("../Functions/displayjournal.php");
?>

<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hallel.inc &mdash;</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="gettemplates.co" />
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">


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
							<li><a href="admincustomization.php">Customization</a></li>
							<li><a href="journalform.php" class="btn-sm btn-warning ">Add Journal</a></li>
							<li><a href="../Functions/logout.php?logout=logout" class="btn-sm btn-danger ">Logout</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">

					</div>
				</div>

			</div>
		</nav>

		<div id="fh5co-product">
			<div class="container">
				<?php showrandJournalTable_fnc(); ?>

			</div>
		</div>




		<!-- <div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-1.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Hauteville Concrete Rocking Chair</a></h3>
								<span class="price">$350</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-2.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Pavilion Speaker</a></h3>
								<span class="price">$600</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-3.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Ligomancer</a></h3>
								<span class="price">$780</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-4.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Alato Cabinet</a></h3>
								<span class="price">$800</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-5.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Earing Wireless</a></h3>
								<span class="price">$100</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-6.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Sculptural Coffee Table</a></h3>
								<span class="price">$960</span>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-7.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">The WW Chair</a></h3>
								<span class="price">$540</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-8.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Himitsu Money Box</a></h3>
								<span class="price">$55</span>
							</div>
						</div>
					</div>
					<div class="col-md-4 text-center animate-box">
						<div class="product">
							<div class="product-grid" style="background-image:url(images/product-9.jpg);">
								<div class="inner">
									<p>
										<a href="single.php" class="icon"><i class="icon-shopping-cart"></i></a>
										<a href="single.php" class="icon"><i class="icon-eye"></i></a>
									</p>
								</div>
							</div>
							<div class="desc">
								<h3><a href="single.php">Ariane Prin</a></h3>
								<span class="price">$99</span>
							</div>
						</div>
					</div>
				</div> -->
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
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://blog.gessato.com/" target="_blank">Gessato</a> &amp; <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
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

	<?php if (isset($_GET['message'])) : ?>

		<div class='add' data-add="<?php echo $_GET['message']; ?>"></div>

	<?php endif; ?>

	<?php if (isset($_GET['message2'])) : ?>

		<div class='update' data-update="<?php echo $_GET['message2']; ?>"></div>

	<?php endif; ?>



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

	<script>
		const message = $(".add").data("add")

		if (message) {
			Swal.fire({
				icon: 'success',
				title: 'Journal added.',
				text: 'Your journal has been added successfully!',
			})
		}
		const message2 = $(".update").data("update")

		if (message2) {
			Swal.fire({
				icon: 'success',
				title: 'Journal Updated.',
				text: 'Your journal has been updated successfully!',
			})
		}
	</script>

</body>

</html>