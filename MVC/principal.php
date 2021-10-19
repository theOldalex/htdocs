<!doctype html>
<html lang="en">

<head>
	<title>Horloges</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</head>

<body>

	<div class="container">

		<nav class="nav justify-content-center">
		
			<a class="nav-link" href="principal.php">Accueil</a>
			
		</nav>

		<div class="row">
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Abidjan</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Africa/abidjan');
						echo date('H:i'); ?>
					</p>
				</div>
			</div>
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Djibouti</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Africa/djibouti');
						echo date('H:i'); ?>
					</p>
				</div>
			</div>
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Casablanca</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Africa/casablanca');
						echo date('H:i'); ?>
					</p>
					
					</div>
			</div>
		</div>
	</div>
		
		<div class="row">
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Tokyo</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Asia/tokyo');
						echo date('H:i'); ?>
					</p>
				</div>
			</div>
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Seoul</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Asia/seoul');
						echo date('H:i'); ?>
					</p>
				</div>
			</div>
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Singapore</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Asia/singapore');
						echo date('H:i'); ?>
					</p>
					
					</div>
			</div>
		</div>
	</div>
		<div class="row">
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Paris</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Europe/paris');
						echo date('H:i'); ?>
					</p>
				</div>
			</div>
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">Madrid</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Europe/madrid');
						echo date('H:i'); ?>
					</p>
				</div>
			</div>
			<div class="card text-left m-4">
				<div class="card-body">
					<h4 class="card-title">London</h4>
					<p class="card-text">
						<?php date_default_timezone_set('Europe/london');
						echo date('H:i'); ?>
					</p>
				
	
					</div>
			</div>
		</div>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>