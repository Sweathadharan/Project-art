<? ob_start();?>
<?php
session_start();
require("db_func.php");
$username=$_REQUEST['uname'];
$password=$_REQUEST['upwd'];
$res=check_user($username,$password);
if($res)
{	
	$_SESSION['user_name']=$username;
	header('location:'.$_SERVER['HTTP_REFERER']);
}
else
{
header('location:error.php');
}

?>

<? ob_flush();?>