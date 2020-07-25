$(document).ready(function(){	
	$("#includedContent").load("contactmodal.html");
    $("#contact-modal").modal('hide');
    $("#more-info").hide();
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
			alert(response);
			$("#contact-modal").modal('hide');
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


