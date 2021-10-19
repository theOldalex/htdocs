<?php

/**
 * Cette fonction va chercher tous les livres de la BDD
 * et nous les renvoie dans un tableau d'objets
 */
function recuperer_tous_les_livres(): array {

	// Etape 1 : connexion
	$bdd = connexion_bdd();

	// Etape 2 : requête
	$requete = 'SELECT 
					livre.id, 
					livre.titre, 
					livre.date_publication,
					auteur.nom AS auteur_nom,
					auteur.prenom AS auteur_prenom

				FROM livre
					JOIN auteur ON livre.auteur_id = auteur.id';

	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	// Etape 3 : lire la réponse
	$tous_mes_livres = $reponse->fetchAll(PDO::FETCH_OBJ); // Un tableau de livres (qui sont des objets)

	return $tous_mes_livres;
}

/**
 * Cette fonction insère un nouveau livre dans la BDD
 * et renvoie son ID
 */
function inserer_un_livre(
	string $titre,
	string $isbn,
	int $auteur_id,
	string $date_publication,
	int $stock
): int {
	// Etape 1 : connexion
	$bdd = connexion_bdd();

	// Etape 2 : la requête
	$requete = "INSERT INTO `livre` (`titre`, `isbn`, `auteur_id`, `date_publication`, `stock`) 
				VALUES (
					'$titre',
					'$isbn',
					$auteur_id,
					'$date_publication',
					$stock
				)";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	// Je renvoie le nouvel id qui a été créé
	return $bdd->lastInsertId();
}

function verifier_livre_existe_dans_bdd(int $livre_id): bool {
	$bdd = connexion_bdd();

	$requete = "SELECT * FROM livre WHERE id = $livre_id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$auteur = $reponse->fetch();

	if ($auteur === false) return false;
	else return true;
}

function supprimer_livre_en_bdd($livre_id) {
	$bdd = connexion_bdd();

	// Une manière d'être sûr que le livre n'est pas emprunté
	// $requete = "DELETE FROM emprunt WHERE livre = $livre_id";
	// $reponse = $bdd->query($requete);
	// if (!$reponse) erreur500();

	$requete2 = "DELETE FROM livre WHERE id = $livre_id";
	$reponse2 = $bdd->query($requete2);

	if (!$reponse2) erreur500();
}

/**
 * Renvoie vrai si le livre n'est PAS emprunté
 */
function verifier_livre_pas_emprunte($livre_id): bool {
	$bdd = connexion_bdd();
	$requete = "SELECT * FROM emprunt WHERE livre = $livre_id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$nombre = $reponse->fetch();

	if ($nombre !== false) return false;
	else return true;
}