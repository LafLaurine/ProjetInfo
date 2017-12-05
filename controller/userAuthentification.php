<?php
require_once __DIR__."/../view/loginView.php";


class UserAuthentification
{
	private $view;
	 
	public function __construct()
	{
		$this -> view = new ViewAuthentification();
	}
	 
	public function authentification()
	{
		$this -> view -> generateViewAuthentification();
	}
}
