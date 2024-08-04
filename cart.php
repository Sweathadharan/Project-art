<? ob_start();?>
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
    <link rel='apple-touch-icon' href='images/logo.png'>
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
		require("menuheader.php");
	require("menusearchbar.php");
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
		require("afterlogin.php");
		require("menuheader.php");
	require("menusearchbar.php");
	$sessionuser=$_SESSION['user_name'];
	$result=get_user_info($sessionuser);
	if($result)
	{
	while($rs=mysqli_fetch_array($result))
	{
	$customerid=$rs['customer_id'];
	}
	}
		
	?>	
   	
	 
    
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    
              
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
						

                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Art</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Cancel</th>
                                </tr>
								

				
								
                            </thead>
                            <tbody>
                            <?php get_cart_data($customerid);?>    
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">

                            <br><br>
                            <!-- <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Apply Coupon</button>
                               
                            </div>
                            
                        </div>
                    </div>
                    <br><br>
                    <h3>Please Enter the proper voucher code</h3>
                </div> -->
                           </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                        <h3></h3>
                                                <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total </h5>
<?php 

$link=mysqli_connect('localhost',"root","","ecom_store") ;
$query="select product_psp_price from cart ";
$grandtotal=0;
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res)>0)
{
  while($rs=mysqli_fetch_array($res))
  {
  $product_psp_price=$rs['product_psp_price'];
  $grandtotal=$grandtotal+$product_psp_price;
  }
?>
                            <div class="ml-auto h5"> <?php echo "Rs: ".$grandtotal; ?> </div>
                        </div>
                        <hr> </div>
                </div>
<?php }?>
                <div class="col-12 d-flex shopping-box"><a href="checkout.php?event=check_product" class="ml-auto btn hvr-hover">Checkout</a> </div>
            </div>

        </div>
    </div>
	<?php
	}
	?>
    <!-- End Cart -->

	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>
    

    
   

   <?php
	require("jslink.php");
	?>   
</body>
</html>
<? ob_flush();?>