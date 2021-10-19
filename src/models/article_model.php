<?php


function recuperer_tous_les_articles() {
	// 1 : connexion 
	$bdd = connexion_bdd();

	// 2 : la requête
	$requete = 'SELECT * FROM article';
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	// 3 : lire la réponse
	$articles = $reponse->fetchAll(PDO::FETCH_OBJ);

	return $articles;
}

function recuperer_un_article($id) {
	$bdd = connexion_bdd();

	$requete = 'SELECT * FROM article WHERE id = ' . $id;
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();

	$article = $reponse->fetch(PDO::FETCH_OBJ);

	return $article;
}

function inserer_article($titre, $contenu, $image) {
	$bdd = connexion_bdd();

	$requete = "INSERT INTO article (titre, contenu, image) VALUE ('$titre', '$contenu', '$image')";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();
}

function modifier_un_article($id, $titre, $contenu, $image) {
	$bdd = connexion_bdd();

	$requete = "UPDATE article 
				SET titre = '$titre',
					contenu = '$contenu',
					image = '$image'
				WHERE id = $id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();
}

function supprimer_un_article($id) {
	$bdd = connexion_bdd();

	$requete = "DELETE FROM article WHERE id = $id";
	$reponse = $bdd->query($requete);

	if (!$reponse) erreur500();
}
