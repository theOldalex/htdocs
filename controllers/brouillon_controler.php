<?php


/**
 * Brouillon
 */

function dump($nom, $variable) {
    echo $nom . '<br>' . PHP_EOL;
    echo '<pre>';
    var_dump($variable);
    echo '</pre>';
}


// dump('_REQUEST', $_REQUEST);
// dump('_SERVER', $_SERVER);
dump('_GET', $_GET);
dump('_POST', $_POST);
// dump('_FILES', $_FILES);
// dump('_COOKIE', $_COOKIE);
// dump('_SESSION', $_SESSION);

?>

<form action="brouillon_controller.php" method="get">
    <input required type="number" name="n" placeholder="saisissez un nombre" min="0" max="1000" step="1" width="200px">
    <input type="submit" value="Envoyer">
</form>

<?php

if (isset($_GET['n']) && is_numeric($_GET['n'])) {

    for ($i = 0; $i < $_GET['n']; $i++) {
        echo 'Je suis affiché.<br>' . PHP_EOL;
    }

} else {
    echo 'Imbécile tu ne sais même pas ce qu\'est un nombre.';
}
?>