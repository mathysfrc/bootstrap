<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
		  rel="stylesheet"
		  integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
		  crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Discovering Bootstrap 5.1</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Categories
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">Photos</a></li>
						<li><a class="dropdown-item" href="#">Articles</a></li>
						<li><a class="dropdown-item" href="#">Projets</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<section id="background">
	<h1>Journey into Bootstrap classes</h1>
	<div class="parent">
		<div class="div1 card" style="width: 18rem;">
			<img src="images/canoe.jpg" class="card-img-top" alt="...">
			<div class="card-body d-flex">
				<h5 class="card-title">Visit Components lake</h5>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
		</div>
		<div class="div2 card" style="width: 18rem;">
			<img src="images/cascading.jpg" class="card-img-top" alt="...">
			<div class="card-body d-flex">
				<h5 class="card-title">Facing Cascade Style Sheet</h5>
				<p class="card-text">Some quick example text.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
		</div>
		<div class="div3 card" style="width: 18rem;">
			<img src="images/river.jpg" class="card-img-top" alt="...">
			<div class="card-body d-flex">
				<h5 class="card-title">Contemplate Form Inputs river</h5>
				<p class="card-text">make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
		</div>
		<div class="div4 card" style="width: 18rem;">
			<img src="images/champ.jpg" class="card-img-top" alt="...">
			<div class="card-body d-flex">
				<h5 class="card-title">Enjoy Responsive Layout land</h5>
				<p class="card-text">Build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="btn btn-primary">Read more</a>
			</div>
		</div>
	</div>
</section>
<section id="background2">
	<h2>The css frameworks are very useful</h2>
	<p>Learning them comes with practice</p>
</section>
<footer class="text-center text-lg-start">
	<!-- Copyright -->
	<div class="text-center p-3">
		© 2022 Wilders | images <a href="@picsum" >@picsum</a>
	</div>
	<!-- Copyright -->
</footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
		crossorigin="anonymous"></script>
</html>
