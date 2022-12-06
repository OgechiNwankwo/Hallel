<?php
$journalId=$_GET['id'];
$journalName=$_GET['journalName'];
$journalDesc=$_GET['journaldes'];
$journalPrice=$_GET['journalprice'];
$journalKeyword=$_GET['journalKeyword'];
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
							<li class="has-dropdown">
								<a href="product.php">Hallel.inc</a>
								<!-- <ul class="dropdown"> -->
									<!-- <li><a href="single.php">Single Shop</a></li> -->
								</ul>
							</li>
							<li><a href="about.php">About</a></li>
							<li class="has-dropdown active">
							<li><a href="customization.php">Customization</a></li>
						</ul>
					</div>
					<div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
						<ul>
							<li class="search">
								<div class="input-group">
									<input type="text" placeholder="Search..">
									<span class="input-group-btn">
										<button class="btn btn-primary" type="button"><i class="icon-search"></i></button>
									</span>
								</div>
							</li>
							<li class="shopping-cart"><a href="#" class="cart"><span><small>0</small><i class="icon-shopping-cart"></i></span></a></li>
						</ul>
					</div>
				</div>

			</div>
		</nav>

		<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/img_bg_2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<div class="display-t">
							<div class="display-tc animate-box" data-animate-effect="fadeIn">
								<h1>Login</h1>

							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
     

		<div id="fh5co-started">
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Journal</h2>
						<p>Journal Information </p>
					</div>
				</div>
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2">
						<form class="form-inline" method="Post" action="../Admin/updatejournal.php " >
							<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="email" class="sr-only">Email</label>
									<input type="text" class="form-control" id="journaln" name="journal_title" value="<?php echo $journalName; ?>" placeholder="journal title"><br>
									<input type="number" class="form-control" id="journalp" name="journal_price" value="<?php echo $journalPrice; ?>"  placeholder="journal price"><br>
									<input type="text" class="form-control" id="journaldesc" name="journal_desc"  value="<?php echo $journalDesc; ?>" placeholder="journal desc"><br>
                                    <input type="text" class="form-control" id="journalk" name="journal_keywords" value="<?php echo $journalKeyword; ?>" placeholder="journal keywords">
									<input type="hidden" class="form-control" id="journalid" name="journal_id" value="<?php echo $journalId; ?>" ><br>
									
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<button type="submit" name="submit" class="btn btn-default btn-block">Update</button>

							</div>
						</form>
					</div>
				</div>
			</div>
		</div>


	</div>


	<?php if (isset($_GET['message'])) : ?>

		<div class='alert' data-id="<? $_GET['message']; ?>"></div>

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
		const message = $(".alert").data("id")

		if (message) {
			Swal.fire({
				icon: 'success',
				title: 'Update done.',
				text: 'Your journal has been updated successfully!',
			})
		}
		console.log(message)
	</script>

</body>

</html>