<?php

require_once Config::DOSSIER_MODELS . '/Model.php';

class MoleculeModel extends Model {
    public function getAll() {
        $requete = 'SELECT * FROM molecule WHERE id';
                    
        $reponse = $this->sendQuery($requete);

        $all_molecules = $reponse->fetchAll(PDO::FETCH_OBJ);

        return $all_molecules;
    }

    public function getOne($id) {
        $requete = 'SELECT * FROM molecule WHERE id = ' . $_GET['id'];
        $reponse = $this->prepareAndExecute($requete, [$id]);

        $molecule = $reponse->fetch(PDO::FETCH_OBJ);

        return $molecule;
    }

    public function create(string $nom, string $formule) {
        $requete = 'INSERT INTO molecule (nom, formule) VALUE (?, ?)';

        $this->prepareAndExecute($requete, [
            $nom, 
            $formule
            
        ]);
    }

    
}
