<?php

$url = 'https://news.google.com/news/rss/headlines/section/topic/ENTERTAINMENT.fr_fr/Culture?ned=fr&hl=fr&gl=FR';
$xml = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA);

    
     //Lecture des données
  
   foreach($xml->channel as $valeur)
     {
        //Affichages des données
        $image = $valeur->image->url;
        echo '<p>'.date("d/m/Y",strtotime($valeur->pubDate)).' - <a href="'.$valeur->link.'">'.utf8_decode($valeur->title).'</a>';
        echo '<br/>'.utf8_decode($valeur->description);
        echo '<br/>'.utf8_decode($valeur->image->title).'</p>';
        echo '<img src="'.$image.'" height="50"; "width="50" ;>';
     }  

     foreach($xml->channel->item as $valeur)
     {
        //Affichages des données
        $image = $valeur->image->url;
        echo '<p>'.date("d/m/Y",strtotime($valeur->pubDate)).' - <a href="'.$valeur->link.'">'.utf8_decode($valeur->title).'</a>';
        echo '<br/>'.utf8_decode($valeur->description);
        echo '<br/>'.utf8_decode($valeur->image->title).'</p>';
        echo '<img src="'.$image.'" height="50"; "width="50" ;>';
        echo '<br/>'.utf8_decode($valeur->image->link).'</p>';
     }  
     ?>