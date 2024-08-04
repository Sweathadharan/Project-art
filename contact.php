
<?php
$con= mysqli_connect('localhost',"root","","ecom_store") ;
$email=$_REQUEST["email"];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];
	$iquery="insert into contact_us(contact_email,contact_heading,contact_desc) values('$email','$subject','$message')";
$exec1=mysqli_query($con,$iquery);	



if($exec1)
{
echo("<script>alert('Inserted Success');</script>");
echo "<script>location.href='index.php';</script>";
	
}
else
{
die("Error:".mysqli_error($con));
}


?>