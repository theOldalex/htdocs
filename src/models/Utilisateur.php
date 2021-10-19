<?php

class Utilisateur extends SimpleOrm {
	public $id;
	public $pseudo;
	public $mot_de_passe;
	public $email;
	public $token;
}