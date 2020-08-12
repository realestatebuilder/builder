$(document).ready(function(){	



  
	if (document.cookie.indexOf('modal_shown=') >= 0) {
		$('#temp').modal('hide');
	 //do nothing if modal_shown cookie is present
	} else {
	  $('#temp').modal('show');  //show modal pop up
	  document.cookie = 'modal_shown=seen'; //set cookie modal_shown
	  //cookie will expire when browser is closed
	}
	
  $("#contact-modal").modal('hide');
	$("#more-info").hide();
  $("#successmodal").hide();
  $("#buybudget").hide();
  $("#rentbudget").hide();

    var $radios = $('input[name=vaastu]').change(function () {
		var value = $radios.filter(':checked').val();
		if(value=="yes"){
			$("#more-info").show();
		}
		else{
			$("#more-info").hide();
			
		}
  });
  
  var $radios1 = $('input[name=buy_rent]').change(function () {
    var value = $radios1.filter(':checked').val();

		if(value=="buy"){
      $("#buybudget").show();
      $("#rentbudget").hide();
		}
		if(value=="rent"){
      $("#rentbudget").show();
      $("#buybudget").hide();
			
		}
	});
    $("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
 });
function formFunction(){
  $("#contact-modal").modal('show');
}
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

function validatename() {

    var userName = $("#userName").val();
    if (userName == "") {
						$("#userName-info").css("color","red");	 
                        $("#userName-info").html(" Name required");
                        $("#userName").css('border', '#e66262 1px solid');
                  
 
                    }
    else if (!userName.match(/^[A-Za-z]+$/))
            {
				$("#userName-info").css("color","red");	 
				$("#userName-info").html("Invalid Name");
                $("#userEmail").css('border', '#e66262 1px solid');
            
            }
    else{
	  $("#userName-info").html("");
    }
            
    }

function validateemail() {

  var userEmail = $("#userEmail").val();
  if (userEmail == "") {
		$("#userEmail-info").css("color","red");	  
        $("#userEmail-info").html("Email required");
        $("#userEmail").css('border', '#e66262 1px solid');
     
      }
  else if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
				$("#userEmail-info").css("color","red");
                $("#userEmail-info").html("Invalid Email Address");
                $("#userEmail").css('border', '#e66262 1px solid');
               
            }
    else{
      $("#userEmail-info").html("");
    }
    }

function validatesubject() {
  
  var subject = $("#subject").val();
  if (subject == "") {
				$("#subject-info").css("color","red");
                $("#subject-info").html("Subject required");
                $("#subject").css('border', '#e66262 1px solid');
         
            }
    else{
      $("#subject-info").html("");
    }
            
    }


function validatemessage() {

  var content = $("#content").val();
  if (content == "") {
				$("#userMessage-info").css("color","red");
				$("#userMessage-info").html("Message required");
                $("#content").css('border', '#e66262 1px solid');
               
            }
  else{
    $("#userMessage-info").html("");
    }
     
           
    }


