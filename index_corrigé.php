<?php


require __DIR__ . '/config.php';
require __DIR__ . '/functions/functions.php';
require __DIR__ . '/SimpleOrm.class.php';

$connexion = new mysqli(DB_HOST, DB_USER, DB_PASSWORD);

if ($connexion->connect_error) erreur500();

SimpleOrm::useConnection($connexion, DB_NAME);

session_start(); // Démarre le session
reconnecter_utilisateur_par_cookie(); // On check les cookies pour reconnecter l'utilisateur

/**
 * J'attends une URL 
 * de la forme BASE_URL . '?route=' . $route
 * (choisi arbitrairement)
 * 
 * Donc je veux un paramètre d'URL 
 * qui s'appelle "route"
 * 
 * Donc je veux un $_GET['route']
 */
if (!empty($_GET['route'])) {

	$route = $_GET['route'];

	switch ($route) {

		case 'home':
		case 'accueil':
			require DOSSIER_CONTROLLERS . '/accueil_controller.php';
			afficher_accueil();
			break;

		case 'liste-produits':
			require DOSSIER_CONTROLLERS . '/produit_controller.php';
			afficher_liste_produits();
			break;

		case 'details-produit':
			require DOSSIER_CONTROLLERS . '/produit_controller.php';
			afficher_un_produit();
			break;

		case 'ajouter-produit':
			require DOSSIER_CONTROLLERS . '/produit_controller.php';
			afficher_formulaire_ajout_produit();
			break;

		case 'ajouter-produit-handler':
			require DOSSIER_CONTROLLERS . '/produit_controller.php';
			gerer_formulaire_ajout_produit();
			break;

		case 'modifier-produit':
			require DOSSIER_CONTROLLERS . '/produit_controller.php';
			afficher_formulaire_modification_produit();
			break;

		case 'modifier-produit-handler':
			require DOSSIER_CONTROLLERS . '/produit_controller.php';
			gerer_formulaire_modification_produit();
			break;

		
		case '403':
			require_once DOSSIER_CONTROLLERS . '/error_controller.php';
			page403();
			break;

		case '500':
			require_once DOSSIER_CONTROLLERS . '/error_controller.php';
			page500();
			break;

		case '404':
		default:
			require_once DOSSIER_CONTROLLERS . '/error_controller.php';
			page404();
			break;
	}
} else {
	/**
	 * Pas de "route" dans l'URL
	 * J'appelle ma page d'accueil
	 */

	require DOSSIER_CONTROLLERS . '/accueil.php';
	afficher_accueil();
}
