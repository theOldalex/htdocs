<?php
include __DIR__ . '/../controllers/Article_controller.php';
include __DIR__ . '/../views/liste_articles.php';

$requete = 'SELECT * FROM article WHERE id = ' . $_GET['id'];
	
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