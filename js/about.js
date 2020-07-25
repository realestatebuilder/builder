$(document).ready(function(){	
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