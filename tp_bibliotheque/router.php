<?php
include __DIR__ . '/functions/functions.php';




const DOSSIER_MODELS = __DIR__ . '/models';
const DOSSIER_VIEWS = __DIR__ . '/views';
const DOSSIER_CONTROLLERS = __DIR__ . '/controllers';


$bdd = new mysqli('localhost', 'root', '', 'bibliotheque');
if ($bdd->connect_error) die('Erreur de connexion à la BDD');



if (!empty($_GET['id'])) {

    $route = $_GET['id'];

	switch ($route) {
   
            case 'liste-livres';
			require DOSSIER_CONTROLLERS . '/livre_controller.php';
			afficher_liste_livres();
			break;

            default:
			echo "Erreur 404";
			break;

    }
}



?>