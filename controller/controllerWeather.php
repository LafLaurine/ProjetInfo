<?php


        $get = json_decode(file_get_contents('http://ip-api.com/json/'),true);
        date_default_timezone_set($get['timezone']);
        $appId = "2e3ea1bd0dde395f259f964fe15bc927";
    
    
        if (isset($_GET['q']) && !empty($_GET['q'])){
            $city = $_GET['q'];
            $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric"."&APPID=".$appId;
            $url = file_get_contents($string);
            $data = json_decode($url,true);
            
            $temp = $data['main']['temp'];
            $icon = $data['weather'][0]['icon'];
            $country =  "<h3>".$data['name'].",".$data['sys']['country']."</h3>";
            $logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>";
            $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
            $temperature =  "<b>Température:".$temp."°C</b><br>";
        }
    
        else
        {
            $city = $get['city'];
            $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric"."&APPID=".$appId;
            $url = file_get_contents($string);
            $data = json_decode($url,true);
            
            $temp = $data['main']['temp'];
            $icon = $data['weather'][0]['icon'];
            $country =  "<h3>".$data['name'].",".$data['sys']['country']."</h3>";
            $logo = "<img src='http://openweathermap.org/img/w/".$icon.".png'>";
            $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
            $temperature =  "<b>Température:".$temp."°C</b><br>";
        }
    

?>