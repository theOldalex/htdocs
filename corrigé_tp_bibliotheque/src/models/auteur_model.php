<?php

/**
 * Cette fonction sert à vérifier 
 * qu'un ID d'auteur existe dans la BDD
 * 
 * Idée : Si l'ID existe, je peux récupérer un auteur avec cet ID
 */
function verifier_auteur_existe_dans_bdd($auteur_id): bool {
	$bdd = connexion_bdd();

	$requete = "SELECT * FROM auteur WHERE id = $auteur_id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$auteur = $reponse->fetch();

	if ($auteur === false) return false;
	else return true;
}

function recuperer_tous_les_auteurs() {
	$bdd = connexion_bdd();

	$requete = 'SELECT * FROM auteur';
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$tous_les_auteurs = $reponse->fetchAll(PDO::FETCH_OBJ);

	return $tous_les_auteurs;
}
