<?php 
session_start(); 
$sessionuser=$_SESSION['user_name'];
if($sessionuser=="")
{
 echo "<script>alert('Pls Login to Process');</script>";
 header("location:".$_SERVER['HTTP_REFERER']);
}
else
{
$product=$_REQUEST['pro'];
$customer=$_REQUEST['cus'];
require("db_func.php");
$res=remove_cartlist($product,$customer);
if($res)
{
header("location:".$_SERVER['HTTP_REFERER']);
}
}
?>


