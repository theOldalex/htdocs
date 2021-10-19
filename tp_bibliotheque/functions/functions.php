<?php


function erreur500() {
	include DOSSIER_VIEWS . '/errors/500.php';
	die;
}

function erreur404() {
	include DOSSIER_VIEWS . '/errors/404.php';
	die;
}

function url(string $route): string {
	return BASE_URL . '/index.php?route=' . $route;
}

/**
 * Voir la doc de la fonction `header`
 * https://www.php.net/manual/fr/function.header.php
 */
function redirection(string $route) {
	header('location: ' . url($route));
	die();
}

function connexion_bdd(): PDO {
	$connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
	return $connexion;
}
