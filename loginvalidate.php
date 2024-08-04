<?php
require("includes/dbcon.php");
session_start();
$email=$_REQUEST['email'];
$upwd=$_REQUEST['password'];
$query="select user_id,user_name from register where mail_id='$email' and password='$upwd'";
$exec=mysqli_query($con,$query);
if(mysqli_num_rows($exec)>0)
{
	list($userid,$username)=mysqli_fetch_array($exec);
$_SESSION['userid']=$userid;
$_SESSION['username']=$username;	
$_SESSION['sessname']=$email;	
echo("<script>alert('Login Success');</script>");
echo "<script>location.href='index.php';</script>";
}
else
{
echo("<script>alert('Invalid UserName or Password');</script>");
echo "<script>location.href='signin.php';</script>";
	 
}

?>


