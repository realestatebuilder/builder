$(document).ready(function(){	

  if (document.cookie.indexOf('modal_shown=') >= 0) {
    $('#temp').modal('hide');
 //do nothing if modal_shown cookie is present
} else {
  $('#temp').modal('show');  //show modal pop up
  document.cookie = 'modal_shown=seen'; //set cookie modal_shown
  //cookie will expire when browser is closed
}

    $("#more-info").hide();
    $("#successmodal").hide();

	var $radios = $('input[name=vaastu]').change(function () {
		var value = $radios.filter(':checked').val();
		if(value=="yes"){
			$("#more-info").show();
		}
		else{
			$("#more-info").hide();
			
		}
	});

	$("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
});

function myFunction() {
	$("#temp").modal('hide');
	$("#contact-modal").modal('show');
  }
// function to handle form submit
function submitForm(){
	 $.ajax({
		type: "POST",
		url: "saveContact.php",
		cache:false,
		data: $('form#contactForm').serialize(),
		success: function(response){
            if(response){
                $("#contact-modal").modal('hide');
                $("#successmodal").modal('show');
              }
    
		},
		error: function(){
			alert("Error");
		}
	});
}

function formFunction(){
  $("#contact-modal").modal('show');
}

