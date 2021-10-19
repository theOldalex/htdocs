<?php include view('parts/header'); ?>

<h1><?= $produit->nom ?></h1>

<div class="row">
	<div class="col-4">
		<img src="<?= $produit->image ?>" class="img-fluid rounded" alt="L'image du produit">
	</div>
	<div class="col-8 px-4">
		<dl>
			<dt>Prix</dt>
			<dd><?= $produit->prix ?>&nbsp;€</dd>

			<dt>Stock disponible</dt>
			<dd><?= $produit->stock ?></dd>
		</dl>
	</div>
	<p class="col-12"><?= $produit->description ?></p>
</div>

<?php include view('parts/footer'); ?>