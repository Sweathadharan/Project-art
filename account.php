<?php 
session_start(); 
$con = mysqli_connect("localhost","root","","ecom_store");
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
    <link rel='apple-touch-icon' href='images/logo.png'>
    <?php
	require("csslink.php");
	?>

<script src="js/jquery.min.js"> </script>

<script src="js/bootstrap.min.js"></script>
	<style type="text/css">
	.label {

text-decoration : none;

position: absolute;

top: 50px;

padding-left:51px;

z-index: 20;

}


.label .label-background {

position: absolute;
top:0;
right:0;
}

.label .thelabel {

position: relative;
width: 100px;
padding: 6px 50px 6px 15px;
margin: 40px 50px 10px -71px;
color: #fff;
font-size:18px;
font-weight:bold;
background-color: #337ab7;
text-shadow: 0px 1px 2px #bbb ;

}

.label .thelabel:before,
.label .thelabel:after {
content: '';
position: absolute;
width:0;
height:0;
}

.label .thelabel:after {
left: 0px;
top: 100%;
border-width : 5px 10px;
border-style: solid;
border-color: #2d7b6b #2d7b6b transparent transparent;
}

.label.sale {
top: 0;

}

/* tick and cross icons styles */


.tick1{
font-size:18px !important;
color:red;
}

.cross1{
font-size:18px !important;
color:red;
}

.tick2{
font-size:18px !important;
color:red;
}

.cross2{
font-size:18px !important;
color:red;
}

/* Password Strength Checker Styles */

#meter_wrapper{
border:1px solid grey;
width:202px;
height:20px;
margin:0;
border-radius:3px;

}


#meter{
width:0px;
height:18px;
border-radius:2px;

}


#pass_type{
font-size:15px;
margin-top:10px;
position:absolute;
top:0;
right:90px;
margin-bottom:10%;
color:grey;

}


.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
}

</style>
	

<script>

$(document).ready(function(){

$('.tick1').hide();
$('.cross1').hide();

$('.tick2').hide();
$('.cross2').hide();


$('.confirm').focusout(function(){

var password = $('#pass').val();

var confirmPassword = $('#con_pass').val();

if(password == confirmPassword){

$('.tick1').show();
$('.cross1').hide();

$('.tick2').show();
$('.cross2').hide();



}
else{

$('.tick1').hide();
$('.cross1').show();

$('.tick2').hide();
$('.cross2').show();


}


});


});

</script>

<script>
function myKeyPress()
{
check_pass();
}

function check_pass() {
 var val=document.getElementById("pass").value;
 var meter=document.getElementById("meter");

 var no=0;
 if(val!="")
 {
// If the password length is less than or equal to 6
if(val.length<=6)no=1;

 // If the password length is greater than 6 and contain any lowercase alphabet or any number or any special character
  if(val.length>6 && (val.match(/[a-z]/) || val.match(/\d+/) || val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)))no=2;

  // If the password length is greater than 6 and contain alphabet,number,special character respectively
  if(val.length>6 && ((val.match(/[a-z]/) && val.match(/\d+/)) || (val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/)) || (val.match(/[a-z]/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))))no=3;

  // If the password length is greater than 6 and must contain alphabets,numbers and special characters
  if(val.length>6 && val.match(/[a-z]/) && val.match(/\d+/) && val.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/))no=4;

  if(no==1)
  {
   $("#meter").animate({width:'50px'},300);
   meter.style.backgroundColor="red";
   document.getElementById("pass_type").innerHTML="Very Weak";
  }

  if(no==2)
  {
   $("#meter").animate({width:'100px'},300);
   meter.style.backgroundColor="#F5BCA9";
   document.getElementById("pass_type").innerHTML="Weak";
  }

  if(no==3)
  {
   $("#meter").animate({width:'150px'},300);
   meter.style.backgroundColor="#FF8000";
   document.getElementById("pass_type").innerHTML="Good";
  }

  if(no==4)
  {
   $("#meter").animate({width:'200px'},300);
   meter.style.backgroundColor="#00FF40";
   document.getElementById("pass_type").innerHTML="Strong";
  }
 }

 else
 {
  meter.style.backgroundColor="";
  document.getElementById("pass_type").innerHTML="";
 }
}



function isAlfa(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122)) {
        return false;
    }
    return true;
}

</script>

	
  </head>
  <body onLoad='return tickhs();'>
  
  <?php require("top.php");?>
   	<?php require("menuheader.php");?>
	<?php require("menusearchbar.php");?>
	 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Account Page</h2>
                    
                </div>
            </div>
        </div>
    </div>
 
 <br>
  <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="aa-myaccount-area">         
            <div class="row">
              <div class="col-md-6">
                <div class="aa-myaccount-register"> 
             
                  <h2><center><strong>Register Form</strong></center>
				<hr></h2>
              
<form name='formregister' action="account.php" method="post" enctype="multipart/form-data" ><!-- form Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label> Name</label>

<input type="name" class="form-control" minlength="3"  name="c_name" onKeyPress='return isAlfa(event);' required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>  Email</label>

<input type="email" class="form-control" name="c_email" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>  Password </label>

<div class="input-group"><!-- input-group Starts -->



<input type="password" class="form-control" id="pass" name="c_pass" required onKeyUp='return myKeyPress();'>



</div><!-- input-group Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label> Confirm Password </label>

<div class="input-group"><!-- input-group Starts -->





<input type="password" class="form-control confirm" id="con_pass" required>

</div><!-- input-group Ends -->

</div><!-- form-group Ends -->


<div class="form-group"><!-- form-group Starts -->

<label>  Country </label>

<input type="text" class="form-control" name="c_country" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>  City </label>

<input type="text" class="form-control" name="c_city" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>  Contact </label>

<input type="tel" class="form-control" name="c_contact" pattern="[9-0] {10}" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label>  Address </label>

<input type="text" class="form-control" name="c_address" required>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->



</div><!-- form-group Ends -->



<div class="text-center"><!-- text-center Starts -->

<button type="submit" name="register" class="btn btn-primary">

<i class="fa fa-user-md"></i> Register</button>
<a href='index.php'></a>



</div><!-- text-center Ends -->

</form>
				  
                </div>
              </div>
            </div>          
         </div>
       </div>
     </div>
   </div>
  <br><br>
  
  

 
 
    <?php require("instagramfeed.php");?>
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>
	
	
    <?php
	require("jslink.php");
	?>    
 
  </body>
</html>


<?php

if(isset($_POST['register'])){

//$secret = "6Lc-WxYUAAAAAN5j2OdDsryWwGfREg5eeuZFpKMv";

//$response = $_POST['g-recaptcha-response'];

//$remoteip = getenv("REMOTE_ADDR");

//echo $remoteip.",".$response;
//$url = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$remoteip");

//echo $url;
//$result = json_decode($url, TRUE);

//if($result['success'] == 1){

$c_name = $_POST['c_name'];

$c_email = $_POST['c_email'];

$c_pass = $_POST['c_pass'];

$c_country = $_POST['c_country'];

$c_city = $_POST['c_city'];

$c_contact = $_POST['c_contact'];

$c_address = $_POST['c_address'];

$c_image = $_FILES['c_image']['name'];

$c_image_tmp = $_FILES['c_image']['tmp_name'];

//$c_ip = getRealUserIp();

move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");

$get_email = "select * from customers where customer_email='$c_email'";

$run_email = mysqli_query($con,$get_email);

$check_email = mysqli_num_rows($run_email);

if($check_email == 1){

//echo "<script>alert('This email is already registered, try another one')</script>";

exit();

}

$generator = "1357902468";
  
    
    $result = "";
  
    for ($i = 1; $i <= 6; $i++) {
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }
  
    
    




$customer_confirm_code = $result;

$subject = "Email Confirmation Message";

$from = "eswarm.lst@gmail.com";

$message = "

<h2>
Email Confirmation By Computerfever.com $c_name
</h2>

<a href='localhost/ecom_store/customer/my_account.php?$customer_confirm_code'>

Click Here To Confirm Email

</a>

";

$headers = "From: $from \r\n";

$headers .= "Content-type: text/html\r\n";

@mail($c_email,$subject,$message,$headers);

$insert_customer = "insert into customers (customer_name,customer_email,customer_pass,customer_country,customer_city,customer_contact,customer_address,customer_image,customer_confirm_code) values ('$c_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_address','$c_image','$customer_confirm_code')";


$run_customer = mysqli_query($con,$insert_customer);

$sel_cart = "select * from cart where customer_confirm_code='$customer_confirm_code'";

$run_cart = mysqli_query($con,$sel_cart);

$check_cart = mysqli_num_rows($run_cart);

if($check_cart>0){

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('checkout.php','_self')</script>";

}else{

$_SESSION['customer_email']=$c_email;

echo "<script>alert('You have been Registered Successfully')</script>";

echo "<script>window.open('index.php','_self')</script>";


}


/*}
else{

//echo "<script>alert('Please Select Captcha, Try Again')</script>";

}*/


}

?>


