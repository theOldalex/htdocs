<?php require DOSSIER_VIEWS . '/parties/header.php'; ?>

<h1>Ajouter un article</h1>

<form method="post" action="<?= url('ajouter-article-handler') ?>">
	<div class="form-group row">
		<label for="titre" class="col-12 col-form-label">Titre</label>
		<div class="col-12">
			<input type="text" required autofocus class="form-control" name="titre" id="titre" placeholder="Titre">
		</div>
	</div>

	<div class="form-group row">
		<label for="image" class="col-12 col-form-label">Image</label>
		<div class="col-12">
			<input type="url" required class="form-control" name="image" id="image" placeholder="Image">
		</div>
	</div>

	<div class="form-group">
		<label for="contenu">Contenu</label>
		<textarea class="form-control" name="contenu" id="contenu" rows="3" placeholder="Contenu"></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Ajouter un article</button>
</form>

<?php require DOSSIER_VIEWS . '/parties/footer.php'; ?>