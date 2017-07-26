<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Wratten Media">

	<title>Wratten Media - Graphic Design Studio</title>

	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

	<!-- Plugin CSS -->
	<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

	<!-- Theme CSS -->
	<link href="css/creative.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-84767710-1', 'auto');
		ga('send', 'pageview');
	</script>

</head>

<body id="page-top">

	<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
				</button>
				<a class="navbar-brand page-scroll" href="#page-top">Wratten Media</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
				<?php /*
					<li>
						<a class="page-scroll" href="#about">About</a>
					</li>
					*/?>
					<li>
						<a class="page-scroll" href="#services">Services</a>
					</li>
					<li>
						<a class="page-scroll" href="#portfolio">Portfolio</a>
					</li>
					<li>
						<a class="page-scroll" href="#contact">Contact</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>

	<header>
		<div class="header-content">
			<div class="header-content-inner">
				<h1 id="homeHeading">Welcome to Wratten Media</h1>
				<hr>
				<p>We are a small Cairns based graphic design agency.</p>
				<a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
			</div>
		</div>
	</header>
<?php /* 
	<section class="bg-primary" id="about">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">We've got what you need!</h2>
					<hr class="light">
					<p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
					<a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
				</div>
			</div>
		</div>
	</section>
*/ ?>
	<section id="services">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">At Your Service</h2>
					<hr class="primary">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-cubes  text-primary sr-icons"></i>
						<h3>Logo Design</h3>
						<?php #<p class="text-muted">Our templates are updated regularly so they don't break.</p> ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-camera-retro text-primary sr-icons"></i>
						<h3>Photography</h3>
					   <?php # <p class="text-muted">You can use this theme as is, or you can make changes!</p> ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
						<h3>Custom Wedding Invitations</h3>
						<?php #<p class="text-muted">We update dependencies to keep things fresh.</p> ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 text-center">
					<div class="service-box">
						<i class="fa fa-4x fa-heart text-primary sr-icons"></i>
						<h3>Made with Love</h3>
						<?php #<p class="text-muted">You have to make your websites with love these days!</p> ?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="no-padding" id="portfolio">
		<div class="container-fluid">
			<div class="row no-gutter popup-gallery">
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/1.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/1.jpg" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Brochure Design
								</div>
								<div class="project-name">
									Dominic Clifford
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/2.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/2.jpg" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Photography
								</div>
								<div class="project-name">
									Floral Background
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/3.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/3.jpg" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Custom Wedding Invitations
								</div>
								<div class="project-name">
									Spring Wedding Invite
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/4.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/4.jpg" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/5.png" class="portfolio-box">
						<img src="img/portfolio/thumbnails/5.png" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Branding + Packaging Design
								</div>
								<div class="project-name">
									Chénier Cosmetics
								</div>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6">
					<a href="img/portfolio/fullsize/6.jpg" class="portfolio-box">
						<img src="img/portfolio/thumbnails/6.jpg" class="img-responsive" alt="">
						<div class="portfolio-box-caption">
							<div class="portfolio-box-caption-content">
								<div class="project-category text-faded">
									Category
								</div>
								<div class="project-name">
									Project Name
								</div>
							</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<aside class="bg-dark">
		<div class="container text-center">
			<div class="call-to-action">
				<h2>Download our 2017 Portfolio</h2>
				<a href="#" class="btn btn-default btn-xl sr-button">Download Now!</a>
			</div>
		</div>
	</aside>

	<aside class="bg-primary">
		<div class="container text-center">
			<div class="call-to-action">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Follow Us!</h2>
					<hr class="primary">
					<?php #<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p> ?>
				</div>
				<div class="col-lg-2 col-lg-offset-3 text-center" style="color:white;">
					<a href="https://www.facebook.com/WrattenMedia/" target="_BLANK"><i class="fa fa-facebook-official fa-3x sr-contact"></i></a>
				</div>
				<div class="col-lg-2 text-center" style="color:white;">
					<a href="https://www.instagram.com/wrattenmedia/" target="_BLANK"><i class="fa fa-instagram fa-3x sr-contact"></i></a>
				</div>
				<div class="col-lg-2 text-center" style="color:white;">
					<a href="https://www.pinterest.com/Kelwratten" target="_BLANK"><i class="fa fa-pinterest-square fa-3x sr-contact"></i></a>
				</div>
			</div>
		</div>
	</aside>


	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2 text-center">
					<h2 class="section-heading">Let's Get In Touch!</h2>
					<hr class="primary">
					<p>Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
				</div>
				<div class="col-lg-4 col-lg-offset-2 text-center">
					<i class="fa fa-phone fa-3x sr-contact"></i>
					<p>0438-045-878</p>
				</div>
				<div class="col-lg-4 text-center">
					<i class="fa fa-envelope-o fa-3x sr-contact"></i>
					<p><a href="mailto:wrattenmedia@gmail.com">wrattenmedia@gmail.com</a></p>
				</div>
			</div>
		</div>
	</section>




	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Plugin JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
	<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
	<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

	<!-- Theme JavaScript -->
	<script src="js/creative.min.js"></script>

</body>

</html>
