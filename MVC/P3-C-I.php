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


const IDENTIFIANT = 'Alex';
const MDP = '12345678';


if (!empty($_POST)) {
    // Ce n'est pas la 1re fois que la personne passe sur la page
    // ($_POST n'est pas vide, donc il a déjà envoyé qqchose)

    if (
        isset($_POST['identifiant'], $_POST['mdp'])

        && $_POST['identifiant'] === IDENTIFIANT
        && $_POST['mdp'] === MDP
    ) {
        echo 'Hello, ' . IDENTIFIANT;
    } else {
        echo 'Désolé, ' . $_POST['identifiant'] . ', Accès interdit.';
    }

}

?>
<form action="#" method="post">
    <input type="text" name="identifiant" id="osef_identifiant" required><br>
    <input type="password" name="mdp" id="osef_mdp" required><br>

    <input type="submit" name="bouton" value="Envoyer">
</form>
