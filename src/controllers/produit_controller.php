<?php

function afficher_liste_produits() {

	require DOSSIER_MODELS . '/Produit.php';

	$produits = Produit::all();
	$titre = 'Liste des produits';


	include view('liste-produits');
}

function afficher_un_produit() {
	if (isset($_GET['id'])) {
		require DOSSIER_MODELS . '/Produit.php';

		$produit = Produit::retrieveByField('id', $_GET['id'], SimpleOrm::FETCH_ONE);

		if ($produit === null) erreur404();

		$titre = $produit->nom;

		include view('details-produit');
	} else {
		erreur404();
	}
}

function afficher_formulaire_ajout_produit() {
	if (!is_admin()) erreur403();

	$titre = 'Ajouter un produit';
	include view('formulaire-ajout-produit');
}

function gerer_formulaire_ajout_produit() {
	if (!is_admin()) erreur403();

	if (
		!empty($_POST['nom'])

		&& !empty($_POST['prix'])
		&& is_numeric($_POST['prix'])
		&& $_POST['prix'] >= 0.01

		&& isset($_POST['stock'])
		&& is_numeric($_POST['stock'])
		&& $_POST['stock'] >= 0

		&& !empty($_FILES['image'])	// On vérifie que l'image est présent
		&& $_FILES['image']['error'] == 0 // On vérifie qu'il n'y a pas d'erreur
		&& $_FILES['image']['size'] <= MAX_FILE_SIZE // On vérifie que le fichier est pas trop gros
		&& substr($_FILES['image']['type'], 0, 5) == 'image' // On vérifie que le type MIME du fichier commence par "image"

		// && !empty($_POST['image'])
		// // Voir la doc de filter_var : https://www.php.net/manual/fr/function.filter-var.php
		// && filter_var($_POST['image'], FILTER_VALIDATE_URL) !== false

		&& !empty($_POST['description'])
	) {
		// J'ajoute le produit

		require DOSSIER_MODELS . '/Produit.php';

		$produit = new Produit;
		$produit->nom = $_POST['nom'];
		$produit->prix = $_POST['prix'];
		$produit->stock = $_POST['stock'];
		$produit->description = $_POST['description'];


		/** 
		 * Je gère l'image
		 */
		// Je calcule l'extension, le nom, le chemin
		$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
		$nouveau_nom = 'produit-' . uniqid() . '.' . $extension;
		$chemin = DOSSIER_ASSETS . '/img/' . $nouveau_nom;

		// Je déplace le fichier uploadé
		// De son ancien emplacement à son nouvel emplacement
		if (!move_uploaded_file($_FILES['image']['tmp_name'], $chemin)) erreur500();

		// Je crée une URL pour la sauvegarder en BDD
		$produit->image = BASE_URL . '/assets/img/' . $nouveau_nom;

		$produit->save();

		redirection('liste-produits');
	} else {
		// Erreur de vérification

		/*
		$_SESSION['erreur'] = [
			'nom' => ['Le nom est requis'],
			'prix' => [
				'Le prix doit être un nombre',
				'Le prix doit être multiple de 0.01'
			]
		];

		if (empty($_POST['nom'])) $_SESSION['erreur']['nom'][] = 'Le nom est requis';
		*/

		redirection('ajouter-produit');
	}
}

function afficher_formulaire_modification_produit() {
	if (!is_admin()) erreur403();

	if (!empty($_GET['id'])) {
		require DOSSIER_MODELS . '/Produit.php';
		$produit = Produit::retrieveByField('id', $_GET['id'], SimpleOrm::FETCH_ONE);

		if ($produit === null) erreur404();

		$titre = 'Modifier un produit';
		include view('formulaire-modification-produit');
	} else {
		erreur404();
	}
}

function gerer_formulaire_modification_produit() {
	if (is_admin()) {
		if (
			!empty($_GET['id'])

			&& !empty($_POST['nom'])

			&& !empty($_POST['prix'])
			&& is_numeric($_POST['prix'])
			&& $_POST['prix'] >= 0.01

			&& isset($_POST['stock'])
			&& is_numeric($_POST['stock'])
			&& $_POST['stock'] >= 0

			&& !empty($_POST['description'])
		) {
			// Je modifie le produit

			require DOSSIER_MODELS . '/Produit.php';

			$produit = Produit::retrieveByField('id', $_GET['id'], SimpleOrm::FETCH_ONE);

			if ($produit === null) erreur404();

			$produit->nom = $_POST['nom'];
			$produit->prix = $_POST['prix'];
			$produit->stock = $_POST['stock'];
			$produit->description = $_POST['description'];

			if (
				!empty($_FILES['image'])	// On vérifie que l'image est présent
				&& $_FILES['image']['error'] == 0 // On vérifie qu'il n'y a pas d'erreur
				&& $_FILES['image']['size'] <= MAX_FILE_SIZE // On vérifie que le fichier est pas trop gros
				&& substr($_FILES['image']['type'], 0, 5) == 'image' // On vérifie que le type MIME du fichier commence par "image"
			) {
				/** 
				 * Je gère l'image
				 */
				// Je calcule l'extension, le nom, le chemin
				$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
				$nouveau_nom = 'produit-' . uniqid() . '.' . $extension;
				$chemin = DOSSIER_ASSETS . '/img/' . $nouveau_nom;

				// Je déplace le fichier uploadé
				// De son ancien emplacement à son nouvel emplacement
				if (!move_uploaded_file($_FILES['image']['tmp_name'], $chemin)) erreur500();

				// Je supprime l'ancienne image
				$nom_fichier = basename($produit->image);
				unlink(DOSSIER_ASSETS . '/img/' . $nom_fichier);

				// Je crée une URL pour la sauvegarder en BDD
				$produit->image = BASE_URL . '/assets/img/' . $nouveau_nom;
			}


			$produit->save();

			redirection('liste-produits');
		} else {
			// Erreur de vérification
			redirection('liste-produits');
		}
	} else {
		erreur403();
	}
}

function supprimer_produit() {
	if (is_admin()) {
		if (isset($_GET['id'])) {
			require DOSSIER_MODELS . '/Produit.php';

			$produit = Produit::retrieveByField('id', $_GET['id'], SimpleOrm::FETCH_ONE);

			if ($produit === null) erreur404();

			$nom_fichier = basename($produit->image);
			unlink(DOSSIER_ASSETS . '/img/' . $nom_fichier);

			$produit->delete();

			redirection('liste-produits');
		} else {
			erreur404();
		}
	} else {
		erreur403();
	}
}
