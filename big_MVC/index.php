<?php
include __DIR__ . '/config.php';
include __DIR__ . '/functions/functions.php';
include __DIR__ . '/SimpleOrm.class.php';

$connexion = new mysqli('localhost', 'root', '');
SimpleOrm::useConnection($connexion, 'projet_php');


const DOSSIER_MODELS = __DIR__ . '/models';
const DOSSIER_VIEWS = __DIR__ . '/views';
const DOSSIER_CONTROLLERS = __DIR__ . '/controllers';
const DOSSIER_ASSETS = __DIR__ . '/assets';
const DOSIER_big_MVC = __DIR__ ;

if (!empty($_GET['route'])) {

	$route = $_GET['route'];

	switch ($route) {
		
		case 'home':
		case 'accueil':
			require DOSSIER_CONTROLLERS . '/accueil_controller.php';
			afficher_accueil();
			break;

		case 'liste-articles';
			require DOSSIER_CONTROLLERS . '/Article_controller.php';
			afficher_liste_articles();
			break;

		
		default:
			page404();
			break;

			
		} 
	} else {
		echo 'accueil.php';
		require DOSSIER_CONTROLLERS . '/accueil_controller.php';
		afficher_accueil();
	}
	
	