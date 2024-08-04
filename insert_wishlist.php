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
	<?php
    if(@$_SESSION['user_name']=='')
	{
	?>
	<div class="error-box-main">
					<div class="error-content">
                        <h2>Sorry</h2>
                        <p>Please Login</p>
                        
                    </div>
                </div>
    <?php
	}
	else
	{
	$sessionuser=$_SESSION['user_name'];
	$product=$_REQUEST['pro'];
	$pid=$_REQUEST['pid'];
	$result=get_user_info($sessionuser);
	if($result)
	{
	while($rs=mysqli_fetch_array($result))
	{
	$customerid=$rs['customer_id'];
	}
	}
	
	$wlresult=insert_wishlist($customerid,$pid);
	if($wlresult)
	{
	echo "<script>alert('Added to wishlist');location.href='wishlist.php';</script>";
	
	}
	
	?>
    

    
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Wishlist</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $_SERVER['HTTP_REFERER'];?>">Product</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    
    <?php
	}
	?>
	 <?php require("instagramfeed.php");?>
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
	<?php require("jslink.php");?>   
    
</body>
</html>
