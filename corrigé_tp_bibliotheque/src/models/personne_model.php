<?php

function recuperer_toutes_les_personnes() {
	$bdd = connexion_bdd();

	$reponse = $bdd->query('SELECT * FROM personne');

	if (!$reponse) erreur500();

	$toutes_les_personnes = $reponse->fetchAll(PDO::FETCH_OBJ);

	return $toutes_les_personnes;
}

function verifier_personne_existe_dans_bdd(int $personne_id): bool {
	$bdd = connexion_bdd();

	$requete = "SELECT * FROM personne WHERE id = $personne_id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$auteur = $reponse->fetch();

	if ($auteur === false) return false;
	else return true;
}


function inserer_emprunt(
	int $personne_id,
	int $livre_id,
	string $date_retour
): int {
	$bdd = connexion_bdd();

	$requete = "INSERT INTO emprunt 
					(abonne, livre, date_emprunt, date_retour) 
				VALUE 
					($personne_id, $livre_id, CURRENT_DATE, '$date_retour')";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	return $bdd->lastInsertId();
}
