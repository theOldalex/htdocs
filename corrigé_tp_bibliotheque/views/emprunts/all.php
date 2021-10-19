<?php require DOSSIER_VIEWS . '/parts/header.php'; ?>

<h1>Les emprunts</h1>

<div class="card-columns">
	<?php foreach ($emprunts as $un_emprunt) : ?>

		<div class="card">
			<div class="card-body">
				<h4 class="card-title"><?= $un_emprunt->titre ?></h4>
				<p class="card-text">
					Livre écrit par <?= $un_emprunt->prenom_auteur ?> <?= strtoupper($un_emprunt->nom_auteur) ?>.
				</p>
				<p class="card-text">
					Livre emprunté du <?= $un_emprunt->date_emprunt ?> au <?= $un_emprunt->date_retour ?>
					par <?= $un_emprunt->prenom_emprunteur ?> <?= strtoupper($un_emprunt->nom_emprunteur) ?>
					<?php if (!empty($un_emprunt->role_emprunteur)) : ?>
						(<?= $un_emprunt->role_emprunteur ?>)
						<?php endif; ?>.
				</p>
				<p class="card-text">
					<a href="<?= url('supprimer-emprunt&id=' . $un_emprunt->id) ?>" class="text-danger" onclick="return confirm('Êtes-vous sûr ?')">Supprimer</a>
				</p>
			</div>
		</div>

	<?php endforeach; ?>
</div>


<?php require DOSSIER_VIEWS . '/parts/footer.php'; ?>