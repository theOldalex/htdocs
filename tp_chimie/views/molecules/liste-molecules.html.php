<?php include Helper::view('parties/header'); ?>

<h1>Les molécules</h1>

<div class="card-columns">
    <?php foreach ($molecules as $une_molecule) : ?>

        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= $une_molecule->nom ?></h4>
                <p class="card-text"><?= $une_molecule->formule?>
            </div>
        </div>

    <?php endforeach; ?>
</div>

<?php include Helper::view('parties/footer'); ?>