<?php

require_once __DIR__."/../view/home.php";

class ControllerView{
    
    
    private $view;
     
     public function __construct()
     {
     $this -> view = new ViewHome();
     }

     
	public function authentification()
	{
		$this -> view -> generateViewHome();
	}
     
    
    }

?>
