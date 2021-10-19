<?php require DOSSIER_VIEWS . '/parts/header.php'; ?>

<h1>Ajout d'un livre</h1>


<form action="<?= url('ajouter-livre-handler') ?>" method="post">
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name="titre" id="titre" placeholder="Titre">
	</div>

	<div class="form-group">
		<label for="date_publication">Date de publication</label>
		<input type="date" class="form-control" name="date_publication" id="date_publication" placeholder="Date de publication">
	</div>

	<div class="form-group">
		<label for="isbn">ISBN</label>
		<input type="text" class="form-control" name="isbn" id="isbn" placeholder="ISBN">
	</div>

	<div class="form-group">
		<label for="stock">Stock</label>
		<input type="number" class="form-control" name="stock" id="stock" placeholder="Stock">
	</div>

	<div class="form-group">
		<label for="auteur_id">Auteur</label>
		<select class="form-control" name="auteur_id" id="auteur_id">
			<?php foreach ($auteurs as $un_auteur) : ?>
				<option value="<?= $un_auteur->id ?>">
					<?= $un_auteur->prenom ?> <?= strtoupper($un_auteur->nom) ?>
				</option>
			<?php endforeach; ?>
		</select>
	</div>

	<button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php require DOSSIER_VIEWS . '/parts/footer.php'; ?>