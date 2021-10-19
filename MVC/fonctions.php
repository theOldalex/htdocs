<?php

function resume(array $article): string {
	$resume = substr($article['contenu'], 0, 200);
	return $resume . '...';
}

function extrait(array $article): string {
	$extrait = '';

	for ($i = 0; $i < 200; $i++) {
		if (!isset($article['contenu'][$i])) break;
		$extrait .= $article['contenu'][$i];
	}

	return $extrait;
}

function comparer_articles(array $article_a, array $article_b): int {
	return strcmp($article_a['titre'], $article_b['titre']);
}

/**
 * Tri à bulle
 */
function trier_articles(array &$articles) {
	for ($i = 0; $i < sizeof($articles) - 1; $i++) {
		for ($j = 0; $j < sizeof($articles) - $i - 1; $j++) {
			if (comparer_articles($articles[$j], $articles[$j + 1]) > 0) {
				// On échange les positions
				$sauvegarde = $articles[$j];
				$articles[$j] = $articles[$j + 1];
				$articles[$j + 1] = $sauvegarde;
			}
		}
	}
}


function afficher_article(int $index) {
	include __DIR__ . '/variable_articles.php';

	if (!isset($articles[$index])) {
		echo 'Page non trouvée';
		die;
	}


	$html_title = $articles[$index]['titre'] . ' | Mon super blog';
	$on_est_sur_un_article = true;
	include __DIR__ . '/morceaux/header.php';
?>

	<img 
		src="<?php echo $articles[$index]['image']; ?>" 
		alt="<?php echo $articles[$index]['image_alt']; ?>" 
		class="banner" 
	/>
	<small><?php echo $articles[$index]['image_copyright']; ?></small>

	<h1 class="mb-4"><?php echo $articles[$index]['titre']; ?></h1>

	<p><?php echo $articles[$index]['contenu']; ?></p>

<?php include __DIR__ . '/morceaux/footer.php';
}
