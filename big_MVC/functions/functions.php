<?php

function url(string $route): string {
	return BASE_URL . '?route=' . $route;
}


function redirection(string $route) {
	header('location: ' . url($route));
	die();
}

function page404() {
	require DOSSIER_VIEWS . '/404.php';
	die();
}

function afficher_liste_articles() {
    require DOSSIER_MODELS . '/Article.php';
    $article = Article::all();
    $titre = 'Liste des articles';
    include view('liste-articles');
}

function articles(){

	include DOSSIER_CONTROLLERS . '/Article_controller.php';

}

function view(string $article): string {
	return DOSSIER_VIEWS . '/' . $article . '.php';
}


