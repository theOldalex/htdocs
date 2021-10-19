<?php

class HomeController {
    public static function afficherAccueil() {
        require_once Helper::view('home');
    }
}
