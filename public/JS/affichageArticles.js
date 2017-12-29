$( document ).ready(function(){
    var articles_affiches = [];
	var articles_non_affiches = [];

	$("body").on("click",".hide",function(e){
		
				console.log("clicked on : ",e,$(".hide").index(this));
		
				e.preventDefault();
				var i = $(".hide").index(this);
		
				$(".article").eq(i).fadeOut();		
				
	});
	
        
});

    
function add()
{ 
	$.get("http://localhost/ProjetInfo/view/home.php?param=val",{param:true},function(rep){
		//console.log("dfhjdfkfdjhfds");
		var n = prompt("Temps de chargement :");
		entier = parseInt(n); 
		var timer = setInterval(add,n);   
	});
};
	
        
    