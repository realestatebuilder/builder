<div class="footer">

<div class="container">



<div class="row">
            <div class="col-lg-3 col-sm-3">
                   <h4>Information</h4>
                   <ul class="row">
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="index.php">Home</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="about.php">About</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a href="contact.php">Contact</a></li>
                <li class="col-lg-12 col-sm-12 col-xs-3"><a style="cursor:pointer" onclick="formFunction()">Requirements</a></li>

              </ul>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Newsletter</h4>
                    <p>Get notified about the latest properties in our marketplace.</p>
                    <form class="form-inline" role="form" action="addguest.php?pg=index.php" method="POST">
                            <input type="email" name="mailid_guest" placeholder="Enter Your email address" class="form-control" required>
                                <button class="btn btn-success" type="submit">Notify Me!</button></form>
            </div>
            
            <div class="col-lg-3 col-sm-3">
                    <h4>Follow us</h4>
                    <a href="#"><img src="images/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="images/twitter.png" alt="twitter"></a>
                    <a href="#"><img src="images/linkedin.png" alt="linkedin"></a>
                    <a href="#"><img src="images/instagram.png" alt="instagram"></a>
            </div>
<?php 	 
            include 'connection.php';

            $query2 = "select * from admins where admin_id = 0";
            $result2 = mysqli_query($con, $query2); 	

            while($admin_result = mysqli_fetch_assoc($result2))
            {
              $admin_address = $admin_result['admin_address'];
              $admin_email = $admin_result['admin_email'];
              $admin_contact = $admin_result['admin_contact'];
            }

 ?>
             <div class="col-lg-3 col-sm-3">
                    <h4>Contact us</h4>
                    <p><b>Mridha Real Estate</b><br>
                <span class="glyphicon glyphicon-map-marker"></span> <?php echo $admin_address; ?> <br>
                <span class="glyphicon glyphicon-envelope"></span> <?php echo $admin_email; ?><br>
                <span class="glyphicon glyphicon-earphone"></span> <?php echo $admin_contact; ?></p>
            </div>
        </div>
<p class="copyright">Copyright 2017. All rights reserved.	</p>


</div></div>

