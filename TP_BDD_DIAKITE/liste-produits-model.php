<!doctype html>
<html lang="en">

<body>


    <header>
        
   
    
    <?php include 'nav.php'; ?>
    <?php include 'produit.php';?>
  

    </header>

    </body>
    <div class="card my-2">
			<div class="card-body">
				<h4 class="card-title"><h4>
        
                

				
				 
<?php


spl_autoload_register(function ($Produit) {
    include $Produit . '.php';
});


echo $produit = Produit::all(); 
{

$produit = new Produit();

	$produit->nom = 'Console de jeux';
	$produit->prix = '500';
	$produit->stock = '2';
    $produit->image = 'https://picsum.photos/1500/1000';
	

	$produit->save();
}





?>


