<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['delete_coupon'])){

$delete_id = $_GET['delete_coupon'];

$delete_coupon = "update voucher set delete_tab=1 where coupon_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_coupon);

if($run_delete){

echo "<script>alert('One Coupon Has Been Deleted')</script>";

echo "<script> window.open('index.php?view_voucher','_self') </script>";

}

}

?>


<?php } ?>