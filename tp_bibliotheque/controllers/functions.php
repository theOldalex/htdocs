<?php



function afficher_liste_livres() {
    require DOSSIER_MODELS . '/Livre.php';
    $tous_les_livres = afficher_liste_livres();
    $titre = 'Liste des livres';
    include view('liste_livres');
}

function livres(){

	include DOSSIER_CONTROLLERS . '/livre_controller.php';

}

function view(string $livre): string {
	return DOSSIER_VIEWS . '/' . $livre . '.php';
}

?>


