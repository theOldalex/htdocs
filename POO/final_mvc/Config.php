<?php

class Config {
    const DB_HOST = 'localhost';
    const DB_USER = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'bibliotheque';

    /**
     * Architecture de fichiers
     */
    const DOSSIER_MODELS = __DIR__ . '/src/models';
    const DOSSIER_VIEWS = __DIR__ . '/views';
    const DOSSIER_CONTROLLERS = __DIR__ . '/src/controllers';
    const DOSSIER_ASSETS = __DIR__ . '/assets';

    /**
     * Utile
     */
    const BASE_URL = 'http://localhost/poo/final_mvc';
    const MAX_FILE_SIZE = 5000000; // Taille max des fichiers (5 Mo)
}
