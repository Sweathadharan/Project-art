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
		}
		else
		{
		require("afterlogin.php");
		}
	?>	
   	<?php require("menuheader.php");?>
	<?php require("menusearchbar.php");?>

   
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Shop</h2>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="" method="GET">
                                    <div class="input-group mb-3">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data">
										<button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </form>

							
							
							
                                  
                                
                        </div>
<div class="filter-sidebar-left">
<div class="title-left">
<h3>Categories</h3>
</div>
 <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
 
 <?php sidebar_category();?>
 
 
																
                                
                                
                                
</div>
</div>
    <div class="filter-price-left">
        <div class="title-left">
        <h3>Price</h3>
        </div>
                                <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="">Starting price</label>
                                    <input type="text" name="start_price" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "100";} ?>" class="form-control">
                                </div><br/>
                                <div class="col-md-4">
                                    <label for="">Ending price</label>
                                    <input type="text" name="end_price" value="<?php if(isset($_GET['end_price'])){echo $_GET['end_price']; }else{echo "900";} ?>" class="form-control">
                                </div>
                                <div class="col-md-4">
                                     <br/>
									 <br>
                                    <button type="submit" class="btn btn-primary px-4">Filter</button>
                                </div>
                            </div>
                        </form>


    </div>
	</div>
    </div>
    <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
        <div class="right-product-box">
        <div class="product-item-filter row">
        <div class="col-12 col-sm-8 text-center text-sm-left">
      <div class="toolbar-sorter-right">
	  
     <!--  <span>Showing all  results </span>
  <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
		<option data-display="Select">Nothing</option>
		<option value="1">Popularity</option>
		<option value="2">High Price → High Price</option>
		<option value="3">Low Price → High Price</option>
		<option value="4">Best Selling</option>
</select> -->
        </div> 
         <p style="font-size:20px;text-align:center;">Showing all  results</p>
        </div>
        <div class="col-12 col-sm-4 text-center text-sm-right">
        <ul class="nav nav-tabs ml-auto">
        <li>
         <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
        </li>
        <li>
        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
        </li>
        </ul>
        </div>
   </div>

<div class="row product-categorie-box">
<div class="tab-content">
<div role="tabpanel" class="tab-pane fade show active" id="grid-view">
	<div class="row">
	
	<?php product_grid_view();?>
	
    </div>
        </div>
<div role="tabpanel" class="tab-pane fade" id="list-view">
   <div class="list-view-box">
   <div class="row">
   <?php product_list_view();?>
  
 
  </div>
  </div>
                                    
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>

    

   <?php require("jslink.php");?>    
</body>

</html>