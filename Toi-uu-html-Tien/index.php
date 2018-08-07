<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Training-Vinsoft,Training-Vinsoft,Training-Vinsoft,Training-Vinsoft"/>
	<title>Vinsoft-Training</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
	<?php
	$css = file_get_contents('css/header.css');
	echo $css;
	?>
</style>
<link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<!-- header -->
		<?php include "header.php" ?>
		<!-- section1 -->
		<section>
			<div class="row text-center">
				<div class="text">
					<ruby>
						We Get The Job Done, No Matter The Project<rt>OUR SERVICES</rt>
					</ruby>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 ">
					<div class="card" >
						<img class="card-img-top" src="img/product.png" alt="Card image cap" width="168px" height="126px">
						<div class="card-body text-center">
							<h5 class="card-title">Website Development</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn primary">Explore more >></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="card" >
						<img class="card-img-top" src="img/product.png" alt="Card image cap" width="168px" height="126px">
						<div class="card-body text-center">
							<h5 class="card-title">Website Development</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn primary">Explore more >></a>
						</div>
					</div>
				</div>
				<div class="col-md-4 ">
					<div class="card" >
						<img class="card-img-top" src="img/product.png" alt="Card image cap" width="168px" height="126px">
						<div class="card-body text-center">
							<h5 class="card-title">Website Development</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
							<a href="#" class="btn primary">Explore more >></a>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- end-section1 -->
		<!-- section2 -->
		<section>
			<!-- border bottom -->
			<div class="row">
				<div class="col-4 offset-4"></div>
			</div>
			<div class="row text-center">
				<div class="text">
					<ruby>
						The Circle Of Live And Deft Continute..<rt>OUR CLIENTS</rt>
					</ruby>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md col-sm-6 col-xs-6"><img data-src="img/clients.png" alt="clients" width="98px" height="98px"></div>
				<div class="col-md col-sm-6 col-xs-6"><img data-src="img/clients.png" alt="clients" width="98px" height="98px"></div>
				<div class="col-md col-sm-6 col-xs-6"><img data-src="img/clients.png" alt="clients" width="98px" height="98px"></div>
				<div class="col-md col-sm-6 col-xs-6"><img data-src="img/clients.png" alt="clients" width="98px" height="98px"></div>
				<div class="col-md col-sm-6 col-xs-6"><img data-src="img/clients.png" alt="clients" width="98px" height="98px"></div>
			</div>
		</section>
		<!-- end-section2 -->
		<!-- section3 -->
		<section>
			<!-- border bottom -->
			<div class="row">
				<div class="col-4 offset-4"></div>
			</div>
			<div class="row text-center">
				<div class="text">
					<ruby>
						We Like To Keep Everyone Updated<rt>OUR ARTICLES</rt>
					</ruby>
				</div>
			</div>
			<div class="row ">
				<div class="col-md-4">
					<div class="card card2" >
						<img class="card-img-top" data-src="img/articles.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Website Development</h5>
							<p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card2" >
						<img class="card-img-top" data-src="img/articles.png" alt="Card image cap">

						<div class="card-body">
							<h5 class="card-title">Website Development</h5>
							<p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card card2" >
						<img class="card-img-top" data-src="img/articles.png" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Website Development</h5>
							<p class="card-text text-left">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- end-section3 -->
		<!-- footer -->
		<?php include "footer.php" ?>
	</div>
	<script src="js/lazyload.min.js"></script>
	<script >
		new LazyLoad({
			elements_selector: ["img", "iframe"]
		});
	</script>

</body>
</html>
