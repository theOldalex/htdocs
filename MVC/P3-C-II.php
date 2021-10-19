<?php

/********* Partie 3 ***************************************************************/
/********* C. Récupérer des données de requêtes (les superglobales) ***************/
/********* I. POST ****************************************************************/

/**
 * Faire un formulaire (en POST)
 * qui contient 2 champs : identifiant et mot de passe.
 * 
 * A la soumission du formulaire,
 * On vérifie que l'identifiant et le mot de passe 
 * correspondent à ceux que l'on attend (stockés dans des variables).
 * 
 * S'ils correspondent, on affiche une page de succès, 
 * sinon une page d'erreur.
 * 
 * (PAS DE JAVASCRIPT)
 */


function dump($user, $variable) {
    echo $user. '<br>' . PHP_EOL;
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}



dump('_GET', $_GET);
dump('_POST', $_POST);
$user="Alex";
$password="12345678"
?>

<form action="P3-C-II.php" method="get">
<input required type="texte" name="txt" placeholder="saisissez un pseudo !" width="200px">
    <input required type="password" name="mdp" placeholder="saisissez un mot de passe !" width="200px">
    <input type="submit" value="Envoyer">
</form>

<?php

if (isset($_GET['mdp']) && is_numeric($_GET['mdp'])) {

    for ($password = 12345678; $password < $_GET['mdp']; $i++) {
        echo $user="Identifiants corrects <br>" . PHP_EOL;
    }

}else {
    echo 'Identifiants incorrects <br>';
}
?>