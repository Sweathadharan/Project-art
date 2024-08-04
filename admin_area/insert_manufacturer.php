<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>


<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"></i> Dashboard / Insert Manufacturer

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->


<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Insert Manufacturer

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Manufacturer Name </label>

<div class="col-md-6">

<input type="text" name="manufacturer_name" class="form-control" required>

</div><br><br><br>

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Product Name </label>

<div class="col-md-6">

<input type="text" name="product_name" class="form-control" required>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Product description </label>

<div class="col-md-6">

<input type="text" name="product_des" value="" >


</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Manufacturer Image </label>

<div class="col-md-6">

<input type="file" name="manufacturer_image" class="form-control" required>

</div><br><br><br>

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> Product Price </label>

<div class="col-md-6">

<input type="text" name="manufacturer_image" class="form-control" required>

</div>

</div><!-- form-group Ends -->

<div class="form-group"><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="submit" class="form-control btn btn-primary" value=" Insert Manufacturer " >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])){

$manufacturer_name = $_POST['manufacturer_name'];

$manufacturer_top = $_POST['product_name'];

$manufacturer_des = $_POST['product_des'];

$manufacturer_image = $_FILES['manufacturer_image']['name'];

$tmp_name = $_FILES['manufacturer_image']['tmp_name'];


$selectquery="select * from supplier where supplier_name='$manufacturer_name'";

$execquery=mysqli_query($con,$selectquery);

if(mysqli_num_rows($execquery)>0)
{
echo "<script>alert('Manufactures alreasy exists')</script>";

echo "<script>window.open('index.php?view_manufacturers','_self')</script>";
}
else
{


move_uploaded_file($tmp_name,"manufacturer_images/$manufacturer_image");

$insert_manufacturer = "insert into suppliers (supplier_name,pro_name,pro_des,pro_image,pro_price) values ('$manufacturer_name','$manufacturer_top','$manufacturer_des','$manufacturer_image')";

$run_manufacturer = mysqli_query($con,$insert_manufacturer);

if($run_manufacturer){

echo "<script>alert('New Manufacturer Has Been Inserted')</script>";

echo "<script>window.open('index.php?view_manufacturers','_self')</script>";

}

}
}
?>

<?php } ?>