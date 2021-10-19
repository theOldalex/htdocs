<?php


if (!empty($_GET['id'])) {
	
	$bdd = new PDO('mysql:host=localhost; dbname=projet_php', 'root', '');

	
	$requete = 'SELECT * FROM article WHERE id  = ' . $_GET['id'];
	
	$reponse = $bdd->query($requete);

	if ($reponse === false) {
		echo 'Erreur 500'; 
		die;
	}

	if ($reponse->rowCount() === 0) {
		
		echo 'Erreur 404'; 
		die;
	}

	$article = $reponse->fetch(PDO::FETCH_OBJ);

	if ($article === false) {
	
		echo 'Erreur 404'; 
		die;
	}

?>
	<!doctype html>
	<html lang="en">

	<head>
		<title><?= $article->titre ?> | Mon super blog</title>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

	<body>

		<div class="container">

			<h1><?= $article->titre ?></h1>

			<div class="row">
				<div class="col-12">
					<img src="<?= $article->image ?>" alt="L'image qui représente l'article <?= $article->titre ?>" class="img-fluid">
				</div>

				<div class="col-12">
					<p>
						Publié le <?= $article->date_de_publication ?>
					</p>
				</div>

				<div class="col-12">
					<?= $article->contenu ?>
				</div>
			</div>
			<footer class="text-center my-4">Alexandre - 2021</footer>

		</div>

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>

	</html>


<?php


} else {
	echo 'Erreur 404';
}

?>