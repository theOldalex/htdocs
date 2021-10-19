<?php include view('parts/header'); ?>

<h1>Modifier un produit</h1>

<form method="post" action="<?= url('modifier-produit-handler&id=' . $produit->id) ?>" enctype="multipart/form-data">
	<div class="form-group row">
		<label for="nom" class="col-12 col-form-label">Nom</label>
		<div class="col-12">
			<input type="text" class="form-control" name="nom" id="nom" value="<?= $produit->nom ?>" placeholder="Nom" required autofocus>
		</div>
	</div>

	<div class="row">
		<div class="col-2">
			<img src="<?= $produit->image ?>" class="img-fluid thumbnail">
		</div>

		<div class="col-10">
			<div class="form-group row">
				<label for="image" class="col-12 col-form-label">Image</label>
				<div class="col-12">
					<input type="file" class="form-control" name="image" id="image" placeholder="Image">
				</div>
			</div>
		</div>
	</div>

	<div class="form-group row">
		<label for="prix" class="col-12 col-form-label">Prix</label>
		<div class="col-12">
			<input type="number" min="0.01" step="0.01" class="form-control" name="prix" value="<?= $produit->prix ?>" id="prix" placeholder="Prix" required>
		</div>
	</div>

	<div class="form-group row">
		<label for="stock" class="col-12 col-form-label">Stock</label>
		<div class="col-12">
			<input type="number" min="0" step="1" class="form-control" name="stock" value="<?= $produit->stock ?>" id="stock" placeholder="Stock" required>
		</div>
	</div>

	<div class="form-group">
		<label for="description">Description</label>
		<textarea class="form-control" name="description" id="description" rows="3" required><?= $produit->description ?></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Modifier ce produit</button>
</form>

<?php include view('parts/footer'); ?>