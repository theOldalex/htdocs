<?php

date_default_timezone_set('Europe/Paris');

require __DIR__ . '/config.php';
require __DIR__ . '/functions/functions.php';

/**
 * Toutes nos URL on la forme 
 * http://localhost/XXX/YYY/index.php?route=ROUTE
 * 
 * Donc on ATTEND un paramètre d'URL "route"
 * Donc on ATTEND un $_GET['route']
 */
if (!empty($_GET['route'])) {
	// On a une route

	require DOSSIER_CONTROLLERS . '/article_controller.php';

	switch ($_GET['route']) {

		case 'liste-articles':
			liste_articles();
			break;

		case 'details-article':
			details_article();
			break;

		case 'ajouter-article':
			ajouter_article();
			break;

		case 'ajouter-article-handler':
			ajouter_article_handler();
			break;

		case 'modifier-article':
			modifier_article();
			break;

		case 'modifier-article-handler':
			modifier_article_handler();
			break;

		case 'supprimer-article':
			supprimer_article();
			break;

		default:
			erreur404();
	}
} else {
	// On n'a pas de route
	redirection('liste-articles');
}
