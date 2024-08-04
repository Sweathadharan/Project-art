<? ob_start();?>
<?php 
session_start(); 
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
else{	
require("db_func.php");	
	$result=get_user_info($sessionuser);
	if($result)
	{
	while($rs=mysqli_fetch_array($result))
	{
	$customerid=$rs['customer_id'];
	}
	}
	$cartid=$_REQUEST['cart_id'];
	$quantity=$_REQUEST['new_quantity'];
	$link=mysqli_connect('localhost',"root","","ecom_store") ;
	if($link)
	{
		$fetchquery="select product_psp_price from products where product_id='$cartid'";
		$result=mysqli_query($link,$fetchquery);
		list($psp_price)=mysqli_fetch_array($result);
		$upsp=$quantity*$psp_price;
		
		$updatequery="update cart set quantity='$quantity',total='$upsp' where product_id='$cartid' and customer_id='$customerid'";
		$res=mysqli_query($link,$updatequery);
		if(!$res)
		{
			echo false;
		}
		else
		{
			echo true;
		}	
	}
	else
	{
	echo mysqli_error($link);
	}
}
?>