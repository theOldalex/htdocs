<?php

require_once __DIR__ . '/Config.php';
require_once __DIR__ . '/Helper.php';
require_once __DIR__ . '/exceptions.php';

try {
    session_start();


    require_once Config::DOSSIER_CONTROLLERS . '/HomeController.php';
    require_once Config::DOSSIER_CONTROLLERS . '/LivreController.php';


    if (!empty($_GET['route'])) {

        switch ($_GET['route']) {
            case 'home':
                // On affiche la home
                HomeController::afficherAccueil();
                break;

            case 'liste-livres':
                // On affiche la home
                LivreController::afficherLesLivres();
                break;

            case 'test-erreurs':
                LivreController::queDesErreurs();

            default:
                // Erreur 404
                throw new NotFoundException;
        }
    } else {
        // On affiche la home
        HomeController::afficherAccueil();
    }
} catch (ServerErrorException $ex) {
    file_put_contents('log.txt', $ex->getMessage() . PHP_EOL, FILE_APPEND);
    Helper::erreur500();
} catch (NotFoundException $ex) {
    Helper::erreur404();
} catch (AccessDeniedException $ex) {
    Helper::erreur403();
} catch (Exception $ex) {
    /**
     * On "log" les erreurs
     * Autrement dit, on les écrit dans un fichier
     * Pour pouvoir les consulter si besoin. 
     * 
     * Ca peut apporter des informations de debuggage intéressantes
     */
    file_put_contents('log.txt', $ex->getMessage() . PHP_EOL, FILE_APPEND);
    Helper::erreur500();
}
