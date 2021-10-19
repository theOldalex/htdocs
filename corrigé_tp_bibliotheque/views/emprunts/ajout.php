<?php require DOSSIER_VIEWS . '/parts/header.php'; ?>

<h1>Ajout d'un emprunt</h1>


<form action="<?= url('ajouter-emprunt-handler') ?>" method="post">
	<div class="form-group">
		<label for="date_retour">Date de retour</label>
		<input type="date" class="form-control" name="date_retour" id="date_retour" placeholder="Date de retour">
	</div>

	<div class="form-group">
		<label for="personne_id">Personne</label>
		<select class="form-control" name="personne_id" id="personne_id">
			<?php foreach ($personnes as $une_personne) : ?>
				<option value="<?= $une_personne->id ?>">
					<?= $une_personne->prenom ?> <?= strtoupper($une_personne->nom) ?>
				</option>
			<?php endforeach; ?>
		</select>
	</div>

	<div class="form-group">
		<label for="livre_id">Livre</label>
		<select class="form-control" name="livre_id" id="livre_id">
			<?php foreach ($livres as $un_livre) : ?>
				<option value="<?= $un_livre->id ?>">
					<?= $un_livre->titre ?> (<?= $un_livre->auteur_prenom ?> <?= strtoupper($un_livre->auteur_nom) ?>)
				</option>
			<?php endforeach; ?>
		</select>
	</div>

	<button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php require DOSSIER_VIEWS . '/parts/footer.php'; ?>