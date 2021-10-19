<?php
class Logement {
    public $superficie; // Cette propriété sera héritée
    protected $nbPieces; // Cette propriété sera héritée
    private $prix; // Cette propriété ne sera PAS héritée

    const SURFACE_TATAMI = 1.65;

    /**
     * Constructeur
     * 
     * Méthode magique 
     * = méthode qui est appelée automatiquement par PHP quand il en a besoin
     * 
     * Appelée à la "construction" de l'objet
     * = à l'instanciation
     */
    public function __construct(int $nbPieces, int $superficie, int $prix) {
        echo 'C\'est un ' . $nbPieces . ' pièces de ' . $superficie . ' m² à ' . $prix . ' € / mois.';

        $this->superficie = $superficie;
        $this->nbPieces = $nbPieces;
        $this->prix = $prix;
    }

    public function chauffer() {
        echo 'Votre facture de chauffage va exploser grâce à moi.';
    }

    public function sEclairer() {
        echo 'Votre facture d\'électricité va exploser grâce à moi.';
    }

    public function sEffondrer($nb_morts) {
        echo 'Breaking news : une maison s\'est effondrée, causant la mort de ' . $nb_morts . ' personnes. Votre reporter sur place.';
    }

    public function getSurfaceEnTatami() {
        /**
         * Pour accéder à une constante de la classe actuelle
         * J'utilise le mot clef "static"
         */
        $nbTatami = $this->superficie / static::SURFACE_TATAMI;

        echo '<br>Ce logement fait ' . $this->superficie . ' m², ce qui équivaut à ' . $nbTatami . ' tatami.';

        return $nbTatami;
    }

    /**
     * Ceci est un "getter"
     * Ou encore un "accesseur"
     * 
     * Par convention, on met tout en private / protected
     * Et on utilise le getter pour accéder aux données
     */
    public function getPrix() {
        return $this->prix;
    }

    /**
     * Ceci est un "setter"
     * Ou encore un "mutateur"
     * 
     * Par convention, on met tout en private / protected
     * Et on utilise le setter pour modifier les données
     */
    public function setPrix($prix) {
        $this->prix = $prix;
    }
}

class Maison extends Logement {
    public function __construct(int $nbPieces, int $superficie, int $prix) {
        echo 'Et une nouvelle maison de construite !';

        parent::__construct($nbPieces, $superficie, $prix);
    }
}


class Appartement extends Logement {

    public function __construct(int $nbPieces, int $superficie, int $prix) {
        echo 'Et un nouvel appart\' de construit !';

        parent::__construct($nbPieces, $superficie, $prix);
    }

    public function lesVoisinsMeLesBrisent() {
        echo 'Vous allez vous la fermer, bande de gueux !';
    }
}


$maison = new Maison(2, 53, 700);

$maison->superficie = 1500; // Possible car superficie est "public"


// $maison->nbPieces = 3; // Impossible car nbPieces est "protected"
// $maison->prix = 15000; // Impossible car prix est "private"

echo '<pre>';
var_dump($maison);
echo '</pre>';

$maison->chauffer();

// $maison->prix = 350;
$maison->setPrix(350);

echo $maison->getPrix();

$maison->getSurfaceEnTatami();
