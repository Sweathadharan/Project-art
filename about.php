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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='shortcut icon' href='images/abt.jfif' type='image/png'>
    <link rel='apple-touch-icon' href='images/logo.png'>
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
	 <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="report.php"><h3>about us</h3></a>
                    
                </div>
            </div>
        </div>
    </div>
    
    <div class="about-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
				<br><br>
                    <h2 class="noo-sh-title">Welcome To <span>R gallery</span></h2>
                    <p style="text-align:justify;">R Gallery Is The Online Home For Every Public Art Collection .
                     We Take What Makes You Tick And Turn It Into Something Beautiful That You Can Share With The World. 
                     Strangely, Our Problem In The Beginning Was Not What We Could Do Online, But Persuading People That 
                     It Was A Good Idea. R Gallery Has Been Building Technology To Improve The Art World. 
                     With Complete Website Over The Few Years R Gallery Has Grown Dramatically, 
                     Thanks In Part, To The Introduction Of A Suite Of Lower Cost Entry Level Products, 
                     The Intention Being To Work With A Broader Range Of Fine Arts Organisations 
                     At An International Level. The Company Now Has A Larger Group Of Bright, 
                     Talented And Committed Team Members Who Bring A Constant Freshness And High Production
                      Values To Their Work. Everything We Do Makes The Business Of Art More Efficient,
                       Giving You The Time And Space To Do The Things You Love. Whether That’s Creating More Artwork, 
                       Discovering New Opportunities And Artists, Growing Your Collection Or Simply Getting Organised. Through Our Work, We Make Art Available For Everyone – For Enjoyment, Learning And Research. - R Gallery
						<br>			
					We are strongly positioned to serve the  product and the product designs
                     are mostly traditional. Showcasing some of the finest creations in product - 
                     from classic designs that reflect the cultural traditions to contemporary artistic
                      product. You can even get product customized according to specifications for those
                       special occasions in life.
					</p>
					<h4><span><strong></strong></span></h4>
<!-- <p style="text-align:justify;">The Ace Teas bring you the exotic varities of loose leaf 
tea from the historic tea destination of India. Our high quality loose leaf teas sourced
 from the India’s best tea farms. The ace Teas only uses the finest teas, herbals and floral
  ingredients to meticulously craft each of more than 100 blends by hand.Single origin teas 
  are carefully chosen from the finest tea gardens, traditional teas are prepared with our
   own unique twist and artisan blends are prepared by our experienced tea master from ingredients
    sourced from across the globe. From the Indian garden to your mug sustainability efforts have 
    been taken into account.</p> -->
                    
                </div>
                <div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-thumbnail img-fluid" src="images/abt.jfif" alt="" />
                    </div>
                </div>
            </div>
            <!-- <div class="row my-5">
            <h2 class="noo-sh-title">Nutrition <span>Facts</span></h2>
               
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Herbal tea
</h3>
                        <p>Herbal teas also known as herbal infusions—and less commonly called tisanes —are beverages made from the infusion or decoction of herbs, spices, or other plant material in hot water. Oftentimes herb tea, or the plain term tea is used as a reference to all sorts of herbal teas. Some herbal blends contain actual tea.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Green Tea</h3>
                        <p>One study found people who drank at least six cups of green tea per day were 33 percent less likely to develop type 2 diabetes compared with those who drank only one cup per week.These claims come from studies that presented green tea as the secret to weight loss, but most of them were small, short-term . </p>
                    </div>
                    
                       
                </div>
            </div> -->
		</div></div>	
    
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>
	
	 <
    <?php
	require("jslink.php");
	?>    
</body>

</html>