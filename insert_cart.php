<?php 
session_start(); 
require("db_func.php");
$sessionuser=@$_SESSION['user_name'];
$product=$_REQUEST['q'];
$result=get_user_info($sessionuser);
if($result)
{
while($rs=mysqli_fetch_array($result))
{
$customerid=$rs['customer_id'];
}
}
$selectquery="select * from products where product_title='$product'"; 	
$squery="select * from products where product_title='$product'"; 
$equery=mysqli_query($link,$squery);
while($rs=mysqli_fetch_array($equery))
{
 $proid=$rs['product_id'];
 $procatid=$rs['p_cat_id'];
 $catid=$rs['cat_id'];
 $productname=$rs['product_title'];
 $productimg1=$rs['product_img1'];
 $product_psp_price=$rs['product_psp_price'];
 }

$cartresult=insert_cartlist($proid,$productname,$catid,$procatid,$product_psp_price,$productimg1,$customerid,$sessionuser);
if($cartresult)
{
echo "<script>alert('Added to Cart');location.href='cart.php';</script>";


/*$delwishlist=remove_wishlist($proid,$customerid);
if($delwishlist)
{
	echo "delete";
//header("location:".$_SERVER['HTTP_REFERER']);
}
else
{
	echo "not delete";
//header("location:".$_SERVER['HTTP_REFERER']);
}*/
}
else
{
	echo "<script>alert('This product is already available in your cart');location.href='cart.php';</script>";

//header("location:".$_SERVER['HTTP_REFERER']);
}
?>
    
