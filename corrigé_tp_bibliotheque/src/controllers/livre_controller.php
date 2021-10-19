<?php

function afficher_tous_les_livres() {
	require DOSSIER_MODELS . '/livre_model.php';
	$livres = recuperer_tous_les_livres();

	require DOSSIER_VIEWS . '/livres/all.php';
}

function ajouter_un_livre() {
	require DOSSIER_MODELS . '/auteur_model.php';
	$auteurs = recuperer_tous_les_auteurs();
	require DOSSIER_VIEWS . '/livres/ajout.php';
}

function ajouter_un_livre_handler() {

	require DOSSIER_MODELS . '/auteur_model.php';

	$capturer;

	if (
		!empty($_POST['titre'])
		&& !empty($_POST['isbn'])
		&& !empty($_POST['auteur_id'])
		&& !empty($_POST['date_publication'])
		&& !empty($_POST['stock'])

		&& preg_match('#(\d{4})-(\d{2})-(\d{2})#', $_POST['date_publication'], $capturer) // Pas demandé
		&& checkdate($capturer[2], $capturer[3], $capturer[1]) // Pas demandé

		&& is_numeric($_POST['stock'])
		&& verifier_auteur_existe_dans_bdd($_POST['auteur_id'])
	) {

		require DOSSIER_MODELS . '/livre_model.php';
		inserer_un_livre(
			$_POST['titre'],
			$_POST['isbn'],
			$_POST['auteur_id'],
			$_POST['date_publication'],
			$_POST['stock'],
		);

		redirection('liste-livres');
	} else {
		redirection('ajouter-livre');
	}
}

function supprimer_livre() {
	require DOSSIER_MODELS . '/livre_model.php';
	if (empty($_GET['id']) || !verifier_livre_existe_dans_bdd($_GET['id'])) erreur404();

	if (verifier_livre_pas_emprunte($_GET['id'])) supprimer_livre_en_bdd($_GET['id']);

	redirection('liste-livres');
}
