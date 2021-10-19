<?php
require_once __DIR__ . '/../router.php';
require DOSSIER_MODELS . '/Livre.php';

function liste_livres() {
	$tous_les_livres = afficher_liste_livres();

	$titre = 'Mes livres';

	include DOSSIER_VIEWS . '/liste_livres.php';
}



// function ajouter_livre() {
// 	$titre = 'Ajouter un article';
// 	include DOSSIER_VIEWS . '/articles/formulaire-ajout.php';
// }

// function ajouter_article_handler() {
// 	if (
// 		!empty($_POST['titre'])
// 		&& !empty($_POST['contenu'])
// 		&& !empty($_POST['image'])

// 		&& filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
// 	) {

// 		inserer_article($_POST['titre'], $_POST['contenu'], $_POST['image']);

// 		redirection('liste-articles');
// 	} else {
// 		redirection('ajouter-article');
// 	}
// }

// function modifier_article() {
// 	if (empty($_GET['id'])) erreur404();

// 	$article = recuperer_un_article($_GET['id']);
// 	if (!$article) erreur404();

// 	$titre = 'Modifier un article';
// 	include DOSSIER_VIEWS . '/articles/formulaire-modif.php';
// }

// function modifier_article_handler() {
// 	if (empty($_GET['id'])) erreur404();

// 	if (
// 		!empty($_POST['titre'])
// 		&& !empty($_POST['contenu'])
// 		&& !empty($_POST['image'])

// 		&& filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false
// 	) {

// 		modifier_un_article($_GET['id'], $_POST['titre'], $_POST['contenu'], $_POST['image']);

// 		redirection('details-article&id=' . $_GET['id']);
// 	} else {
// 		redirection('modifier-article');
// 	}
// }

// function supprimer_article() {
// 	if (empty($_GET['id'])) erreur404();

// 	supprimer_un_article($_GET['id']);

// 	redirection('liste-articles');
// }
