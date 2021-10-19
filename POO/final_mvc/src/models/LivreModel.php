<?php

require_once Config::DOSSIER_MODELS . '/Model.php';

class LivreModel extends Model {
    public function getAll() {
        $requete = 'SELECT 
                    livre.*, 
                    auteur.nom AS auteur_nom,
                    auteur.prenom AS auteur_prenom
                FROM livre 
                JOIN auteur ON livre.auteur_id = auteur.id';
        $reponse = $this->sendQuery($requete);

        $tous_les_livres = $reponse->fetchAll(PDO::FETCH_OBJ);

        return $tous_les_livres;
    }

    public function getOne($id) {
        $requete = 'SELECT * FROM livre WHERE id = ?';
        $reponse = $this->prepareAndExecute($requete, [$id]);

        $livre = $reponse->fetch(PDO::FETCH_OBJ);

        return $livre;
    }

    public function create(string $titre, string $isbn, int $auteur_id, string $date_publication, int $stock) {
        $requete = 'INSERT INTO livre (titre, isbn, auteur_id, date_publication, stock) VALUE (?, ?, ?, ?, ?)';

        $this->prepareAndExecute($requete, [
            $titre, 
            $isbn, 
            $auteur_id, 
            $date_publication, 
            $stock
        ]);
    }

    public function update($id/* ... */) {
    }

    public function delete($id) {
    }

    public function checkValue(/* ... */) {
    }

    public function checkExists($id) {
    }

    public function searchBook($recherche) {
        $requete = 'SELECT * FROM livre WHERE titre LIKE ?';

        $reponse = $this->prepareAndExecute($requete, ['%' . $recherche . '%']);

        $resultats_recherche = $reponse->fetchAll();

        return $resultats_recherche;
    }
}
