$(document).ready(function(){	
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