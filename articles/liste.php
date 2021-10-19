<?php require DOSSIER_VIEWS . '/parties/header.php'; ?>

<h1>Mes super articles</h1>

<div class="row">
	<form method="post" action="<?= url('liste-articles') ?>">
		<div class="form-group">
			<label for="search">Rechercher</label>
			<input type="text" class="form-control" name="search" id="search" aria-describedby="search-help" placeholder="Rechercher">
			<small id="search-help" class="form-text text-muted">Indiquez le titre de l'article que vous cherchez</small>
		</div>

		<button type="submit" class="btn btn-primary">Rechercher</button>
	</form>
</div>

<div class="row">
	<?php foreach ($tous_les_articles as $chaque_article) : ?>
		<div class="card col-5 mx-auto my-4">
			<div class="row no-gutters">
				<div class="col-md-4 justify-content-center">
					<img src="<?= $chaque_article->image ?>" class="card-img my-4" alt="L'image qui représente l'article <?= $chaque_article->titre ?>">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?= $chaque_article->titre ?></h5>
						<p class="card-text" style="height: 100px; overflow-y: hidden; text-overflow: ellipsis;"><?= substr($chaque_article->contenu, 0, 100) ?>...</p>

						<p class="card-text"><small class="text-muted"><?= $chaque_article->date_de_publication ?></small></p>

						<p class="card-text">
							<a href="<?= url('details-article&id=' . $chaque_article->id) ?>">Détails</a>

							<a href="<?= url('modifier-article&id=' . $chaque_article->id) ?>" class="text-warning mx-2">Modifier</a>
							<a href="<?= url('supprimer-article&id=' . $chaque_article->id) ?>" class="text-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php require DOSSIER_VIEWS . '/parties/footer.php'; ?>