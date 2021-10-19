<?php

/********* Partie 2 ****************************/
/********* D. Les fonctions ********************/
/********* III. Passage d'arguments ************/

/* 1)

	Ecrivez une fonction 
	qui calcule le nombre de jours écoulés depuis une date
	fournie en paramètre (3 paramètres : jour, mois, année)

	On pourra, pour se simplifier la vie, oublier le cas des années bissextiles

	P.S. : N'oubliez pas de checker les paramètres !
*/


function modification(&$variable) {	
	// Notez le &
$variable = 3;
}

$variable = 32;
modification($variable);	
// $variable vaut à présent 3 !


?>

