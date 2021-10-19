<?php
include __DIR__ . '/../controllers/livre_controller.php';
include __DIR__ . '/../views/liste_livres.php';

$requete = 'SELECT * FROM livre WHERE id = ' . $_GET['id'];
	
	$reponse = $bdd->query($requete);

	if ($reponse === false) {
		echo 'Erreur 500'; 
		die;
	}

	if ($reponse->rowCount() === 0) {
		
		echo 'Erreur 404'; 
		die;
	}

	$livre = $reponse->fetch(PDO::FETCH_OBJ);

	if ($livre === false) {
	
		echo 'Erreur 404'; 
		die;
	}



?>