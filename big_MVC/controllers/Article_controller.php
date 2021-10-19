<?php
include_once __DIR__ . '/../functions/functions.php';

function afficher_liste_article() {

	include __DIR__.'/../models/Article.php';

	$titre = 'Liste des articles';
	
	include view('liste-articles');

}

?>