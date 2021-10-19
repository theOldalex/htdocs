<?php


/**
 * Un modèle = une classe
 * qui donne la "forme" de la donnée
 * 
 * et qui "extends" SimpleOrm
 * (qui "utilise" SimpleOrm)
 */
class Article {
	public $id;
	public $auteur;
	public $contenu;
	public $titre;
	public $dateDePublication;
	public $image;

	const MAX_LENGTH_CONTENU = 1500;

	public function resume() {
		return substr($this->contenu, 0, 200) . '...';
	}
}


$article = new Article;
$article2 = new Article;

echo Article::MAX_LENGTH_CONTENU;

echo SimpleOrm::FETCH_MANY;
echo PDO::FETCH_OBJ;









class Voiture {
	public $id;
	public $couleur;
	public $modele;
	public $marque;
	public $immat;
	public $vitesse = 220;

	public function rouler(string $destination) {
		echo 'Vroum vroum jusqu\'à ' . $destination . ' à la vitesse de ' . $this->vitesse . ' km/h';
	}

	public static function klaxonner() {
		echo 'Pouet pouet !';
	}

	public function avoirUnAccident(Voiture $autre_voiture) {
		echo 'Rapport de police : Le véhicule immatriculé ' . $this->immat
			. ' est rentré en collision par l\'arrière avec le véhicule immatriculé ' . $autre_voiture->immat;
	}
}


$dodoche = new Voiture;
$dodoche->vitesse = 70;
$dodoche->rouler('Calais');
$dodoche->klaxonner();
Voiture::klaxonner();
$dodoche->immat = '406-AL-75';

$porche = new Voiture;
$porche->vitesse = 270;
$porche->rouler('Berlin');
$porche->immat = 'AA-123-BB';

$porche->avoirUnAccident($dodoche);
