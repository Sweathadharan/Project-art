<? ob_start(); ?>
<?php
session_start();

?>

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
    <style type="text/css">
        .error-box-main {
            padding-top: 50px;
            padding-bottom: 50px;
            width: 100%;

            border: 1px solid #d33b33;

        }

        .error-content {
            padding-top: 50px;
            padding-bottom: 50px;
            width: 50%;
            padding: 20px;
            background: rgba(0, 53, 68, 0.1);
            margin-left: 25%;

        }

        .error-content h2 {
            font-size: 22px;
            font-weight: 700;
            text-align: center;
        }

        .error-content p {
            margin-bottom: 15px;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
        }

        .error-content ul li {
            margin-bottom: 12px;
        }

        .error-content ul li p {
            font-size: 26px;
            color: #222222;
            font-weight: 300;
            padding-right: 16px;
            padding-left: 25px;
            line-height: 24px;
            position: relative;
        }

        .error-content ul li p i {
            position: absolute;
            left: 0;
            top: 5px;
            padding-right: 6px;
            color: #d33b33;
        }

        .error-content ul li p a:hover {
            color: #d33b33;
        }
    </style>
</head>

<body>

    <?php
    $sessionuser = @$_SESSION['user_name'];
    if ($sessionuser == "") {
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
    } else {
        require("afterlogin.php");
        require("menuheader.php");
        require("menusearchbar.php");
        $sessionuser = $_SESSION['user_name'];
        $result = get_user_info($sessionuser);
        if ($result) {
            while ($rs = mysqli_fetch_array($result)) {
                $customerid = $rs['customer_id'];
            }
        }

    ?>



        <!-- Start All Title Box -->
        <div class="all-title-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Checkout</h2>

                    </div>
                </div>
            </div>
        </div>
        <!-- End All Title Box -->

        <!-- Start Cart  -->
        <div class="cart-box-main">
            <div class="container">
                <div class="row new-account-login">

                    <div class="col-sm-6 col-lg-6 mb-3">



                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-6 mb-3">
                        <div class="checkout-address">
                            <div class="title-left">
                                <h3>Delivery address</h3>
                            </div>
                            <form class="needs-validation" novalidate>
                               
                                <div class="mb-3">
                                    <label for="username">Username *</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="username" placeholder="" required>
                                        <div class="invalid-feedback" style="width: 100%;"> Your username is required. </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email Address *</label>
                                    <input type="email" class="form-control" id="email" placeholder="">
                                    <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address">Address *</label>
                                    <input type="text" class="form-control" id="address" placeholder="" required>
                                    <div class="invalid-feedback"> Please enter your shipping address. </div>
                                </div>
                                <div class="mb-3">
                                    <label for="address2">Address 2 *</label>
                                    <input type="text" class="form-control" id="address2" placeholder="">
                                </div>
                                <div class="row">
                                    <div class="col-md-5 mb-3">
                                        <label for="country">Country *</label>
                                        <select class="wide w-100" id="country">
                                            <option value="Choose..." data-display="Select">Choose...</option>
                                            <option value="India">India</option>
                                        </select>
                                        <div class="invalid-feedback"> Please select a valid country. </div>
                                    </div>
                                    <div class="col-md-4 mb-3">
                                        <label for="state">State *</label>
                                        <select class="wide w-100" id="state">
                                            <option data-display="Select">Choose...</option>
                                            <option>TamilNadu</option>
                                        </select>
                                        <div class="invalid-feedback"> Please provide a valid state. </div>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label for="zip">Zip *</label>
                                        <input type="text" class="form-control" id="zip" placeholder="" pattern="[0-9] {6}" required>
                                        <div class="invalid-feedback"> Zip code required. </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-lg-12">
                                    <div class="title"> <span>you can pay in Razor pay too</span> </div>
                                    <div class="col-12 d-flex shopping-box"><a href="pay.php" class="ml-auto btn hvr-hover">Pay with Razor pay</a> </div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <div class="payment-icon">
                                        <ul>
                                            <li><img class="img-fluid" src="images/payment-icon/1.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/2.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/3.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/5.png" alt=""></li>
                                            <li><img class="img-fluid" src="images/payment-icon/7.png" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
                        </div>
                        <hr class="mb-1">
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-6 mb-3">
                    <div class="row">



                        <div class="col-md-12 col-lg-12">
                            <div class="order-box">
                                <div class="title-left">
                                    <h3> order Details</h3>
                                </div>
                                <div>
                                    
                                    <div class="ml-auto font-weight-bold"> </div>
                                </div>
                                <?php

                                $link = mysqli_connect('localhost', "root", "", "ecom_store");
                                $query = "select * from cart ";
                                $grandtotal = 0;
                                $res = mysqli_query($link, $query);
                                if (mysqli_num_rows($res) > 0) {
                                    while ($rs = mysqli_fetch_array($res)) {
                                        $total = $rs['total'];
                                        $productname = $rs['productname'];
                                        $product_psp_price = $rs['product_psp_price'];
                                        $quantity = $rs['quantity'];
                                        
                                        $grandtotal = $grandtotal + $product_psp_price;

                                ?>
                                        <hr class="my-1">
                                        <div class="d-flex">
                                            <h4><?php echo $productname; ?> </h4>
                                            <div class="ml-auto font-weight-bold"> Rs. <?php echo $product_psp_price; ?>.00 </div>
                                        </div>
                                     
                                    <?php } ?>
                                    <hr>
                                    <div class="d-flex gr-total">
                                        <h5>Grand Total</h5>
                                        <div class="ml-auto h5"> Rs. <?php echo $grandtotal; ?>.00 </div>
                                    </div>
                                    <hr>
                            </div>
                        </div><?php } ?>
                    <div class="col-12 d-flex shopping-box"> <a href="checkout.php?e=place_order" class="ml-auto btn hvr-hover">Place Order</a> </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
        <?php
        if ($_GET['e'] == "place_order") {
            $get_products = "select * from products where product_title='$productname'";

            $run_products = mysqli_query($link, $get_products);

            $row_products = mysqli_fetch_array($run_products);


            $product_id = $row_products['product_id'];

            $product_price = $row_products['product_price']; ?>

        <?php
            $i = 1;
            $sql = "insert into pending_orders(customer_id,invoice_no,product_id,qty)			 
    values ($customerid,($i+1),$product_id,$quantity)";
            $query = mysqli_query($link, $sql);

            $i = 1;
            $sql1 = "insert into customer_orders (customer_id,invoice_no,due_amount,qty)			 
    values ($customerid,($i+1),100,$quantity)";
            $query1 = mysqli_query($link, $sql1);
        }

        ?>


        <!-- End Cart -->
    <?php
    }
    ?>
    <?php require("instagramfeed.php"); ?>
    <?php require("mainfooter.php"); ?>
    <?php require("loginmodal.php"); ?>
    <?php require("copywright.php"); ?>





    <?php
    require("jslink.php");
    ?>
</body>

</html>
<? ob_flush(); ?>