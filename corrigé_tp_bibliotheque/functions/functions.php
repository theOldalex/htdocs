<?php

function erreur500() {
	require DOSSIER_VIEWS . '/errors/500.php';
	die;
}

function erreur404() {
	require DOSSIER_VIEWS . '/errors/404.php';
	die;
}

function erreur403() {
	require DOSSIER_VIEWS . '/errors/403.php';
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
	$connexion = new PDO('mysql:dbname=' . DB_NAME . ';host=' . DB_HOST, DB_USER, DB_PASSWORD);
	return $connexion;
}
