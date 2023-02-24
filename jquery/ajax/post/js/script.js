$(document).ready(function(){
	$("#submit").click(function(event){
		event.preventDefault();
		$(".form").addClass("hidden");
		$(".progress").removeClass("hidden");
		var formData = $("#subform").serialize();
		console.log(formData);
		// $.post(URL, data, callback);
		$.post(
			"add-new-email.php",
			formData,
			function(data,status){
				console.log("Data : "+data);
				console.log("Status : "+status);
				if ( data == "record-added" && status == "success" ) {
								$(".progress").addClass("hidden");
								$(".success").removeClass("hidden");
							} else {
								$(".progress").addClass("hidden");
								$(".form").removeClass("hidden");
								$(".error").removeClass("hidden");
							}
			}
		);
	});

});