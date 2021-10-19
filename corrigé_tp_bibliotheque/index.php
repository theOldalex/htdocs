<?php

require __DIR__ . '/config.php';
require __DIR__ . '/functions/functions.php';

if (!empty($_GET['route'])) {

	switch ($_GET['route']) {
		case 'liste-livres':
			require DOSSIER_CONTROLLERS . '/livre_controller.php';
			afficher_tous_les_livres();
			break;
			
		case 'supprimer-livre':
			require DOSSIER_CONTROLLERS . '/livre_controller.php';
			supprimer_livre();
			break;
			
		case 'ajouter-livre':
			require DOSSIER_CONTROLLERS . '/livre_controller.php';
			ajouter_un_livre();
			break;

		case 'ajouter-livre-handler':
			require DOSSIER_CONTROLLERS . '/livre_controller.php';
			ajouter_un_livre_handler();
			break;

		case 'liste-emprunts':
			require DOSSIER_CONTROLLERS . '/emprunt_controller.php';
			afficher_tous_les_emprunts();
			break;

		case 'supprimer-emprunt':
			require DOSSIER_CONTROLLERS . '/emprunt_controller.php';
			supprimer_un_emprunt();
			break;

		case 'ajouter-emprunt':
			require DOSSIER_CONTROLLERS . '/emprunt_controller.php';
			ajouter_un_emprunt();
			break;

		case 'ajouter-emprunt-handler':
			require DOSSIER_CONTROLLERS . '/emprunt_controller.php';
			ajouter_un_emprunt_handler();
			break;

		default:
			erreur404();
	}
	
} else {
	erreur404();
}
