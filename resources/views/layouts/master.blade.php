<!DOCTYPE html>
<html lang ="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bowtie Software &amp; Web Development</title>
	<link rel="stylesheet" href="/css/styles.css">
	<link rel="stylesheet" href="/css/1-col-portfolio.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/bootstrap.min.css">

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/"><img src="/images/bowtiebranded.png" alt="bowtiesoftware.com" /></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="about">About</a>
				</li>
				<li>
					<a href="cards">Cards</a>
				</li>
				<li>
					<a href="contact">Contact</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">

	<!-- Page Heading -->
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Page Heading
				<small>Secondary Text</small>
			</h1>
		</div>
	</div>
	<!-- /.row -->


	@yield('content')


	@yield('footer')

			<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Your Website 2014</p>
			</div>
		</div>
		<!-- /.row -->
	</footer>

</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>