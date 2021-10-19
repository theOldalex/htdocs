<?php {
	/**
	 * Je me connecte
	 */
	// Include the Simple ORM class
	require_once __DIR__ . '/../models/SimpleOrm.class.php';

	// Connect to the database using mysqli
	$conn = new mysqli('localhost', 'root', '');

	// Check connection errors
	if ($conn->connect_error)
		die(sprintf('Unable to connect to the database. %s', $conn->connect_error));

	// Tell Simple ORM to use the connection you just created.
	SimpleOrm::useConnection($conn, 'formawave_php_fil_rouge');
}

include __DIR__ . '/../models/Article.php'; 
//
{
	/**
	 * Le CREATE
	 */
	$article = new Article;

	$article->titre = 'Mon super article créé avec SimpleOrm';
	$article->contenu = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas dolores molestias, amet necessitatibus qui, porro earum corrupti vel odio iste officia officiis asperiores debitis quidem accusantium quis neque, suscipit dignissimos.';
	$article->image = 'https://picsum.photos/1500/1000';
	$article->image_copyright = 'Une super photo d\'un super photographe';
	$article->date = date('Y-m-d'); // Format de date propre à PHP

	$article->save();
}

$article_a_trouver = Article::retrieveByField('id', 3);
