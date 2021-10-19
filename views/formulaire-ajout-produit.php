<?php include view('parts/header'); ?>

<h1>Ajouter un produit</h1>

<form method="post" action="<?= url('ajouter-produit-handler') ?>" enctype="multipart/form-data">
	<div class="form-group row">
		<label for="nom" class="col-12 col-form-label">Nom</label>
		<div class="col-12">
			<input type="text" class="form-control" name="nom" id="nom" placeholder="Nom">
		</div>
	</div>

	<div class="form-group row">
		<label for="image" class="col-12 col-form-label">Image</label>
		<div class="col-12">
			<input type="file" class="form-control" name="image" id="image" placeholder="Image">
		</div>
	</div>

	<div class="form-group row">
		<label for="prix" class="col-12 col-form-label">prix</label>
		<div class="col-12">
			<input type="number" min="0.01" step="0.01" class="form-control" name="prix" id="prix" placeholder="prix">
		</div>
	</div>

	<div class="form-group row">
		<label for="stock" class="col-12 col-form-label">stock</label>
		<div class="col-12">
			<input type="number" min="0" step="1" class="form-control" name="stock" id="stock" placeholder="stock">
		</div>
	</div>

	<div class="form-group">
		<label for="description">Description</label>
		<textarea class="form-control" name="description" id="description" rows="3"></textarea>
	</div>

	<button type="submit" class="btn btn-primary">Ajouter un produit</button>
</form>

<?php include view('parts/footer'); ?>