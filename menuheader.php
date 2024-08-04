<?php
 require("db_func.php");
 ?>
<header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo.jpg" class="logo" alt=""></a> 
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                         <?php category_tree();?>
                        <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">Shop</a>
                            <ul class="dropdown-menu">
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="myaccount.php">My Account</a></li>
                                <li><a href="wishlist.php">Wishlist</a></li>
                                <li><a href="shop.php">Shop</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="http://localhost/bidding/bidding/">Bidding</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li class="side-menu"><a href="#">
						<i class="fa fa-shopping-bag"></i>
                            <!--<span class="badge">4</span>-->
					</a></li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
			                           
<?php 

$link=mysqli_connect('localhost',"root","","ecom_store") ;
$query="select * from cart ";
$grandtotal=0;
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res)>0)
{
  while($rs=mysqli_fetch_array($res))
  {
  $total=$rs['total'];
  $productname=$rs['productname'];
  $product_psp_price=$rs['product_psp_price'];
  $quantity=$rs['quantity'];
  $p_image=$rs['product_img1'];
  $grandtotal=$grandtotal+$total;
  
?>
 
			
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times-circle"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>
                            <a href="#" class="photo"><?php echo "<img src='admin_area/product_images/$p_image' class='img-fluid' alt='Image'>"; ?>
	</a>
                            <h6><a href="#"><?php echo $productname; ?> </a></h6>
                            <p><?php echo $quantity; ?>x - <span class="price">Rs.<?php echo $product_psp_price; ?></span></p>
                        </li>
                        <li class="total">
                            <a href="cart.php" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                            <span class="float-right"><strong>Total</strong>: Rs.<?php echo $total; ?></span>
                        </li>
						
                    </ul>
					<?php } ?><span class="float-right"><strong>Grandtotal</strong>: Rs.<?php echo $grandtotal; ?></span>
                </li>
            </div>
<?php } ?>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>