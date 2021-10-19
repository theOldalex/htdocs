<?php

class Model {
    public $bdd;

    public function __construct() {
        $this->bdd = new PDO('mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8', Config::DB_USER, Config::DB_PASSWORD);
    }

    /**
     * Exécute une requête SQL en utilisant PDO
     * 
     * @param string $requete La requête à exécuter
     */
    public function sendQuery(string $requete) {
        $reponse = $this->bdd->query($requete);
        if (!$reponse) Helper::erreur500();

        return $reponse;
    }

    /**
     * Prépare une requête (en PDO) 
     * Et l'exécute en liant l'ensemble des "binds"
     * 
     * @param string $requete           La requête à préparer (avec des "?" ou des étiquettes)
     * @param array  $tableau_de_binds  Le tableau qui contient l'ensemble des "binds"
     */
    public function prepareAndExecute(string $requete, array $tableau_de_binds) {
        $stmt = $this->bdd->prepare($requete);
        $stmt->execute($tableau_de_binds);

        if (!$stmt) Helper::erreur500();

        return $stmt;
    }
}
