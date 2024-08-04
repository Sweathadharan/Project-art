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

<i class="fa fa-dashboard"></i> Dashboard / View Suppliers

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> View Suppliers

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<div class="table-responsive"><!-- table-responsive Starts --->

<table class="table table-bordered table-hover table-striped"><!-- table table-bordered table-hover table-striped Starts -->

<thead><!-- thead Starts -->

<tr>

<th>Supplier Id:</th>
<th>Supplieer Title:</th>
<th>product name :</th>
<th>Product description:</th>
<th>Product Image:</th>
<th>Product Price:</th>
<

</tr>

</thead><!-- thead Ends -->

<tbody><!-- tbody Starts -->

<?php

$i = 0;

$get_manufacturers = "select * from supplier";

$run_manufacturers = mysqli_query($con,$get_manufacturers);

while($row_manufacturers = mysqli_fetch_array($run_manufacturers)){

$manufacturer_id = $row_manufacturers['supplier_id'];

$manufacturer_title = $row_manufacturers['supplier_name'];

$manufacturer_name = $row_manufacturers['pro_name'];

$manufacturer_category = $row_manufacturers['pro_des'];

$manufacturer_img = $row_manufacturers['pro_image'];

$manufacturer_price = $row_manufacturers['pro_price'];


$i++;

?>

<tr>

<td><?php echo $i; ?></td>

<td><?php echo $manufacturer_title; ?></td>
<td><?php echo $manufacturer_name; ?></td>
<td><?php echo $manufacturer_category; ?></td>
<td><?php echo $manufacturer_img; ?></td>
<td><?php echo $manufacturer_price; ?></td>

 
<td>

<a href="index.php?edit_manufacturer=<?php echo $manufacturer_id; ?>">



</a>

</td>

</tr>

<?php } ?>

</tbody><!-- tbody Ends -->

</table><!-- table table-bordered table-hover table-striped Ends -->

</div><!-- table-responsive Ends --->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php } ?>