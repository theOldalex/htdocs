<?php

function recuperer_tous_les_emprunts(): array {
	$bdd = connexion_bdd();

	$requete = 'SELECT 
					livre.titre,
					personne.nom AS nom_emprunteur,
					personne.prenom AS prenom_emprunteur,
					role.nom AS role_emprunteur,
					emprunt.id,
					emprunt.date_emprunt,
					emprunt.date_retour,
					auteur.nom AS nom_auteur,
					auteur.prenom AS prenom_auteur

				FROM `emprunt`
					JOIN livre ON emprunt.livre = livre.id
					JOIN auteur ON livre.auteur_id = auteur.id
					JOIN personne ON emprunt.abonne = personne.id
					LEFT OUTER JOIN role ON personne.role_id = role.id';
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$tous_les_emprunts = $reponse->fetchAll(PDO::FETCH_OBJ);

	return $tous_les_emprunts;
}

function verifier_emprunt_existe_dans_bdd(int $emprunt_id): bool {

	$bdd = connexion_bdd();

	$requete = "SELECT * FROM emprunt WHERE id = $emprunt_id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$emprunt = $reponse->fetch();

	if ($emprunt === false) return false;
	else return true;

	// return ($reponse->fetch() !== false);
}

function supprimer_un_emprunt_en_bdd(int $emprunt_id) {
	$bdd = connexion_bdd();

	$requete = "DELETE FROM emprunt WHERE id = $emprunt_id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();
}
