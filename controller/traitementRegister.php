<?php

header('Content-type: text/html; charset=UTF-8');
session_start();

//connection à la BD
function connectBd () {
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    return new PDO('mysql:host=localhost;dbname=projet_info', 'root', '',$pdo_options);
}

//teste si le nom d'utilisateur est pris ou non
function testpseudoValidity ($pseudo) {
    $db = connectBd ();
    $req = $db->query("SELECT * FROM user WHERE pseudo ='$pseudo';");
    $result = $req->fetch();
    if ($result)
        return true;
    else 
        return false;
}

//test si le mail est pris ou non
function testEmailValidity ($mail) {
    $db = connectBd ();
    $req = $db->query("SELECT * FROM user WHERE email = '$mail';");
    $result = $req->fetch();
    if ($result)
        return true;
    else 
        return false;
}

// Récupération des variables issues du formulaire par la méthode post
$pseudo = filter_input(INPUT_POST, 'pseudo');
$password = filter_input(INPUT_POST, 'pass');
$passwordconf = filter_input(INPUT_POST, 'passwordconf');
$mail = filter_input(INPUT_POST, 'mail');

// Si le formulaire est envoyé
if (isset($pseudo,$password,$mail)) 
{   
    $db = connectBd();
    // Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces  
    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $password = trim($password) != '' ? $password : null;

    $pseudoValidity = testpseudoValidity($pseudo);
    $mailValidity = testEmailValidity($mail);
   
    

    try
    {
        $db = connectBd();

        //redirige en GET si nom utilisateur existe déjà
    if ($pseudoValidity) {
        header("Location: ../index.php?error=pseudo");    
    }

    //redirige en GET si mail existe déjà
    else if ($mailValidity) {
        header ("Location: ../index.php?error=email");
    } 
    
    //Association des éléments que l'user a entré à la BD
    else {
        if ($password == $passwordconf)
        {
            // Password du form
            $hash = hash("sha256",$password);
            $req = $db->prepare('INSERT INTO user(pseudo, pass, email) VALUES (?,?,?)');

            $req->bindParam(1, $pseudo);
            $req->bindParam(2, $hash);
            $req->bindParam(3, $mail);
            $req->execute();
            
            if($req)
            {
                if (!session_id())
                {
                    session_start();
                    setcookie('pseudo', $_POST['pseudo'], time() + 365*24*3600, null, null, false, true); 
            
                    header( 'Location: ../index.php?action=success');
                }
                    
    
            }                
        }

        
        else
        {
            header( 'Location: ../index.php?action=wrongMDP');
        }
        
    }

    }
    catch (PDOException $e)
    {
        exit('Erreur, problème de connexion à la base');
    }

    

    


}
?>