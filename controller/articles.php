<?php

require_once 'controllerArticles.php';

class Login {
    
        private $article;
     
        public function __construct()
        {
                $this->article= new ControllerArticles();
        }
    }

?>