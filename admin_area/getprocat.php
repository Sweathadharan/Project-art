<?php
session_start();
if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {
$con=mysqli_connect("localhost","root","","ecom_store");
$category=$_REQUEST['q'];
$get_p_cats = "select p_cat_title from product_categories where cat_title='$category' and delete_tab=0";
$run_p_cats = mysqli_query($con,$get_p_cats);
$displaystring="<option value=0>----Select Product Category----</option>";
while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {
$p_cat_title=$row_p_cats['p_cat_title'];
$displaystring.="<option value='$p_cat_title' >$p_cat_title</option>";
}
echo $displaystring;
}

?>