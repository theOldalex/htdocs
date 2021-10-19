<?php include 'nav.php'; ?>
<?php include_once '/../xampp/htdocs/functions/functions.php';?>
<?php include '/xampp/htdocs/big_MVC/controllers/Article_controller.php';?>

<h1>La liste des articles</h1>

<div class='row'>
    <?php foreach ($article as $articles) : ?>
        <div class='card mb-3 col-5 mx-2 p-2'>
            <div class='row no-gutters'>
                <div class='col-md-4'>
                    <img class="card-img" src=' <?= $articles->image ?>' alt='L/image de l/article'>
                </div>
                <div class='col-md-8'>
                    <div class='card-body'>

                        <h3 class='card-title'><?= $articles->titre ?></h3>
                       
                        <p class='card-text'>
                       
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
<?php




?>
<?php include 'footer.php'; ?>



<!-- <a href="<?= url('details-article&id=' . $produit->id) ?>">Voir les détails</a> -->
