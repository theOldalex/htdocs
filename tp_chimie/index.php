<?php

require_once __DIR__ . '/Config.php';
require_once __DIR__ . '/Helper.php';
require_once __DIR__ . '/exceptions.php';

try {
    session_start();


    require_once Config::DOSSIER_CONTROLLERS . '/HomeController.php';
    require_once Config::DOSSIER_CONTROLLERS . '/MoleculeController.php';


    if (!empty($_GET['route'])) {

        switch ($_GET['route']) {
            case 'home':
               
                HomeController::afficherAccueil();
                break;

            case 'liste-molecules':
               
                MoleculeController::afficherLesMolecules();
                break;

                case 'ajouter-molecules':
                   
                    ajouter_une_molecule();
                    
        
                case 'ajouter-une-molecule_handler':
                   
                    ajouter_une_molecule_handler();
                    

            case 'test-erreurs':
                MoleculeController::AfficherErreurs();

            default:
                // Erreur 404
                throw new NotFoundException;
        }
    } else {
       
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
