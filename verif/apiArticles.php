<?php 
header('Content-type: text/html; charset=UTF-8');
session_start();


function connectBd () {
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    return new PDO('mysql:host=localhost;dbname=projettut', 'root', '',$pdo_options);
}

$db = connectBd();

function get_list_articles($db) { 
    $sql = "SELECT * FROM article;"; 
    $exe = $db->query($sql); //création de la requête Sql pour aller chercher tous les articles
    $Liste_article = array(); //création d'un tableau qui va contenir tous nos articles

    while($result = $exe->fetch(PDO::FETCH_OBJ)) { //Exécution de la requête définie plus haut
    array_push($Liste_article, array("id_article" => $result->id_article, "titre" => $result->titre, "contenu" => $result->contenu)); //on ajoute tous les articles dans notre tableau
    }
    return $Liste_article; //on renvoie le tableau contenant tous nos articles
    }

function get_article_by_id($id_article, $db) { //je passe en paramètre de ma fonction l'id de l'article souhaité et l'objet PDO pour exécuter la requête
    $sql = "SELECT * FROM article WHERE id = ".$id_article; //je réalise ma requête avec l'ID passée en paramètres
    $exe = $db->query($sql); //j'exécute ma requête

    while($result = $exe->fetch(PDO::FETCH_OBJ)) {
        $Detail_article = array("titre" => $result->titre, "contenu" => $result->$contenu);//je mets le résultat de ma requête dans une variable
    }
    return $Detail_article; //je retourne l'article en question
    }

    $possible_url = array("get_list_articles", "get_articles"); 
    $value = "Une erreur est survenue";
    if (isset($_GET["action"]) && in_array($_GET["action"], $possible_url)) { //si l'URL est OK
    switch ($_GET["action"]) {
    case "get_list_articles": $value = get_list_articles($db); break; //Je récupère la liste des articles
    case "get_articles": if (isset($_GET["id_article"])) $value = get_article_by_id($_GET["id_article"], $db); //si l'ID est spécifié alors je renvoie l'article en question
    else $value = "Argument manquant"; break; } //si l'ID n'est pas valable je change mon message d'erreur
    }
    exit(json_encode($value)); 


?>