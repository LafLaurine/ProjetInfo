<?php

require_once 'userAuthentification.php';

class Login {
    
          private $loginUser;
     
        public function __construct()
        {
                $this->loginUser= new UserAuthentification();
        }
    
          // Traite une requête entrante
        public function loginRequete()
        {
            $this->loginUser->authentification();   
        }
    }

?>