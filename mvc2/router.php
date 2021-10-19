<?php
include __DIR__ . '/controllers/functions.php';


const DOSSIER_MODELS = __DIR__ . '/models';
const DOSSIER_VIEWS = __DIR__ . '/views';
const DOSSIER_CONTROLLERS = __DIR__ . '/controllers';


$bdd = new mysqli('localhost', 'root', '', 'projet_php');
if ($bdd->connect_error) die('Erreur de connexion à la BDD');



if (!empty($_GET['id'])) {

    $route = $_GET['id'];

	switch ($route) {
   
            case 'liste-articles';
			require DOSSIER_CONTROLLERS . '/Article_controller.php';
			afficher_liste_articles();
			break;

            default:
			echo "Erreur 404";
			break;

    }
}



?>