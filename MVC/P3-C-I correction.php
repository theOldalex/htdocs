<?php

/********* Partie 3 ***************************************************************/
/********* C. Récupérer des données de requêtes (les superglobales) ***************/
/********* I. GET *****************************************************************/

/**
 * Faire un formulaire (en GET)
 * qui contient 2 champs : phrase et nombre
 * 
 * A la soumission du formulaire, 
 * vous affichez $nombre fois la phrase $phrase.
 * 
 * (PAS DE JAVASCRIPT)
 * 
 * (P.S. : Vérifiez que le nombre n'est pas trop grand...)
 */
?>
<form action="arrivee.php" method="get">
	<label for="phrase">Phrase</label><br>
	<input type="text" name="phrase" id="phrase"><br>

	<label for="nombre">Nombre</label><br>
	<input type="number" name="nombre" id="nombre" placeholder="Saisissez un nombre" min="1" max="1000" step="1"><br>

	<input type="submit" value="Envoyer">
</form>