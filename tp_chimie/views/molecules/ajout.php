<?php include Helper::view('parties/header'); ?>

<h1>Ajout d'une molecule</h1>


<form action="<?= url('ajouter-une-molecule-handler') ?>" method="post">
	<div class="form-group">
		<label for="nom">Nom</label>
		<input type="text" class="form-control" name="nom" id="nom" placeholder="Saisissez le nom...">
	</div>

	<div class="form-group">
		<label for="formule">Formule</label>
		<input type="formule" class="form-control" name="formule" id="formule" placeholder="Saisissez la formule...">
	</div>

</div>

	<button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php include Helper::view('parties/footer'); ?>	