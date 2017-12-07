<?php

session_start();
header('Content-type: text/html; charset=utf-8');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Projet informatique</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../public/CSS/style.css">
<link rel="stylesheet" type="text/css" href="../public/CSS/home.css">
<script type="text/javascript" src="../public/JS/jquery-3.2.1.min.js"></script>
<script src="../public/JS/main.js"></script>
<script src="../public/JS/weather.js"></script>
</head>
<body>

<h1>PROJET INFORMATIQUE</h1>

<div class="site">
<header class="masthead">
        <h2 class="site-title">AGRÉGATEUR</h2>
        <a href="../controller/logout.php">Déconnexion</a>
</header>

    <main id="content" class="main-content">
        <h2>Articles</h2>
      <a href="param"><h3>+</h3></a>
      <div class="article">
      <header><h2>HEADER</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
      <?php include('../controller/controllerArticles.php') ?> 
      </li>
    </ul></div>
    </div>
      <div class="article"><header><h2>HEADER</h2></header><div class='body'>
    <ul>
      <li>
        <div class='content'><?php article(); ?></ul>
        </li></div>
      </div>
      <div class="article">
      <header><h2>HEADER</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
      <?php include('../controller/controllerArticles.php') ?> 
      </li>
    </ul></div>
    </div>
      <div class="article">
      <header><h2>HEADER</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
      <?php include('../controller/controllerArticles.php') ?> 
      </li>
    </ul></div>
    </div>
    <div class="article">
      <header><h2>HEADER</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
      <?php include('../controller/controllerArticles.php') ?> 
      </li>
    </ul></div>
    </div>
    <div class="article">
      <header><h2>HEADER</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
      <?php include('../controller/controllerArticles.php') ?> 
      </li>
    </ul></div>
    </div>
    </main>

    <aside class="sidebar">
      <h3>Menu</h3>
      <div class="date" style="color:black;"></div>
      <div class="row" style="color:black;">
     
      <div class="city"></div>
      <div class="info">
        <div class="icon"></div>
        <div class="desc"></div>
      </div>
      <div class="weather">
        <div class="temp"><p class="small"></p></div>
        <div class="humidity"><p class="small"></p></div>
      </div>
      
      </div><div class="row">
      <div class="col-xs-12 text-center">
      <button class="btn btn-default imperial">Show US / Imperial</button>
      </div>
      </div><form action="../controller/result.php" method="post">
      <input name="mot" type="text">
      <input value="Rechercher" type="submit">
      </form>
    </aside>
  </div>

  <?php

  function article()
  {
    $url = 'https://news.google.com/news/rss/headlines/section/topic/ENTERTAINMENT.fr_fr/Culture?ned=fr&hl=fr&gl=FR';
    $xml = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA);
    
        
         //Lecture des données
    
    
      //Google News présentation (Flux RSS de la culture FR)
       foreach($xml->channel as $valeur)
         {
            //Affichages des données
            $image = $valeur->image->url;
            echo '<p>'.date("d/m/Y",strtotime($valeur->pubDate)).' - <a href="'.$valeur->link.'">'.utf8_encode($valeur->title).'</a>';
            echo '<br/>'.utf8_encode($valeur->description);
            echo '<br/>'.utf8_encode($valeur->image->title).'</p>';
            echo '<img src="'.$image.'" height="50"; "width="50" ;>';
         }  
    
         //Articles
    
         foreach($xml->channel->item as $valeur)
         {
            //Affichages des données
            $image = $valeur->image->url;
            echo '<p>'.date("d/m/Y",strtotime($valeur->pubDate)).' - <a href="'.$valeur->link.'">'.utf8_encode($valeur->title).'</a>';
            echo '<br/>'.utf8_encode($valeur->description);
            echo '<br/>'.utf8_encode($valeur->image->title).'</p>';
            echo '<img src="'.$image.'" height="50"; "width="50" ;>';
            echo '<br/>'.utf8_encode($valeur->image->link).'</p>';
         }  
  }


     ?>
  



</body>
</html>
