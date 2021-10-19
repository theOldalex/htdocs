<?php include view('parts/header'); ?>

<h1>La liste des produits</h1>

<div class="row">
	<?php foreach ($produits as $produit) : ?>
		<div class="card mb-3 col-5 mx-2 p-2">
			<div class="row no-gutters">
				<div class="col-md-4">
					<img class="card-img" src=" <?= $produit->image ?>" alt="L'image du produit">
				</div>
				<div class="col-md-8">
					<div class="card-body">
						<h5 class="card-title"><?= $produit->nom ?></h5>
						<p class="card-text"><?= $produit->prix ?>&nbsp;€ (<?= $produit->stock ?> disponibles)</p>
						<p class="card-text">
							<a href="<?= url('details-produit&id=' . $produit->id) ?>">Voir les détails</a>

							<?php if (is_admin()) : ?>
								<a href="<?= url('modifier-produit&id=' . $produit->id) ?>" class="my-2 text-warning">Modifier</a>

								<a href="<?= url('supprimer-produit&id=' . $produit->id) ?>" class="text-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">Supprimer</a>
							<?php endif; ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>

<?php include view('parts/footer'); ?>