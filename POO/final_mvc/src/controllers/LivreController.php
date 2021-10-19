<?php

require_once Config::DOSSIER_MODELS . '/LivreModel.php';

class LivreController {
    public static function afficherLesLivres() {

        $livreModel = new LivreModel;
        $livres = $livreModel->getAll();

        require_once Helper::view('livres/all');
    }

    public static function queDesErreurs() {
        $de = rand(1, 3);

        switch ($de) {
            case 1: throw new ServerErrorException('Test 500');
            case 2: throw new NotFoundException('Test 404');
            case 3: throw new AccessDeniedException('Test 403');
        }
    }
}
