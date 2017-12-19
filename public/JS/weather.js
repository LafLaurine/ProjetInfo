$(function() {
    
    // OpenWeather API 
    var owAppId = "2e3ea1bd0dde395f259f964fe15bc927";
    
    function displayWeather(unitType) {
      
      if ("geolocation" in navigator) {
        navigator.geolocation.getCurrentPosition(success, error, {
          enableHighAccuracy: true,
          timeout: 5000,
          maximumAge: 0
        });
      } else {
        alert("Location non trouvé");
      }
      
       
      function success(pos) {
        console.log(pos);
        var crd = pos.coords;
        var lat = crd.latitude;
        var long = crd.longitude,
        // utilise API CORS-ANYWHERE pour https appel d'API 
        owApiUrl = "https://cors-anywhere.herokuapp.com/http://api.openweathermap.org/data/2.5/weather?lat=" + lat + "&lon=" + long + "&units=" + unitType + "&APPID=" + owAppId;
        
        
        getWeather(owApiUrl, unitType);
      }
      
      function error() {
        alert("Erreur dans la recherche de location.");
      }
      
    }
    

    function getWeather(url, unitType) {
      var location;  

      if (arguments.length > 2) location = arguments[2];
      
      // accéder à l'API
      $.getJSON(url, function(data) {
        var current = new Weather(data, location, unitType);
        // pour placer le contenu dans la page
        modifyDOM(current);
      });
    }
    
    // insérer le contenu
    function modifyDOM(current) {
      var city = "<p>" + current.city + "</p>",   
      date = "<p>" + current.date + "</p>",
      icon = "<img src='" + current.icon + "'>",
      desc = "<p>" + current.condition + "</p>",
      temp = "<p class='small'>Température</p><p>" + current.temp + getTempSymbol(current.unitType) + "</p>",
      hum = "<p class='small'>Humidité</p><p>" + current.humidity + "<span>&#37;</span></p>";
      $(".city").html(city);
      $(".date").html(date);
      $(".icon").html(icon);
      $(".desc").html(desc);
      $(".temp").html(temp);
      $(".humidity").html(hum);
      
      $(".container").animate({opacity: 1}, 800, function() {
        $(this).css({"opacity": 1});
      })
      
      function getTempSymbol(unitType) {
        if (unitType == "metric") {
          return "&deg;C"
        } else if (unitType == "imperial") {
          return "&deg;F";
        } else {
          return "Type inconnu";
        }
      }
  
    }
    
    // stock données
    function Weather(data, location, unitType) {
      var d = new Date();
      this.city = location || (data.name + ", " + data.sys.country);
      this.icon = "https://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
      this.condition = data.weather[0].description;
      this.temp = Math.round(data.main.temp);
      this.humidity = data.main.humidity;
      this.windDir = data.wind.deg;
      this.sunrise = data.sys.sunrise;
      this.sunset = data.sys.sunset;
      this.unitType = unitType;
      this.date = d.toDateString();
      
    }
    

    
    displayWeather("metric");
    
    $(".btnMetric").click(function() {
      if ($(this).hasClass("metric")) {
        $(this).removeClass("metric");
        $(this).addClass("imperial");
        $(this).text("°F");
        displayWeather("metric");
      } else {
        $(this).removeClass("imperial");
        $(this).addClass("metric");
        $(this).text("°C");
        displayWeather("imperial");
      }
    });
        
  });
  