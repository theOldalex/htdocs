<?php

/**
 * La classe PHP qui représente un cheval
 * 
 * Un cheval est caractérisé par sa vitesse et son endurance
 * Les actions d'un cheval se résument à :
 * 		- Galoper
 * 		- Prendre la fuite (les lâches)
 *      - Chevaucher
 */
require_once __DIR__ . '/Personnage.php';

class Cheval {
	public $nom;
	public $vitesse = 25;
	public $endurance = 100;

	public function galoper() {
		if ($this->endurance > 0) {
			$this->endurance -= 5;
			echo $this->nom . ' galope à ' . $this->vitesse . ' km/h.<br>';
		} else {
			echo $this->nom . ' ne peut pas galoper car il est épuisé.<br>';
		}
	}

	public function prendreLaFuite() {
		echo $this->nom . ' prend la fuite en abandonnant son cavalier (le lâche).<br>';
	}

	public function etreChevauche(Personnage $quelqu_un) {
		if ($this->endurance > 0) {
			$this->endurance -= 5;
			echo $this->nom . ' chevauche avec son cavalier ' . $quelqu_un->pseudo . '.<br>';
		} else {
			echo $this->nom . ' ne peut pas chevaucher car il est épuisé.<br>';
		}
	}

	public function seReposer() {
		echo $this->nom . ' se repose.<br>';
		$this->endurance += 10;

		if ($this->endurance > 100) $this->endurance = 100;
	}
}
 ?>