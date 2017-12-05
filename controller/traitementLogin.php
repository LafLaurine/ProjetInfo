<?php 
header('Content-type: text/html; charset=UTF-8');
session_start();

function connectBd () {
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    return new PDO('mysql:host=localhost;dbname=projet_info', 'root', '',$pdo_options);
}


function userExists($pseudo) 
{
    $db = connectBd ();
    $pseudo = $_POST['pseudo'];
    $query = $db->prepare('SELECT pseudo FROM user WHERE pseudo = :pseudo');
    $query->bindParam(':pseudo', $pseudo, PDO::PARAM_STR, 42);
    $query->execute();
    return ($query->rowCount() == 1);
}




$pseudo = $_POST['pseudo'];
$password = $_POST['password'];

if (isset($pseudo,$password))
{

    if(userExists($pseudo))
    {
        try
        {
            $db = connectBd();
            
            //On crypte à nouveau le mot de passe afin de vérif avec le bon
        $hash = hash("sha256",$password);
        // Vérification des identifiants
        $query = "SELECT * FROM user WHERE (pseudo = :pseudo AND password = :hash)";   
        $req = $db->prepare($query);
        $req->bindParam('pseudo', $pseudo, PDO::PARAM_STR, 42);
        $req->bindParam('hash', $hash , PDO::PARAM_STR, 64);
        $req->execute();
        $result = $req->fetch();

        //Teste si le mot de passe est associé avec le pseudo
        if ($result)
        {
            
            if (!session_id()) 
            session_start();
            $_SESSION['pseudo'] = $pseudo;
            header('Location: ../index.php');
                
        } else 
        {
            header( 'Location: ../index.php?action=fail');
        }
        
        
    }  catch (PDOException $e)
        {
           echo 'Erreur, problème de connexion à la base';
        }
       
       

    }

        else
        {
            header( 'Location: ../index.php?action=user');
        }
        
        $options = [
            'cost' => 11,
            'salt' => 111111111111111111111111111
        ];

        
}

else
{
    header( 'Location: ../index.php?action=empty');
        
}
?>
    
    


