<?php

session_start();
header('Content-type: text/html; charset=utf-8');
require "../controller/controllerArticles.php";

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Projet informatique</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../public/CSS/style.css">
<link rel="stylesheet" type="text/css" href="../public/CSS/home.css">
<script type="text/javascript" src="../public/JS/jquery-3.2.1.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../public/JS/main.js"></script>
<script src="../public/JS/weather.js"></script>
<script src="../public/JS/affichageArticles.js"></script>

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
      <a class="btn trigger" href="javascript:;"><h3>+</h3></a>

      <div class="modal-wrapper">
        <div class="modal">
          <div class="head">
          <a class="btn-close trigger" href="javascript:;"></a>
          </div>
        <div class="contentModal">
        </div>
        </div>
      </div>



      <?php 
      $objet = new ControllerArticles();?>
      <div class="article" id="article_1">
        <header>
          <a class="hide"><h4 class="cross">X</h4></a>
          <h2>Die Zeit</h2></header>
        <div class='body'>
          <ul>
          <li>
            <div class='content'>
            <?php 

            $objet->dieZeit(); ?> 
            </div>
          </li>
    </ul>
    
    </div>
    </div>
      
    <div class="article" id="article_2">
      <header>
      <a class="hide"><h4 class="cross">X</h4></a>
      <h2>The Guardian</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
      <?php 

      $objet->theGuardian(); ?> 
      </div>
      </li>
    </ul>
    </div>
    </div>


      <div class="article" id="article_3">
      <a class="hide"><h4 class="cross">X</h4></a>
      <header><h2>Libération</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
        <?php 
      $objet->liberation(); ?> 
      </div>
      </li>
    </ul></div>
    </div>
      <div class="article" id="article_4">
      <a class="hide"><h4 class="cross">X</h4></a>
      <header><h2>El Mundo</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
       <?php
      $objet->elMundo(); ?> 
      </div>
      </li>
    </ul></div>
    </div>
    <div class="article" id="article_5">
    <a class="hide"><h4 class="cross">X</h4></a>
      <header><h2>Le Monde</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
        <?php 
      $objet->leMonde(); ?> 
      </div>
      </li>
    </ul></div>
    </div>

    <div class="article" id="article_6">
    <a class="hide"><h4 class="cross">X</h4></a>
      <header><h2>Aften Posten</h2></header>
      <div class='body'>
    <ul>
      <li>
        <div class='content'>
        <?php 
      $objet->aftenPosten(); ?>
      </div> 
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
      <button class="btnMetric">&deg;C/&deg;F</button>
      </div>
      </div>
      <form action="../controller/result.php" method="post">
      <input name="mot" type="text">
      <input value="Rechercher" type="submit">
      </form>
    </aside>
  </div>

  <?php

  
  


     ?>
  



</body>
</html>
