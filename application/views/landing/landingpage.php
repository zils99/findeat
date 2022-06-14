<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Landing Page</title>
	<!-- fontawesome js -->
	<script src="https://kit.fontawesome.com/bdbefd3567.js" crossorigin="anonymous"></script>
	<!-- bootstrap 5 -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
	<!-- font awesome -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/fontawesome.min.js" integrity="sha512-5qbIAL4qJ/FSsWfIq5Pd0qbqoZpk5NcUVeAAREV2Li4EKzyJDEGlADHhHOSSCw0tHP7z3Q4hNHJXa81P92borQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/fontawesome.min.css" integrity="sha512-xX2rYBFJSj86W54Fyv1de80DWBq7zYLn2z0I9bIhQG+rxIF6XVJUpdGnsNHWRa6AvP89vtFupEPDP8eZAtu9qA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- custom css -->
	<link rel="stylesheet" href="<?= base_url('assets/'); ?>css/landing/landing_page.css" />
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-light nav-bg navbar-dark">
			<div class="container-fluid">
				<a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">FindEat!</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
					<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link" aria-current="page" href="<?= base_url('Landing/login') ?>">Login</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('Landing/register') ?>">Sign Up</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>

	<main style="height: 100vh">
		<div class="row d-flex m-0 wrapper flex-column-reverse flex-lg-row">
			<div class="col-sm-4 col-md-4 col-lg-6 text-start m-auto text-col">
				<h1 class="header-1">Enjoy Your Food!</h1>
				<p class="">Cari makanan bandung terbaik, dengan Find Eat</p>
			</div>
			<div class="col-sm-0 col-md-0 col-lg-5 column">
				<img src="<?= base_url('assets/'); ?>img/landing/landing-image.png" alt="bg-image" class="clip-image fit-image" />
			</div>
		</div>
	</main>
</body>

</html>