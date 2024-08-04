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
	<?php require("mainslider.php");?>
	<br><br>
	<div class="title-all text-center">
                        <h1>Transforming the art world!!! </h1>
                        <p>R Gallery Is The Online Home For Every Public Art Collection . 
							We Take What Makes You Tick And Turn It Into Something Beautiful 
							That You Can Share With The World. Strangely, Our Problem In 
							The Beginning Was Not What We Could Do Online, 
							But Persuading People That It Was A Good Idea. R Gallery Has Been Building 
							Technology To Improve The Art World.  <br>You can even get product customized according to specifications for 
								those special occasions in life.</p>
                    </div>
	<?php require("categories.php");?>
	<?php require("catproducts.php");?>
	<?php require("instagramfeed.php");?>
	<?php require("mainfooter.php");?>
	<?php require("loginmodal.php");?>
	<?php require("copywright.php");?>
	
	 
    <?php
	require("jslink.php");
	?>
	
	
	
</body>

</html>