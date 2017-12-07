
    <?php 
    
    $url = 'https://newsapi.org/v2/top-headlines?sources=die-zeit&apiKey=478dbc18e45246529659e27b354d7d77'; //JSON
    $data = file_get_contents($url); // contenu dans variable
    $result = json_decode($data, true); // decoder le JSON en Array

    foreach ($result["articles"] as $article)
    {
      echo '<p>'.$article["title"]. '</p>';
      echo '<p>'.$article["author"]. '</p>';
      echo '<p>'.$article["description"]. '</p>';

    }
    ?>