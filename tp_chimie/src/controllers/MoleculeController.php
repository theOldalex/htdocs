<?php

require_once Config::DOSSIER_MODELS . '/MoleculeModel.php';

class MoleculeController {
    public static function afficherLesMolecules() {

        $MoleculeModel = new MoleculeModel;
        $molecules = $MoleculeModel->getAll();

        require_once Helper::view('molecules/liste-molecules');
    }

    public static function AfficherErreurs() {
        $de = rand(1, 3);

        switch ($de) {
            case 1: throw new ServerErrorException('Test 500');
            case 2: throw new NotFoundException('Test 404');
            case 3: throw new AccessDeniedException('Test 403');
        }
    }
}
