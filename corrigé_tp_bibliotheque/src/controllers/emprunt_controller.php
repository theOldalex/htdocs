<?php

function afficher_tous_les_emprunts() {
	require DOSSIER_MODELS . '/emprunt_model.php';

	$emprunts = recuperer_tous_les_emprunts();

	require DOSSIER_VIEWS . '/emprunts/all.php';
}

function supprimer_un_emprunt() {
	require DOSSIER_MODELS . '/emprunt_model.php';

	if (empty($_GET['id']) || !verifier_emprunt_existe_dans_bdd($_GET['id'])) erreur404();

	supprimer_un_emprunt_en_bdd($_GET['id']);

	redirection('liste-emprunts');
}

function ajouter_un_emprunt() {
	require DOSSIER_MODELS . '/livre_model.php';
	require DOSSIER_MODELS . '/personne_model.php';
	$livres = recuperer_tous_les_livres();
	$personnes = recuperer_toutes_les_personnes();

	require DOSSIER_VIEWS . '/emprunts/ajout.php';
}

function ajouter_un_emprunt_handler() {

	require DOSSIER_MODELS . '/livre_model.php';
	require DOSSIER_MODELS . '/personne_model.php';

	if (
		!empty($_POST['date_retour'])
		&& !empty($_POST['personne_id'])
		&& !empty($_POST['livre_id'])

		&& strcmp($_POST['date_retour'], date('Y-m-d')) > 0 // Pas demandé

		&& verifier_livre_existe_dans_bdd($_POST['livre_id'])
		&& verifier_personne_existe_dans_bdd($_POST['personne_id'])
	) {
		require DOSSIER_MODELS . '/emprunt_model.php';
		inserer_emprunt(
			$_POST['personne_id'],
			$_POST['livre_id'],
			$_POST['date_retour'],
		);

		redirection('liste-emprunts');
	} else {
		redirection('ajouter-emprunt');
	}
}
