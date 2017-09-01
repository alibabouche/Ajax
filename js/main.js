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
				{
					$("#preContact").html("<span class='error'>Merci de renseigner tout les champs</span>").slideDown();
				}
				else
				{
					$("#lastName").val("");
					$("#firstName").val("");
					$("#phone").val("");
					$.get("tableContacts.php", loadAllContacts);
				}				
			});
	});	

	function loadAllContacts(data)
	{
		$("#contactList").empty();

		var tableContacts = JSON.parse(data);

		for(var i = 0; i < tableContacts.length; i++)
		{
			$("#contactList").append("<p>"+tableContacts[i].nom+"<br/>"+tableContacts[i].prenom+"<br/>"+tableContacts[i].telephone+"</p>");
		}

		console.log(tableContacts);

	}

	$.get("tableContacts.php", loadAllContacts);



});