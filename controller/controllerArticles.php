<?php 

class ControllerArticles{
  
      public function dieZeit()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=die-zeit&apiKey=478dbc18e45246529659e27b354d7d77'; //JSON
        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // décoder le JSON en Array
    
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"].'</p>';
          echo '<p>'.$article["author"].'</p>';
          echo '<p>'.$article["description"].'</p>';
          echo '<p>'.$article["url"].'</p>';
          echo '<img src="'.$article["urlToImage"].'" style="height:12em;"/>';
    
    
        }
  
      }
      
      public function articleGoogle()
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
                echo '<p>'.date("d/m/Y",strtotime($valeur->pubDate)).' - <a href="'.$valeur->link.'">'.utf8_encode($valeur->title).'</a>'.'</p>';
                echo '<p>'.utf8_encode($valeur->description).'</p>';
                echo '<p>'.utf8_encode($valeur->image->title).'</p>';
                echo '<img src="'.$image.'" height="50"; "width="50" ;>';
                echo '<p>'.utf8_encode($valeur->image->link).'</p>';
             }  
      }
  
      public function leMonde()
      {
        $url = 'http://www.lemonde.fr/rss/une.xml';
        $xml = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA);
        
            
             //Lecture des données
        
        
          //Flux RSS des UNE LeMonde
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
                echo '<p>'.date("d/m/Y",strtotime($valeur->pubDate)).' - <a href="'.$valeur->link.'">'.utf8_encode($valeur->title).'</a>'.'</p>';
                echo '<p>'.utf8_encode($valeur->description).'</p>';
                echo '<p>'.utf8_encode($valeur->image->title).'</p>';
                echo '<img src="'.$image.'" height="50"; "width="50" ;>';
                echo '<p>'.utf8_encode($valeur->image->link).'</p>';
             }  
      }
  
      public function liberation()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=liberation&apiKey=478dbc18e45246529659e27b354d7d77';
        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }
      }
  
      public function theGuardian()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=the-guardian-uk&apiKey=478dbc18e45246529659e27b354d7d77';
  
        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }
        
      }
  
      public function aftenPosten()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=aftenposten&apiKey=478dbc18e45246529659e27b354d7d77';
  
        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }
      }
  
      public function elMundo()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=el-mundo&apiKey=478dbc18e45246529659e27b354d7d77';
  
        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      
      }

      public function buzzfeed()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=buzzfeed&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }


      public function polygon()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=polygon&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      
      public function wallStreet()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=the-wall-street-journal&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      
      public function nhl()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=nhl-news&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      public function lesEchos()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=les-echos&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      public function globeAndMail()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=the-globe-and-mail&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }
        

      public function ynet()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=ynet&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      public function rtlNews()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=rtl-nieuws&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      
      public function bild()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=bild&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      
      public function cnnSpanish()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=cnn-es&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      
      public function foxSport()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=fox-sports&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      public function googleRusse()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=google-news-ru&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }

      public function reddit()
      {
        $url = 'https://newsapi.org/v2/top-headlines?sources=reddit-r-all&apiKey=478dbc18e45246529659e27b354d7d77';

        $data = file_get_contents($url); // contenu dans variable
        $result = json_decode($data, true); // decoder le JSON en Array
        
            
        foreach ($result["articles"] as $article)
        {
          echo '<p>'.$article["title"]. '</p>';
          echo '<p>'.$article["author"]. '</p>';
          echo '<p>'.$article["description"]. '</p>';
          echo '<p>'.$article["url"]. '</p>';
          echo '<img src="'.$article["urlToImage"]. '" style="height:12em;"/>';
        
        }      

      }
    }  

    if(isset($_GET['param']))
    {

    }

    ?>