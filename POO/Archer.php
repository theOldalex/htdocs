<?php

/**
 * Définissez la classe Archer, qui est un genre de Personnage
 */



class  Archer {
	public $nom;
	public $vitesse_de_tir = 3;
    public $nombre_de_fleche = 7;
	public $degat = 10;


    public function tirer() {
		if ($this->nombre_de_fleche > 0) {
			$this->nombre_de_fleche -= 1;
			echo $this->nom . ' est en train de tirer des fleches ! ' . '<br>';
        } else {
			echo $this->nom . ' n/a plus de fleches ' . '<br>';
		}


    }
    

}


    

    ?>