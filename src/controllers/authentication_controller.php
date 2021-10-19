<?php

function afficher_formulaire_connexion() {
	$titre = 'Connexion';
	include view('connexion');
}

function gerer_formulaire_connexion() {
	if (
		!empty($_POST['login'])
		&& !empty($_POST['password'])
	) {
		// Je vais chercher l'utilisateur
		require DOSSIER_MODELS . '/Utilisateur.php';

		$utilisateur = Utilisateur::retrieveByField('pseudo', $_POST['login'], SimpleOrm::FETCH_ONE);

		if (
			$utilisateur === null // Mauvais pseudo
			|| $_POST['password'] =! $utilisateur->mot_de_passe // Mauvais mot de passe
			// || !password_verify($_POST['password'], $utilisateur->mot_de_passe) // Mauvais mot de passe
		) {
			redirection('connexion');
		}

		/**
		 * On a un utilisateur qui a le bon identifiant
		 * et le bon mot de passe
		 */
		$_SESSION['pseudo'] = $utilisateur->pseudo;
		$_SESSION['id'] = $utilisateur->id;


		if (!empty($_POST['remain_connected']) && $_POST['remain_connected'] == 'true') {
			creer_cookie_token($utilisateur);
		}

		redirection('home');
	} else {
		// Erreur : je renvoie sur le formulaire de connexion
		redirection('connexion');
	}
}

function deconnexion() {
	session_destroy();

	setcookie('token', '', -1);

	redirection('home');
}
