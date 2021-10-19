<?php include view('parts/header'); ?>
<h1>Se connecter</h1>

<form method="post" action="<?= url('connexion-handler') ?>">
	<div class="form-group row">
		<label for="login" class="col-12 col-form-label">Identifiant</label>
		<div class="col-12">
			<input type="text" class="form-control" name="login" id="login" placeholder="Identifiant">
		</div>
	</div>

	<div class="form-group row">
		<label for="password" class="col-12 col-form-label">Mot de passe</label>
		<div class="col-12">
			<input type="password" class="form-control" name="password" id="password" placeholder="Mot de passe">
		</div>
	</div>

	<div class="form-group form-check row">
		<label class="form-check-label">
			<input type="checkbox" class="form-check-input" name="remain_connected" id="remain_connected" value="true">
			Rester connecté
		</label>
	</div>

	<button type="submit" class="btn btn-primary">Se connecter</button>
</form>

<?php include view('parts/footer'); ?>