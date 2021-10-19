<pre>
<?php


/**
 * N.B. : 
 * Chemin / Emplacement / Path = "l'adresse physique" d'un fichier sur un disque dur
 * 		Ex : C:\wamp\www\chemin\vers\le\fichier.extension
 * 
 * URL = "L'adresse internet" d'un fichier sur un site
 * 		Ex : http://localhost/chemin/vers/le/fichier.extension
 */





/**
 * Upload de fichier
 */
var_dump($_FILES);

if (
	// On fait nos vérifications
	// On vérifie qu'il existe
	// On vérifie la taille
	// On vérifie le type
	// On vérifie les erreurs d'upload
	$_FILES['image']['error'] == UPLOAD_ERR_OK
) {


	/**
	 * On veut déplacer le fichier
	 * De son emplacement temporaire
	 * A son nouvel emplacement
	 * 
	 * Donc on doit "écrire" son nouvel emplacement
	 */
	$ancien_emplacement = $_FILES['image']['tmp_name'];

	$extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
	$nouveau_nom = 'test-' . uniqid() . '.' . $extension;
	$nouvel_emplacement = __DIR__ . '/assets/img/' . $nouveau_nom;

	$nouvelle_url = 'http://localhost2/formawave/tp/2_dvlp_site_web_php/dwwm11/assets/img/' . $nouveau_nom;
	// On déplace le fichier uploadé
	if (move_uploaded_file($ancien_emplacement, $nouvel_emplacement)) {
		echo 'Upload OK<br>';
		echo '<img src="' . $nouvelle_url . '" />';
	} else {
		echo 'Upload pas OK';
	}
} else {
	echo 'erreur de téléchargement';
}

/**
 * Fonctions de manipulation de fichiers
 * https://www.php.net/manual/fr/ref.filesystem.php
 */

/**
 * Copier un fichier
 */
for ($i = 0; $i < 10; $i++) {
	copy($nouvel_emplacement, __DIR__ . '/assets/img/copy/copie-' . $i . '.' . $extension);
}

/**
 * Créer un fichier
 */
touch(__DIR__ . '/assets/fichier.txt');

/**
 * Créer un dossier
 */
mkdir(__DIR__ . '/assets/test');

/**
 * Supprimer un dossier
 */
rmdir(__DIR__ . '/assets/img/copy');

/**
 * Ecrire dans un fichier
 * (le créer s'il existe pas)
 */
file_put_contents(__DIR__ . '/assets/fichier.txt', 'Lorem ipsum');

/**
 * Lire un fichier
 */
$texte = file_get_contents(__DIR__ . '/assets/fichier.txt');

/**
 * Supprimer le fichier
 */
// unlink($nouvel_emplacement);
unlink('Le/chemin/du/fichier.ext'); // Ne fonctionne évidemment pas car "Le/chemin/du/fichier.ext" n'est pas un fichier
?>
</pre>