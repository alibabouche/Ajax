"use strict"

$(document).ready(function(){
	

	$("#submit").click(function(){
		
		var lastName = $("#lastName").val();
		var firstName = $("#firstName").val();
		var phone = $("#phone").val();
		


		$.post("contact.php",
			{nom:lastName,
			prenom:firstName,
			telephone:phone}, function(chocolat)
			{	
				if(chocolat == "1")
					$("#contactList").html("<span class='error'>Merci de renseigner tout les champs</span>").slideDown();
				else
				{
					$("#contactList").html(chocolat);
					$("#lastName").val("");
					$("#firstName").val("");
					$("#phone").val("");
				}

				
			});
	});	
});	
