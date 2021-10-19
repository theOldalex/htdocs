<?php

/**
 * On utilise le fichier de SimpleOrm
 */
include __DIR__ . '/SimpleOrm.class.php';

/**
 * On se connecte à la BDD
 */
$connexion = new mysqli('localhost', 'root', '');

/**
 * On check qu'il n'y a pas d'erreur de connexion
 */
if (!empty($connexion->connect_error))
	die('Unable to connect to the database. ' . $connexion->connect_error);

	/**
	 * Je dis à SimpleOrm
	 * d'utiliser la connexion qu'on a faite
	 * 
	 * avec la BDD précisée
	 */
SimpleOrm::useConnection($connexion, 'formawave_php_fil_rouge');

/**
 * J'inclus mon modèle
 */
include __DIR__ . '/Article.php';



/**
 * Je peux utiliser mon modèle pour mon CRUD
 */

/**
 * Pour le CREATE
 */
$article = new Article;	// Nouvel article

// Je remplis l'article
$article->titre = 'Nouvel article créé avec les DWWM11';
$article->contenu = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Officia eum nemo necessitatibus cumque eveniet laborum quaerat incidunt aliquam recusandae ipsa nam optio accusamus atque totam asperiores voluptas, culpa veniam repellat.';
$article->image = 'https://picsum.photos/1500/1200';
$article->image_copyright = '&copy; Une super image';
$article->date = date('Y-m-d');

// Je sauvegarde
$article->save();

echo '<pre>';
var_dump($article);
echo '</pre>';


/**
 * Pour le RETRIEVE
 */ 
$article = Article::retrieveByPK(1); // J'utilise le modèle pour récupérer l'article 1
$articles = Article::all();	// J'utilise le modèle pour récupérer TOUS les articles


/**
 * Pour le UPDATE
 * 
 * On récupère un article à modifier
 * (on utilise le RETRIEVE)
 */
$article_a_modifier = Article::retrieveByPK(2); // Je récupère l'article à modifier

// Je fais mes modifs
$article_a_modifier->titre = 'Titre modifié avec succès';
$article_a_modifier->date = date('Y-m-d');

// Je sauvegarde
$article_a_modifier->save();


/**
 * Pour le DELETE
 * 
 * On récupère un article à supprimer
 * (on utilise le RETRIEVE)
 */
$article_a_supprimer = Article::retrieveByPK(3); // Je récupère l'article à supprimer

// Je le supprimer
$article_a_supprimer->delete();
