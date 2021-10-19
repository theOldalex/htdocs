<nav class="nav justify-content-center">
	<a class="nav-link" href="<?= url('accueil') ?>">Accueil</a>
	<a class="nav-link" href="<?= url('liste-produits') ?>">Liste des produits</a>
	<?php if (is_admin()) : ?>
		<a class="nav-link" href="<?= url('ajouter-produit') ?>">Ajouter un produit</a>
	<?php endif; ?>

	<?php if (!is_connected()) : ?>
		<a class="nav-link" href="<?= url('connexion') ?>">Connexion</a>
	<?php else : ?>
		<a class="nav-link" href="<?= url('deconnexion') ?>">Déconnexion</a>
	<?php endif; ?>
</nav>