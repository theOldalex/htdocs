<?php
$html_title = 'Mes super articles triés par titre | Mon super blog';
$on_est_sur_un_article = false;

include __DIR__ . '/morceaux/header.php';
include __DIR__ . '/fonctions.php';
include __DIR__ . '/variable_articles.php';

// uasort($articles, 'comparer_articles');
trier_articles($articles);
?>

<h1>Mes super articles triés par titre</h1>

<a class="btn btn-primary" href="liste-articles.php">Non triés</a>

<div class="list-group my-4">

    <?php foreach ($articles as $un_article) { ?>

        <article class="list-group-item list-group-item-action">
            <div class="d-flex w-100 justify-content-between">
                <h2 class="mb-1"><?php echo $un_article['titre']; ?></h2>
                <small class="text-muted"><?php echo $un_article['date']; ?></small>
            </div>
            <p class="mb-1"><?php echo resume($un_article); ?></p>
            <small class="text-muted"><a href="<?php echo $un_article['lien'] ?>">Lire l'article.</a></small>
        </article>

    <?php } ?>

</div>
<?php include __DIR__ . '/morceaux/footer.php'; ?>