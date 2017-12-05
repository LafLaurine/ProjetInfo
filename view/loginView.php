<?php

session_start();
header('Content-type: text/html; charset=utf-8');

class ViewAuthentification{
  
    public function generateViewAuthentification()
    {


?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Projet informatique</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="./public/CSS/style.css">
<script type="text/javascript" src="./public/JS/jquery-3.2.1.min.js"></script>
<script src="./public/JS/main.js"></script>

</head>
<body>
<h1>Projet informatique - LAFONTAINE</h1>

<div class="login-box">
<div class="lb-header">
  <a href="#" class="active" id="login-box-link">Se connecter</a>
  <a href="#" id="signup-box-link">S'inscrire</a>
</div>


<form class="email-login" action="./controller/traitementLogin.php"  method="post">
<div class="u-form-group">
<input type="text" name="pseudo" placeholder="Pseudo">
</div>
  <div class="u-form-group">
    <input type="password" placeholder="Mot de passe" name="password"/>
  </div>
  <div class="u-form-group">
    <button>Se connecter</button>
  </div>
  <div class="u-form-group">
    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
  </div>
</form>
<form class="email-signup" action="./controller/traitementRegister.php"  method="post">
  
  <div class="u-form-group">
  <input type="text" name="pseudo" placeholder="Pseudo" pattern="[A-Za-z0-9]{3,24}" required="" title="Au moins 3 caractères, pas de caractères spéciaux ni d'espacement">
  </div>

  <div class="u-form-group">
    <input type="email" placeholder="Email" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
  </div>
  
  <div class="u-form-group">
    <input type="password" id="password" name="password" placeholder="Mot de passe" pattern=".{5,}" required="" title="Au moins 5 caractères" ></br>
  </div>
  <div class="u-form-group">
    <input type="password" name="passwordconf" required="" placeholder="Confirmer le mot de passe"/>
  </div>
  <div class="u-form-group">
    <button>S'inscrire</button>
  </div>
</form>
</div>

<?php 
  if(@$_GET['action'] == 'success' ) {
    echo "<h2 style=\"color:#3080D0; text-align:center;\"> Votre compte a bien été enregistré, vous pouvez vous connecter </h2>";
   }

   if(@$_GET['action'] == 'fail' ) {
    echo "<h2 style=\"color:#3080D0; text-align:center;\"> Mauvais mot de passe </h2>";
   }

   if(@$_GET['action'] == 'wrongMDP' ) {
    echo "<h2 style=\"color:#3080D0; text-align:center;\"> Les mots de passe ne correspondent pas </h2>";
   }

   if(@$_GET['action'] == 'user' ) {
    echo "<h2 style=\"color:#3080D0; text-align:center;\"> Utilisateur non inscrit </h2>";
   }

   if(@$_GET['action'] == 'empty' ) {
    echo "<h2 style=\"color:#3080D0; text-align:center;\"> Champs vides </h2>";
   }
?>

</body>
</html>

<?php }
}
?>