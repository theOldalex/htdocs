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

    /**
     * Voir la doc de la fonction `header`
     * https://www.php.net/manual/fr/public static function.header.php
     */
    public static function redirection(string $route) {
        header('location: ' . static::url($route));
        die();
    }

    /**
     * Renvoie une string avec le nom du fichier view
     */
    public static function view(string $nom): string {
        return Config::DOSSIER_VIEWS . '/' . $nom . '.html.php';
    }

    public static function is_admin(): bool {
        return static::is_connected() && $_SESSION['pseudo'] == 'admin';
    }

    public static function is_connected(): bool {
        return !empty($_SESSION['pseudo']) && !empty($_SESSION['id']);
    }
}
