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

	$(function() {
		$('#delivery_type').change(function(){
		  if($(this).val()=="Rent"){
			$('#search_price').empty()
			var rentoptions = {
				1 : "5k – 10k",
				2 : "10k – 20k",
				3 : "20k – 30k",
				4 : "20k – 30k",
				5 : "50k+"
			};
			var mySelect = $('#search_price');
			$.each(rentoptions, function(val, text) {
				mySelect.append(
					$('<option></option>').val(val).html(text)
				);
			});
		  }else{
			$('#search_price').empty()
			var buyoptons = {
				6 : "20L – 50L",
				7 : "50L – 1Cr",
				8 : "1Cr – 2Cr",
				9 : "2Cr – 5Cr",
				10 : "5Cr+"
				
			};
			var mySelect = $('#search_price');
			$.each(buyoptons, function(val, text) {
				mySelect.append(
					$('<option></option>').val(val).html(text)
				);
			});

		  }
		 
		});
	  });

    $("#contactForm").submit(function(event){
		submitForm();
		return false;
	});
 });

 function myFunction(){
	$("#temp").modal('hide');
	$("#contact-modal").modal('show');

  }
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

