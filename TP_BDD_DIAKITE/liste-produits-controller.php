<?php

include __DIR__ . '/SimpleOrm.class.php';
include __DIR__ . '/liste-produits-model.php';


class Produit extends SimpleOrm {
    public $id;
    public $nom;
    public $prix;
    public $stock;
    public $image;
    
}

$produit = new Produit();

    
	$produit->nom = 'Console de jeux';
	$produit->prix = '600';
	$produit->stock = '2';
    $produit->image = 'https://picsum.photos/1500/1000';
	

	$produit->save();





include __DIR__ . '/liste-produits.html.php';


?>