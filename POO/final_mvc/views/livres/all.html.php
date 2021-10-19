<?php include Helper::view('parties/header'); ?>

<h1>Les livres</h1>

<div class="card-columns">
    <?php foreach ($livres as $un_livre) : ?>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $un_livre->titre ?></h4>
                <p class="card-text"><?= $un_livre->auteur_prenom ?> <?= $un_livre->auteur_nom ?></p>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?php include Helper::view('parties/footer'); ?>