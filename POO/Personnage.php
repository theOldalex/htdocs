<?php

/**
 * Créez une classe PHP qui représente un personnage de jeu vidéo (type RPG)
 * Un personnage est caractérisé par un pseudo, des points de vie, sa force 
 * (ainsi que tous les points de caractéristique que vous voudrez)
 * 
 * Les actions d'un personnage consistent en : 
 * 		- Frapper (infliger des dégats à un autre personnage en fonction de sa force)
 * 		- Chevaucher un Cheval (ce qui appelle la méthode chevauche de la classe Cheval)
 */
require_once __DIR__ . '/Cheval.php';

class Personnage {
	public $pseudo;
	public $pv = 100;
	public $force;
	public $age;
	public $guilde;

	public function frapper(Personnage $quelqu_un) {

		if ($quelqu_un->guilde == $this->guilde) {
			echo 'On tape pas les copains !<br>';
			return;
		}

		// if ($this->pseudo == 'Chuck Norris') unset($quelqu_un);

		$degats = $this->force - $this->age;
		$quelqu_un->prendreDesDegats($degats);
	}

	public function bouleDeFeu(Personnage $quelqu_un) {
		if ($quelqu_un->guilde == $this->guilde) {
			echo 'On tape pas les copains !<br>';
			return;
		}

		$degats = $this->force - $this->age;
		$quelqu_un->prendreDesDegats($degats);
	}

	public function prendreDesDegats(int $combien) {
		$de = rand(1, 100); // Un dé 100
		if ($de < 10) echo $this->pseudo . ' évite les dégats en esquivant.<br>';
		else {
			echo $this->pseudo . ' perd ' . $combien . ' PV.<br>';
			$this->pv -= $combien;

			if ($this->pv <= 0) echo $this->pseudo . ' est mort. RIP.<br>';
		}
	}

	public function chevaucher(Cheval $canasson) {
		if (rand(0, 1)) $canasson->prendreLaFuite();
		else $canasson->etreChevauche($this);
	}
}

?>