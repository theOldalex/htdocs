<?php


/**
 * Un modèle = une classe
 * qui donne la "forme" de la donnée
 * 
 * et qui "extends" SimpleOrm
 * (qui "utilise" SimpleOrm)
 */
class Article extends SimpleOrm {
	public $id;
	public $titre;
	public $contenu;
	public $date;
	public $image;
	public $image_alt;
	public $image_copyright;
}
