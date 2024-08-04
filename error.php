<?php 
session_start();
if(@$_SESSION['user_name']=='')
{
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
    <style type="text/css">
	.error-box-main{
	padding-top:50px;
	padding-bottom:50px;
    width:100%;
	
	border:1px solid #d33b33;
	
}
.error-content{
	padding-top:50px;
	padding-bottom:50px;
	 width:50%;
     padding: 20px;
     background: rgba(0, 53, 68, 0.1);
	margin-left:25%;
	
}
 .error-content h2{
     font-size: 22px;
     font-weight: 700;
	 text-align:center;
}
 .error-content p{
     margin-bottom: 15px;
	 font-size: 22px;
     font-weight: 700;
	 text-align:center;
}
 .error-content ul li{
     margin-bottom: 12px;
}
 .error-content ul li p{
     font-size: 26px;
     color: #222222;
     font-weight: 300;
     padding-right: 16px;
     padding-left: 25px;
     line-height: 24px;
     position: relative;
}
 .error-content ul li p i{
     position: absolute;
     left: 0;
     top: 5px;
     padding-right: 6px;
     color: #d33b33;
}
 .error-content ul li p a:hover{
     color: #d33b33;
}


</style>

</head>
<body>
<?php require("top.php");?>
   	<?php require("menuheader.php");?>
	<?php require("menusearchbar.php");?>
  
  <div class="error-box-main">
					<div class="error-content">
                        <h2>Sorry</h2>
                        <p>Please Login</p>
                        <ul>
                            
                            
                            <li>
                                <p><a href="<?=$_SERVER['HTTP_REFERER'];?>">Go To Home Page</a></p>
                            </li>
                        </ul>
                    </div>
                </div>
    
     

    

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
<?php
}
else
{
  $sessionuser=$_SESSION['user_name'];
  header('location:'.$_SERVER['HTTP_REFERER']);
  }
  ?>