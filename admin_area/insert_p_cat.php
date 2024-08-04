<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li>

<i class="fa fa-dashboard"></i> Dashboard / Insert Products Category

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading" ><!-- panel-heading Starts -->

<h3 class="panel-title" ><!-- panel-title Starts -->

<i class="fa fa-money fa-fw" ></i> Insert Product Category

</h3><!-- panel-title Ends -->


</div><!-- panel-heading Ends -->


<div class="panel-body" ><!-- panel-body Starts -->

<form class="form-horizontal" action="" method="post" enctype="multipart/form-data" ><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Category Name</label>

<div class="col-md-6" >

<select name="cat_title" class="form-control" required>
<option value=0>---Select Category---</option>
<?php
$query1="select distinct cat_title from categories where delete_tab=0";

$exec1=mysqli_query($con,$query1);
while($rs=mysqli_fetch_array($exec1))
{
?>
<option value="<?php echo $rs['cat_title'];?>"><?php echo $rs['cat_title'];?></option>
<?php
}
?>
</select>

</div>

</div>

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Product Category Name</label>

<div class="col-md-6" >

<input type="text" name="p_cat_title" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" >Show as Top Product Category</label>

<div class="col-md-6" >

<input type="radio" name="p_cat_top" value="yes" >

<label> Yes </label>

<input type="radio" name="p_cat_top" value="no" >

<label> No </label>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select Product Category Image <br>
<font color='red'>275 * 350</font></label>

<div class="col-md-6" >

<input type="file" name="p_cat_image" class="form-control" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Submit Now" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->


</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends -->

<?php

if(isset($_POST['submit'])=="Submit Now")
{
$cat_title=$_POST['cat_title'];
$p_cat_title = $_POST['p_cat_title'];
$p_cat_top = $_POST['p_cat_top'];

$select_query="select * from product_categories where cat_title='$cat_title' and p_cat_title='$p_cat_title'";
$execQuery=mysqli_query($con,$select_query);
if(mysqli_num_rows($execQuery)>0)
{
echo "<script>alert('Same Category and Product Available')</script>";
echo "<script>window.open('index.php?view_p_cats','_self')</script>";
}
else
{
$p_cat_image = $_FILES['p_cat_image']['name'];
$temp_name = $_FILES['p_cat_image']['tmp_name'];
move_uploaded_file($temp_name,"procat_images/$p_cat_image");
$insert_p_cat = "insert into product_categories (cat_title,p_cat_title,p_cat_top,p_cat_image) values ('$cat_title','$p_cat_title','$p_cat_top','$p_cat_image')";
$run_p_cat = mysqli_query($con,$insert_p_cat);
if($run_p_cat){
echo "<script>alert('New Product Category Has been Inserted')</script>";
echo "<script>window.open('index.php?view_p_cats','_self')</script>";
}
}
}
} ?>