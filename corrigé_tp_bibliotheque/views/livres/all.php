<?php require DOSSIER_VIEWS . '/parts/header.php'; ?>

<h1>Les livres</h1>

<div class="card-columns">
	<?php foreach ($livres as $un_livre) : ?>

		<div class="card">
			<div class="card-body">
				<h4 class="card-title"><?= $un_livre->titre ?></h4>
				<p class="card-text">
					Paru le <?= $un_livre->date_publication ?>. <br>
					Ecrit par <?= $un_livre->auteur_prenom ?> <?= strtoupper($un_livre->auteur_nom) ?>.
				</p>
				<p class="card-text">
					<a href="<?= url('supprimer-livre&id=' . $un_livre->id) ?>" class="text-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
				</p>
			</div>
		</div>

	<?php endforeach; ?>
</div>


<?php require DOSSIER_VIEWS . '/parts/footer.php'; ?>