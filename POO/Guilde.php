<?php


/**
 * Créez une classe PHP qui représente une guilde
 * Une guilde est caractérisée par son nom, et les Personnages qui la composent
 * La seule action qu'une guilde peut "accomplir" c'est accueillir un nouveau personnage
 */
require_once __DIR__ . '/Personnage.php';

class Guilde {
	public $nom;
	public $membres = [];

	public function accueillir(Personnage $quelqu_un) {
		$this->membres[] = $quelqu_un;
		$quelqu_un->guilde = $this->nom;

		echo $this->nom . ' est ravie d\'accueillir ' . $quelqu_un->pseudo . '.<br>';
	}
}

?>