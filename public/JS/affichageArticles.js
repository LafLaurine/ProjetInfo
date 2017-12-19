$( document ).ready(function(){
    var articles_affiches = [];
	var articles_non_affiches = [];

    $(".hide").click(function(e){

		e.preventDefault();
		var i = $(".hide").index(e);

		$(".article").eq(i).fadeOut();
		
		
	});
	
	var myData = 'article='+ $(".article").val();

    
    $("#submit").click(function()
	{ 
		$.ajax({       
			url : '../../controller/controllerArticles.php',       
			type : 'POST',      
			data : myData,
			dataType : 'php',

			success : function(add){
				articles_non_affiches.push(add);
			},

			error :	function(error){
				window.alert("Erreur");
			}
		});  
	});
        
        
        });
        
    