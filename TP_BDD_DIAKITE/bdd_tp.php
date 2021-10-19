<?php
    
include __DIR__ . '/SimpleOrm.class.php';
$connexion = new mysqli('localhost', 'root', '');
SimpleOrm::useConnection($connexion, 'tp_php_e_commerce.sql');
include __DIR__ . '/liste-produits-model.php';

if (!empty($connexion->connect_error))
	die('Unable to connect to the database. ' . $connexion->connect_error);

    class Produit extends SimpleOrm {
        public $id;
        public $nom;
        public $prix;
        public $stock;
        public $image;
        
    }

 


   


?>