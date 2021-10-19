<?php require DOSSIER_VIEWS . '/parties/header.php'; ?>

<h1>Modifier une article</h1>

<form method="post" action="<?= url('modifier-article-handler&id=' . $article->id) ?>">
	<div class="form-group row">
		<label for="titre" class="col-12 col-form-label">Titre</label>
		<div class="col-12">
			<input type="text" required autofocus class="form-control" name="titre" id="titre" placeholder="Titre" value="<?= $article->titre ?>">
		</div>
	</div>

	<div class="row">
		<div class="col-3"><img src="<?= $article->image ?>" class="img-fluid"></div>
		<div class="col-9">

			<div class="form-group row">
				<label for="image" class="col-12 col-form-label">Image</label>
				<div class="col-12">
					<input type="url" class="form-control" name="image" id="image" placeholder="Image" value="<?= $article->image ?>">
				</div>
			</div>
		</div>
	</div>

	<div class="form-group">
		<label for="contenu">Contenu</label>
		<textarea class="form-control" name="contenu" id="contenu" rows="3" placeholder="Contenu"><?= $article->contenu ?></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Modifier un article</button>
</form>

<?php require DOSSIER_VIEWS . '/parties/footer.php'; ?>