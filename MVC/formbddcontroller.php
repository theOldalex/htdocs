<?php 
include __DIR__ . '/SimpleOrm.php';



$connexion = new mysqli('localhost', 'root', '');

if (!empty($connexion->connect_error))
	die('Unable to connect to the database. ' . $connexion->connect_error);

	
SimpleOrm::useConnection($connexion, 'test_annuaire_telephonique.sql');

include_once __DIR__ . '/formbddcontroller.php';
?>

<form action="formbddcontroller.php" method="get">
Prénom : <input required type="texte" name="txt"  placeholder="saisissez un prénom !" width="200px"><br>
Nom : <input required type="texte" name="txt" placeholder="saisissez un nom !" width="200px"><br>
Numéro de tél : <input required type="number" strlen="5"  name="num" placeholder="ajoutez votre numéro de téléphone !" width="200px"><br>
    <input type="submit" value="Envoyer"><br>
    
</form>

<?php



?>