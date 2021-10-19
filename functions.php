<?php



function afficher_liste_livres() {
    require DOSSIER_MODELS . '/Article.php';
    $titre = 'Liste des articles';
    include view('liste-articles');
}

function articles(){

	include DOSSIER_CONTROLLERS . '/Article_controller.php';

}

function view(string $article): string {
	return DOSSIER_VIEWS . '/' . $article . '.php';
}

?>


