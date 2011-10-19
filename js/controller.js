// JavaScript Document
function fadeBackground()
{
 
	
	  $("#background_image").click(function () {
  $("#background_image").fadeOut('slow',function() {
       //logo.style.visibility = 'visible';
	      $("#logo").fadeIn(2000);
      });
 
  });


 


  
	/*var backgroundId= document.getElementById('bg');
	
	backgroundId.fadeOut();
	alert(backgroundId.id);*/
}