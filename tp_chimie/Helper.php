<?php

require_once __DIR__ . '/Config.php';

class Helper {
    public static function erreur500() {
        require_once static::view('errors/500');
        die;
    }

    public static function erreur404() {
        require_once static::view('errors/404');
        die;
    }

    public static function erreur403() {
        require_once static::view('errors/403');
        die;
    }

    public static function url(string $route): string {
        return Config::BASE_URL . '/index.php?route=' . $route;
    }
    
    public static function ajouter_une_molecule() {
        require static::models('models/MoleculeModel');
        require static::view('view/ajout');
       
    }
    
    public static function ajouter_une_molecule_handler() {

        require static::models('models/MoleculeModel');
    }
    public static function redirection(string $route) {
        header('location: ' . static::url($route));
        die();
    }

   
    public static function view(string $nom): string {
        return Config::DOSSIER_VIEWS . '/' . $nom . '.html.php';
    }

   
}
