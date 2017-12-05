<?php

session_start();
header('Content-type: text/html; charset=utf-8');

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<title>Projet informatique</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../public/CSS/style.css">


</head>
<body>

<?php 

function cleanString($string) {
	$string = strtolower($string);
	$string = preg_replace("/[^a-z0-9_'\s-]/", "", $string);
	$string = preg_replace("/[\s-]+/", " ", $string);
	$string = preg_replace("/[\s_]/", " ", $string);
	return $string;
}

if(isset($_POST['mot']) && !empty($_POST['mot'])) {
	$motRecherche = urlencode(cleanString($_POST['mot']));
	$url = "https://twitter.com/search?q=".$motRecherche."&rpp=10&include_entities=true&result_type=recent&lang=fr&locale=fr";	
	header('Location: '.$url);
	
}

else
{
	echo '<p>Recherche non effectuée</p>';	
}

?>

</body>
</html>