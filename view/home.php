<?php

session_start();
header('Content-type: text/html; charset=utf-8');

class VueAuthentification{
  
    public function genereVueAuthentification()
    {


?>


<!DOCTYPE html>
<html lang="fr">
<head>
<title>Projet informatique</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./public/CSS/style.css">
<link rel="stylesheet" type="text/css" href="./public/CSS/home.css">
<script type="text/javascript" src="./public/JS/jquery-3.2.1.min.js"></script>
<script src="./public/JS/main.js"></script>
<script src="./public/JS/weather.js"></script>
</head>
<body>

<h1>PROJET INFORMATIQUE</h1>

<div class="site">
<header class="masthead">
        <h2 class="site-title">AGRÉGATEUR</h2>
        <a href="controller/logout.php">Déconnexion</a>
</header>

    <main id="content" class="main-content">
        <h2>Articles</h2>
      <a href="param"><h3>Param flux</h3></a>
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
      <div class="article"></div>
    </main>

    <aside class="sidebar">
        <h3>Menu</h3>
        <div class="date"  style='color:black;'></div>
</div><!-- /.col -->
</div><!-- /.row -->
<div class="row" style='color:black;'>
<div class="col-xs-12">
<div class="weatherbox center-block">
  <div class="city"></div>
  <div class="innerweatherbox">
    <div class="info">
      <div class="icon"></div>
      <div class="desc"></div>
    </div><!-- /.info -->
    <div class="weather">
      <div class="temp"></div>
      <div class="humidity"></div>
    </div><!-- /.weather -->
    <div class="wind">
      <div class="winddir"></div>
      <div class="windspeed"></div>
    </div><!-- /.wind -->
  </div><!-- /.innerweatherbox -->
</div><!-- /.weatherbox -->
</div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
<div class="col-xs-12 text-center">
<button class="btn btn-default metric">
  Show Metric
</button>
</div>
</div>
        
      <form action="./controller/result.php" method="post">
    <input type="text" name="mot"/>
    <input type="submit" value="Rechercher" />
    </form>
    </aside>

</div>



</body>
</html>

    <?php }
}
?>