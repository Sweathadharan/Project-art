<? ob_start();?>
<?php 
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>art</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
	
	<link rel='shortcut icon' href='images/favicon.png' type='image/png'>
    <link rel='apple-touch-icon' href='images/apple-touch-icon.png'>
    <?php
	require("csslink.php");
	?>
</head>

<body>
	 <?php
		$sessionuser=@$_SESSION['user_name'];
		if($sessionuser=="")
		{
	require("top.php");
		require("menuheader.php");
	require("menusearchbar.php");
	?>
	<div class="error-box-main">
					<div class="error-content">
                        <h2>Sorry</h2>
                        <p>Please Login</p>
                        
                    </div>
                </div>
    <?php
		}
		else
		{
		require("afterlogin.php");
		require("menuheader.php");
	require("menusearchbar.php");
	$sessionuser=$_SESSION['user_name'];
	$result=get_user_info($sessionuser);
	if($result)
	{
	while($rs=mysqli_fetch_array($result))
	{
	$customerid=$rs['customer_id'];
	}
	}
		
	?>	
    
    


    

	<?php
	$proname=$_REQUEST['pro'];
	$link=mysqli_connect('localhost',"root","","ecom_store") ;
	if($link)
	{
	$sqlquery="select * from products where product_title='$proname' and delete_tab=0";
	$execquery=mysqli_query($link,$sqlquery);
	if(mysqli_num_rows($execquery)>0)
	{
	while($rs=mysqli_fetch_array($execquery))
	{
	$proid=$rs['product_id'];
	$pcatid=$rs['p_cat_id'];
	$catid=$rs['cat_id'];
	$manufacturerid=$rs['manufacturer_id'];
	$productname=$rs['product_title'];
	$producturl=$rs['product_url'];
	$productimg1=$rs['product_img1'];
	$arr=explode(".",$productimg1);
	$pimg=$arr[0];
	$pext=$arr[1];
	if($pext=="jpeg")
	{
	$pext="jpg";
	$pimage1=$pimg.".".$pext;
	}
	else
	{
	$pimage1=$productimg1;
	}
	
	
	$productimg2=$rs['product_img2'];
	$arr1=explode(".",$productimg1);
	$pimg1=$arr1[0];
	$pext1=$arr1[1];
	if($pext1=="jpeg")
	{
	$pext1="jpg";
	$pimage2=$pimg1.".".$pext1;
	}
	else
	{
	$pimage2=$productimg2;
	}
	
	
	$productimg3=$rs['product_img3'];
	$arr2=explode(".",$productimg1);
	$pimg2=$arr2[0];
	$pext2=$arr2[1];
	if($pext2=="jpeg")
	{
	$pext2="jpg";
	$pimage3=$pimg2.".".$pext2;
	}
	else
	{
	$pimage3=$productimg3;
	}
	
	
	
	$productprice=$rs['product_price'];
	$productpsp=$rs['product_psp_price'];
	$productdesc=$rs['product_desc'];
	$productfetaures=$rs['product_features'];
	$productvideo=$rs['product_video'];
	$productkeywords=$rs['product_keywords'];
	$productlabel=$rs['product_label'];
	
	}
	}
	else
	{
	echo "Records Not Available";
	}
	}
	else
	{
	echo "Server is Not Connected";
	
	}
	
	?>

	<!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop Detail</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
	
    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="admin_area/product_images/<?php echo $pimage1;?>" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="admin_area/product_images/<?php echo $pimage2;?>" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="admin_area/product_images/<?php echo $pimage3;?>" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="admin_area/product_images/<?php echo $pimage1;?>" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="admin_area/product_images/<?php echo $pimage2;?>" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="admin_area/product_images/<?php echo $pimage3;?>" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php echo $productname;?></h2>
                        <h5> <del></del> Rs.<?php echo $product_psp_price;?></h5>
                        <p class="available-stock"><span> Stock Available / <a href="#"></a></span>
                            <p>
                                <h4>Short Description:</h4>
                                <p><?php echo $productdesc;?></p>
                                
								
                                <div class="price-box-bar">
                                    <div class="cart-and-bay-btn">
<a class="btn hvr-hover" href="insert_wishlist.php?pro=<?php echo $productname;?>&pid=<?php echo $proid;?>"><i class="fas fa-heart"></i> Add to wishlist</a>
                                        
                                        <a class="btn hvr-hover" data-fancybox-close="" href="insert_cart.php?q=<?php echo $productname;?>">Add to cart</a>
                                    </div>
                                </div>

                                
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Related Products</h1>
						<hr>
                        <p></p>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
					
		<?php			
		$sqlquery="select * from products where p_cat_id='$pcatid' and delete_tab=0";
	$execquery=mysqli_query($link,$sqlquery);
	
	if(mysqli_num_rows($execquery)>0)
	{
	while($rs=mysqli_fetch_array($execquery))
	{
	$p_title=$rs['product_title'];
	$p_image=$rs['product_img1'];
	$p_price=$rs['product_psp_price'];
	$arr=explode(".",$p_image);
	$iname=$arr[0];
	$iext=$arr[1];
	if($iext=="jpeg")
	{
	$iext="jpg";
	$pimagename=$iname.".".$iext;
	}
	else
	{
	$pimagename=$p_image;
	
	}
echo "<div class='item'>";
	echo "<div class='products-single fix'>";
        echo "<div class='box-img-hover'>";
		    echo "<img src='admin_area/product_images/$pimagename' class='img-fluid' alt='Image'>";
echo "<div class='mask-icon'>";
echo "<ul>";
echo "<li><a href='shopdetail.php?pro=$p_title' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>";
echo "<li><a href='wishlist.php?pro=$p_title' data-toggle='tooltip' data-placement='right' title='Add to Wishlist'><i class='far fa-heart'></i></a></li>";
echo "<li><a href='' data-target='#enquiryModel' data-toggle='tooltip' data-placement='right' title='Enquiry'><i class='fa fa-envelope' aria-hidden='true'></i></a></li>";
echo "</ul>";
echo "<a class='cart' href='cart.php?pro=$p_title'>Add to Cart</a>";
echo "</div>";
echo "</div>";
echo "<div class='why-text'>";
echo "<h4 style='text-align:center;'>$p_title</h4>";
echo "<h5 style='text-align:center;'>$p_price</h5>";
echo "</div></div></div>";
	
	
	}
	
	
	}
	else
	{
	echo "Records Not Available";
	}		
					
    ?>					
					
                       
                        
                        
                        
                        
                        
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- End Cart -->
    <?php
		}
		?>

    <?php require("instagramfeed.php");?>
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>
<?php require("jslink.php");?>   
</body>
</html>
<? ob_flush();?>