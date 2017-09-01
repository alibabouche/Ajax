"use strict"

$(document).ready(function(){

	function pomme(chocolat){

		$("#contactList").html(chocolat);
	}

	$("#submit").click(function(){

		var lastName = $("#lastName").val();
		var firstName = $("#firstName").val();
		var phone = $("#phone").val();

		console.log(lastName);
		console.log(firstName);
		console.log(phone);


		$.post("contact.php",
			{nom:lastName,
			prenom:firstName,
			telephone:phone}, pomme);
	});	
});