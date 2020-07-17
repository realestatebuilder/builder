<script>
$(document).ready(function(){
    var showModal = '<?php echo $show_modal; ?>';
    if(showModal=="1")
    {
        $("#exampleModal").modal("show");
    }


  $("#submitRequest").click(function(){
    console.log("Sarang Started")

    name = $('#name').val();
    email = $('#email').val();
    mobNo = $('#mobileNo').val();
    bhk = $('#bhk').val();
    price = $('#price').val();
    delivery_type = $('#deliverytype').val();
    data = {
        "fname":name,
        "email":email,
        "mobNo":mobNo,
        "bhk":bhk,
        "price":price,
        "deliverytype":delivery_type
        }
    $.ajax({
        url: "submitrequest.php", 
        method:"post",
        data: data,
        success: function(para)
        {
            if(para == "success")
            {
                alert("Successfull !")
                document.location.replace("index.php")
            }
            else
            {
                console.log("This is - ",para)
                alert("Failed! Please try again")
                document.location.replace("index.php")
            }
           
        }
    });
  });
});
</script>