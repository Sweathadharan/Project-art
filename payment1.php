<?php
include("includes/db.php");

if(isset($_GET['pay_id']) && ($_GET(['amount'])) && ($_GET(['name'])))  {
    $pay_id = $_GET['pay_id'];
    $amount = $_GET['amount'];
    $name = $_GET['name'];

    $query ="INSERT INTO razorpay ('name',amount,'pay_id','pay_status') VALUES ('$name','$amount',$amount','$pay_id','success')";
    mysqli_query($con, $query);

}
?>