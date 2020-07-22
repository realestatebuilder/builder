<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<script src="js/jquery.min.js"></script>

<div class="row"><!--  1 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<ol class="breadcrumb" ><!-- breadcrumb Starts -->

<li class="active" >

<i class="fa fa-dashboard"></i> Dashboard / View Properties

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!--  1 row Ends -->

<div class="row" ><!-- 2 row Starts -->

<div class="col-lg-12" ><!-- col-lg-12 Starts -->

<div class="panel panel-default" ><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> View Properties

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->

<div class="panel-body" ><!-- panel-body Starts -->

<div class="table-responsive" ><!-- table-responsive Starts -->

<table class="table table-bordered table-hover table-striped" ><!-- table table-bordered table-hover table-striped Starts -->

<thead>

<tr>
<th>Featured</th>
<th>Property ID</th>
<th>Property Title</th>
<th>Property Image</th>
<th>Property Price</th>
<th>Property Availability</th>
<th>Property Address</th>
<th>Property Type</th>
<th>Property Delete</th>
<th>Property Edit</th>

</tr>

</thead>

<tbody>

<?php

$i = 0;

$get_pro = "select * from properties";

$run_pro = mysqli_query($con,$get_pro);

while($row_pro=mysqli_fetch_array($run_pro)){

$property_id = $row_pro['property_id'];

$pro_title = $row_pro['property_title'];

$pro_image = $row_pro['property_img1'];

$pro_availability = $row_pro['availability'];

$pro_address = $row_pro['property_address'];

$pro_type = $row_pro['property_type'];

$pro_price = $row_pro['price'];

$i++;

?>

<tr>

<td>
    <input type="checkbox" id="<?php echo $i; ?>" onchange="featured(this.id)">
</td>

<td><?php echo $i; ?></td>

<td><?php echo $pro_title; ?></td>

<td><img src="../images/properties/<?php echo $pro_image; ?>" width="60" height="60"></td>

<td> ₹ <?php echo $pro_price; ?> </td>

<td><?php echo $pro_availability; ?></td>

<td><?php echo $pro_address; ?></td>

<td><?php echo $pro_type; ?></td>

<td>

<a href="index.php?delete_product=<?php echo $property_id; ?>">

<i class="fa fa-trash-o"> </i> Delete

</a>

</td>

<td>

<a href="index.php?edit_product=<?php echo $property_id; ?>">

<i class="fa fa-pencil"> </i> Edit

</a>

</td>

</tr>

<?php } ?>


</tbody>


</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>

<script>
function featured(id)
{
    if(document.getElementById(id).checked)
    {
        $.ajax({
        url:"setfeatured.php",
        type:"POST",
        data: { "property_id" :  id},
        success:function(para)
        {
            console.log(para)
        }
        })
    }
    else
    {
        $.ajax({
        url:"unsetfeatured.php",
        type:"POST",
        data: { "property_id" :  id},
        success:function(para)
        {
            console.log(para)
        }
        })
    }
}
</script>