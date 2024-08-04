<?php 
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>art</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel='shortcut icon' href='images/favicon.png' type='image/png'>
    <link rel='apple-touch-icon' href='images/apple-touch-icon.png'>
    <?php
	require("csslink.php");
	?>
    <style>
	
.addressmap h2{
         text-align:center;
		 padding-top:40px;
		 font-size:30px;
		 
}

@media only screen and (max-width: 600px) {
  .addressmap h2 {
    text-align:center;
		 padding-top:40px;
		 font-size:15px;
  }
}
	</style>
    
</head>

<body>
	<?php
		$sessionuser=@$_SESSION['user_name'];
		if($sessionuser=="")
		{
		require("top.php");
		}
		else
		{
		require("afterlogin.php");
		}
	?>	
   	<?php require("menuheader.php");?>
	<?php require("menusearchbar.php");?>
	 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Contact Us</h2>
                    
                </div>
            </div>
        </div>
    </div>

    <div style="height:100px;" class="addressmap">
             <h2><strong>For the Best Services!......</strong></h2>
            
    </div>
	
<div class="aa-contact-map" style="margin-left:10%;margin-right:10%;">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15645.481586631518!2d77.88559671658889!3d11.38062120650955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba96191aa62873b%3A0xcbcc6272306596d2!2sTiruchengode%2C%20Tamil%20Nadu%20637211!5e0!3m2!1sen!2sin!4v1635403999430!5m2!1sen!2sin" width="1200" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
           </div>
    <!-- Start Contact Us  -->
    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <div class="contact-info-left">
                        <h2>CONTACT INFO</h2>
                        <p>Add Information</p>
                        <ul>
                            <li>
                                <p><i class="fas fa-map-marker-alt"></i>Address: R gallery Pvt.Ltd <br>Chennai<br>  </p>
                            </li>
                            <li>
                                <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888706670">+91 9244336638</a></p>
                            </li>
                            <li>
                                <p><i class="fas fa-envelope"></i>Email: <a href="mailto:
                                theaceteas@gmail.com">theart@gmail.com</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="contact-form-right">
                       
                        <p>CONTACT US</p>
						<form name="contactForm" id="contactForm" action="contact.php" method="post">
                        
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required data-error="Please enter your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="textarea" class="form-control" id="message" name="messege" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="submit-button text-center">
									    <button type="submit" class="btn hvr-hover" id="submit" value="submit">Send Message</button>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Cart -->
 <?php require("instagramfeed.php");?>
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>
	
	 <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
    <?php
	require("jslink.php");
	?>    
  
</body>

</html>