<?php require DOSSIER_VIEWS . '/parties/header.php'; ?>

<h1><?= $article->titre ?></h1>

<div class="row">
	<div class="col-12">
		<img src="<?= $article->image ?>" alt="L'image qui représente l'article <?= $article->titre ?>" class="img-fluid">
	</div>

	<div class="col-12">
		<p>
			Publié le <?= $article->date_de_publication ?>

			<a href="<?= url('modifier-article&id=' . $article->id) ?>" class="text-warning mx-2">Modifier</a>
			<a href="<?= url('supprimer-article&id=' . $article->id) ?>" class="text-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
		</p>
	</div>

	<div class="col-12">
		<?= $article->contenu ?>
	</div>
</div>

<?php require DOSSIER_VIEWS . '/parties/footer.php'; ?>