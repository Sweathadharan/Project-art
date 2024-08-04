<?ob_start(); ?>
<?php
@session_start();
$link=mysqli_connect('localhost',"root","","ecom_store") ;
if($link)
{

}
else
{
echo mysqli_error($link);
}

//Category Related Function
//Category Tree
function body_content()
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
	$sql="select * from body_content";
	$res=mysqli_query($link,$sql);
	if(!$res)
	{
		return false;
	}
	else
	{
		return $res;
	}
}
function category_tree()
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
	//$sql="Select * from product_categories" where delete_tab='NULL'";
	$sql="Select * from categories where delete_tab=0";
	$result=mysqli_query($link,$sql);
	echo "<li class='dropdown megamenu-fw'>";
	echo "<a href='#' class='nav-link dropdown-toggle arrow' data-toggle='dropdown'>Product</a>";
	echo  "<ul class='dropdown-menu megamenu-content' role='menu'>";
	echo "<li>";
	echo "<div class='row'>";
	if($result)
	{
	 
      while($cat=mysqli_fetch_array($result))
		{
		echo "<div class='col-menu col-md-3'>";
		echo "<h6 class=title>".strtoupper($cat['cat_title'])."</h6>";
		#	echo "<div class='content'>";
		#	echo "<ul class='menu-col'>";
			$c_title=$cat['cat_title'];
			$subquery="select * from product_categories where cat_title='$c_title' and delete_tab='0'";
			$subcat=mysqli_query($link,$subquery);
			if(mysqli_num_rows($subcat)>0)
			{
			while($sub=mysqli_fetch_array($subcat))
			{
			$pcattitle=$sub['p_cat_title'];
		    echo "<a href='shop.php?q=$pcattitle' class='menu-col'>".strtoupper($pcattitle)."</a>";
			
			
		#	echo "<li><a href='shop.php?q=$pcattitle'>".strtoupper($pcattitle)."</a></li>";
			}
			}
		#	echo "</ul></div>";
		echo "</div>";
		}
	
   }	
   echo "</div></li></ul></li>";
   }
   
   
function list_category()
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
	//$sql="Select * from product_categories" where delete_tab='0'";
	$sql="Select * from categories where delete_tab=0";
	$result=mysqli_query($link,$sql);
	while($rs=mysqli_fetch_array($result))
	{
	$c_title=$rs['cat_title'];
	$c_image=$rs['cat_image'];
	$arr=explode(".",$c_image);
	$iname=$arr[0];
	$iext=$arr[1];
	if($iext=="jpeg")
	{
	$iext="jpg";
	$cimagename=$iname.".".$iext;
	}
	else
	{
	$cimagename=$c_image;
	
	}
		
	
	echo "<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12'>";
	echo "<div class='shop-cat-box'>";
		
echo "<img class='img-fluid' src='admin_area/cat_images/$cimagename' alt='' />";
echo "<a class='btn hvr-hover' href='sub_category.php?q=$c_title'>".$c_title."  </a>";
    echo "</div>";
		 
    echo "</div>";
	
	}
}

function list_product_categories($arg)
{

$link=mysqli_connect('localhost',"root","","ecom_store") ;
if($arg=="nothing")
{
	$sql="Select * from product_categories where delete_tab='0'";
}
else
{
		$sql="Select * from product_categories where cat_title='$arg' and delete_tab='0'";
		}
	$result=mysqli_query($link,$sql);
	while($rs=mysqli_fetch_array($result))
	{
	$p_title=$rs['p_cat_title'];
	$p_top=$rs['p_cat_top'];
	$p_image=$rs['p_cat_image'];
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
	
	if($p_top=="yes")
	 {$p_top="top-featured";}
	
	echo "<div class='col-lg-3 col-md-6 special-grid $p_top'>";
        echo "<div class='products-single fix'>";
		
            echo "<div class='box-img-hover'>";
                echo "<div class='type-lb'>";
                                echo "<p class='sale'>Sale</p>";
                echo "</div>";
				
	echo "<img src='admin_area/procat_images/$pimagename' class='img-fluid' alt='Image'>";
				
		echo "<div class='mask-icon'>";
            echo "<ul>";
				 echo "<li><a href='shopdetail.php?pro=$p_title' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>";
            echo "</ul>";
			//echo "<a class='cart' href='shopdetail.php?pro=$p_title'>$p_title</a>";
        echo "</div>";
	echo "</div>";
	
echo "</div>";
echo "</div>";	
	
	}
}


function product_images()
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
	$sql="Select * from products where delete_tab='0'";
	$result=mysqli_query($link,$sql);
	while($rs=mysqli_fetch_array($result))
	{
	$proimage=$rs['product_img1'];
	$arr=explode(".",$proimage);
	$iname=$arr[0];
	$iext=$arr[1];
	if($iext=="jpeg")
	{
	$iext="jpg";
	$proimagename=$iname.".".$iext;
	}
	else
	{
	$proimagename=$proimage;
    }
	echo "<div class='item'>";
        echo "<div class='ins-inner-box'>";
            echo "<img src='admin_area/product_images/$proimagename' alt=''/>";
                echo "<div class='hov-in'>";
                echo "<a href='#'><i class='fab fa-instagram'></i></a>";
                echo "</div>";
        echo "</div>";
    echo "</div>";
	}
	
	
}
function list_product($arg)
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;

$tsql="select p_cat_top from product_categories where p_cat_title='$arg' and delete_tab='0'";
$esql=mysqli_query($link,$tsql);
list($p_top)=mysqli_fetch_array($esql);
if($p_top=="yes")
	 {$p_top="top-featured";}

$sql="Select * from products where p_cat_id='$arg' and delete_tab='0'";
	
	$result=mysqli_query($link,$sql);
	while($rs=mysqli_fetch_array($result))
	{
	$p_id=$rs['product_id'];
	$p_title=$rs['product_title'];
	$p_image=$rs['product_img1'];
	$p_price=$rs['product_price'];
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
	
	
	
	echo "<div class='col-lg-3 col-md-6 special-grid $p_top'>";
        echo "<div class='products-single fix'>";
            echo "<div class='box-img-hover'>";
                echo "<div class='type-lb'>";
                                echo "<p class='sale'>Sale</p>";
                echo "</div>";
	echo "<img src='admin_area/product_images/$pimagename' class='img-fluid' alt='Image'>";
		echo "<div class='mask-icon'>";
            echo "<ul>";
				echo "<li><a href='shopdetail.php?pro=$p_title' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>";
				echo "<li><a href='insert_wishlist.php?pro=$p_title&pid=$p_id' data-toggle='tooltip' data-placement='right' title='Add to Wishlist'><i class='far fa-heart'></i></a></li>";
				echo "<li><a href='' data-target='#enquiryModel' data-toggle='tooltip' data-placement='right' title='Enquiry'><i class='fa fa-envelope' aria-hidden='true'></i></a></li>";
				
				
            echo "</ul>";
			echo "<a class='cart' href='insert_cart.php?q=$p_title'>Add To Cart</a>";
        echo "</div>";
	echo "</div>";
	echo "<div class='why-text'><h4 style='text-align:center;'>$p_title</h4><h5 style='text-align:center;'>Rs. $p_price</h5></div>";
	
echo "</div>";
echo "</div>";	
	
	}
}
function check_user($email,$pass){
$link=mysqli_connect('localhost',"root","","ecom_store") ;
$sql="select * from customers where customer_email='$email' and customer_pass='$pass'";
$res=mysqli_query($link,$sql);
	if(mysqli_num_rows($res)>0)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function get_user_info($email)
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
$sql="Select * from customers where customer_email='$email'";
$res=mysqli_query($link,$sql);
	if($res)
	{
		return $res;
	}
	else
	{
		return false;
	}
}

function insert_wishlist($cid,$pid)
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
$sql="Select * from wishlist where customer_id='$cid' and product_id='$pid'";
$res=mysqli_query($link,$sql);
if(mysqli_num_rows($res)>0)
{
echo "<script>alert('This product is already available in your wishlist');location.href='wishlist.php';</script>";


}
else
{
$sql="insert into wishlist(customer_id,product_id) values('$cid','$pid')";
$res=mysqli_query($link,$sql);
if($res)
{
return true;
}
else
{
return false;
}
}
}

function get_wish_data($customerid)
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
$query="select product_id from wishlist where customer_id='$customerid'";
$res=mysqli_query($link,$query);
if(mysqli_num_rows($res)>0)
{
  while($rs=mysqli_fetch_array($res))
  {
  $proid=$rs['product_id'];
  $subquery="select * from products where  product_id='$proid'";
  $subres=mysqli_query($link,$subquery);
  if(mysqli_num_rows($subres)>0)
  {
   while($subrs=mysqli_fetch_array($subres))
   {
    $protitle=$subrs['product_title'];
	$proimage=$subrs['product_img1'];
	$arr=explode(".",$proimage);
	$iname=$arr[0];
	$iext=$arr[1];
	if($iext=="jpeg")
	{
	$iext="jpg";
	$pimagename=$iname.".".$iext;
	}
	else
	{
	$pimagename=$proimage;
	
	}
	$proprice=$subrs['product_psp_price'];
echo "<tr><td class='thumbnail-img'>";
echo "<a href='#'><img class='img-fluid' src='admin_area/product_images/$pimagename' alt='' /></a></td>";
echo "<td class='name-pr'>".$protitle."</td>";
echo "<td class='price-pr'><p>".$proprice."</p></td>";
echo "<td class='quantity-box'>In Stock</td>";
echo "<td class='add-pr'><a class='btn hvr-hover' href='insert_cart.php?q=$protitle'>Add to Cart</a></td>";
echo "<td class='remove-pr'><a href='removewishlist.php?pro=$proid&cus=$customerid'><i class='fas fa-times-circle'></i></a></td></tr>";
	
   }
  }
  else
  {
  echo "<tr><td colspan=6>No Product Available</td></tr>";
  }
  
  }
}
else
{
echo "<tr><td colspan=6>No Record Available in WishList</td></tr>";
}
}

function remove_wishlist($product,$customer)
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
$query="delete from wishlist where customer_id='$customer' and product_id='$product'";
$res=mysqli_query($link,$query);
if($res)
{
return true;
}
else
{
return false;
}
}


function remove_cartlist($product,$customer)
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
$query="delete from cart where customer_id='$customer' and product_id='$product'";
$res=mysqli_query($link,$query);
if($res)
{
return true;
}
else
{
return false;
}
}




function sidebar_category()
{
$link=mysqli_connect('localhost',"root","","ecom_store") ;
	
	$sql="Select * from categories where delete_tab=0";
	$result=mysqli_query($link,$sql);
	if($result)
	{
	 
      while($cat=mysqli_fetch_array($result))
      {
		?>
<div class='list-group-collapse sub-men'>
<a href='sub_category.php?q=<?php echo $cat['cat_title'];?>' class='list-group-item list-group-item-action'  data-toggle='collapse' aria-expanded='true' >
<?php echo strtoupper($cat['cat_title']);?></a>

<div class='collapse show' id='sub-men1' data-parent='#list-group-men'>
<div class='list-group'>
    <?php
			$c_id=$cat['cat_id'];
			$subquery="Select * from products where cat_id='$c_id' and delete_tab='0'";
			$subcat=mysqli_query($link,$subquery);
			if(mysqli_num_rows($subcat)>0)
			{
			while($sub=mysqli_fetch_array($subcat))
			{
			$p_title=$sub['product_title'];
			?>
						
<a href='shopdetail.php?pro=<?php echo $p_title;?>' class='list-group-item list-group-item-action'><?php echo strtoupper($p_title);?></a>
<?php
			}
			}
			echo "</div></div>";
			echo "</div>";
		}
	
   }	
 }

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 function product_grid_view()
{
	
	$con = mysqli_connect("localhost","root","","ecom_store");

                        if(isset($_GET['start_price']) && isset($_GET['end_price']))
                        {
                            $startprice = $_GET['start_price'];
                            $endprice = $_GET['end_price'];

                            $query = "SELECT * FROM products WHERE product_psp_price BETWEEN $startprice AND $endprice and delete_tab='0'";
                        }
						elseif(isset($_GET['search']))
						{
                           
								$filtervalues = $_GET['search'];
                                $query = "SELECT * FROM products WHERE            CONCAT(product_title) LIKE '%$filtervalues%' ";
						}
                        else
                        {
                            $query = "SELECT * FROM products";
                        }
                        


	$query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            
	
	
	
	while($rs=mysqli_fetch_array($query_run))
	{
	$p_id=$rs['product_id'];
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
	
	
	
	echo "<div class='col-lg-3 col-md-6 col-lg-4 col-xl-4'>";
        echo "<div class='products-single fix'>";
            echo "<div class='box-img-hover'>";
                echo "<div class='type-lb'>";
                                echo "<p class='sale'>Sale</p>";
                echo "</div>";
	echo "<img src='admin_area/product_images/$pimagename' class='img-fluid' alt='Image'>";
		echo "<div class='mask-icon'>";
            echo "<ul>";
				echo "<li><a href='shopdetail.php?pro=$p_title' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>";
				echo "<li><a href='insert_wishlist.php?pro=$p_title&pid=$p_id' data-toggle='tooltip' data-placement='right' title='Add to Wishlist'><i class='far fa-heart'></i></a></li>";
				echo "<li><a href='' data-target='#enquiryModel' data-toggle='tooltip' data-placement='right' title='Enquiry'><i class='fa fa-envelope' aria-hidden='true'></i></a></li>";
				
				
            echo "</ul>";
			echo "<a class='cart' href='insert_cart.php?q=$p_title'>Add To Cart</a>";
        echo "</div>";
	echo "</div>";
	echo "<div class='why-text'><h4 style='text-align:center;'>$p_title</h4><h5 style='text-align:center;'>Rs. $p_price</h5></div>";
	
echo "</div>";
echo "</div>";	


}
                        
                        
	}
}
 
 function product_list_view()
{

	$con = mysqli_connect("localhost","root","","ecom_store");
	                    

                        if(isset($_GET['start_price']) && isset($_GET['end_price']))
                        {
                            $startprice = $_GET['start_price'];
                            $endprice = $_GET['end_price'];

                            $query = "SELECT * FROM products WHERE product_psp_price BETWEEN $startprice AND $endprice and delete_tab='0'";
                        }
						elseif(isset($_GET['search']))
						{
                           
								$filtervalues = $_GET['search'];
                                $query = "SELECT * FROM products WHERE            CONCAT(product_title) LIKE '%$filtervalues%' ";
						}      

                        else
                        {
                            $query = "SELECT * FROM products";
                        }
							           


	$query_run = mysqli_query($con, $query);

                        if(mysqli_num_rows($query_run) > 0)
                        {
                            
	
	
	
	while($rs=mysqli_fetch_array($query_run))
	{
		$p_id=$rs['product_id'];
	$p_title=$rs['product_title'];
	$p_image=$rs['product_img1'];
	$p_price=$rs['product_psp_price'];
	$p_description=$rs['product_desc'];
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
	
	
	
	echo "<div class='col-lg-3 col-md-6 col-lg-4 col-xl-4'>";
        echo "<div class='products-single fix'>";
            echo "<div class='box-img-hover'>";
                echo "<div class='type-lb'>";
                                echo "<p class='sale'>Sale</p>";
                echo "</div>";
	echo "<img src='admin_area/product_images/$pimagename' class='img-fluid' alt='Image'>";
		echo "<div class='mask-icon'>";
            echo "<ul>";
				echo "<li><a href='shopdetail.php?pro=$p_title' data-toggle='tooltip' data-placement='right' title='View'><i class='fas fa-eye'></i></a></li>";
				echo "<li><a href='insert_wishlist.php?pro=$p_title&pid=$p_id' data-toggle='tooltip' data-placement='right' title='Add to Wishlist'><i class='far fa-heart'></i></a></li>";
				echo "<li><a href='' data-target='#enquiryModel' data-toggle='tooltip' data-placement='right' title='Enquiry'><i class='fa fa-envelope' aria-hidden='true'></i></a></li>";
				
				
            echo "</ul>";
			echo "<a class='cart' href='insert_cart.php?q=$p_title'>Add To Cart</a>";
        echo "</div>";
	echo "</div>";
echo "</div>";
echo "</div>";	
echo "<div class='col-sm-6 col-md-6 col-lg-8 col-xl-8'>";
echo "<div class='why-text full-width'>";
echo "<h4>$p_title</h4>";
echo "<h5>Rs.$p_price</h5>";
echo "<p>$p_description</p>";
echo "<a class='btn hvr-hover' href='insert_cart.php?p=$p_title'>Add to Cart</a>";
echo "</div>";
echo "</div>";	
	}
} 


}

function insert_cartlist($proid,$productname,$catid,$procatid,$product_psp_price,$productimg1,$customerid,$sessionuser)
{
 $link=mysqli_connect('localhost',"root","","ecom_store") ;
 $selectquery="select * from cart where product_id='$proid' and productname='$productname' and customer_id='$customerid'";
 //echo $selectquery;
 $execquery=mysqli_query($link,$selectquery);
 if(mysqli_num_rows($execquery)>0)
 {
 return false;
 }
 else
 {
  $insertquery="insert into cart(product_id,productname,cat_id,p_cat_id,product_psp_price,quantity,product_img1,session_id,customer_id,customer_name) values('$proid','$productname','$catid','$procatid','$product_psp_price',1,'$productimg1','".session_id()."','$customerid','$sessionuser')";
  $execquery1=mysqli_query($link,$insertquery);
  //echo $insertquery;
  if($execquery1)
  {
	//  return $insertquery;
  return true;
  }
  else
  {
	  //return $insertquery;
  return false;
  }
 }
 
}





function get_cart_data($customerid)
{
	
$link=mysqli_connect('localhost',"root","","ecom_store") ;
  $subquery="select * from cart where  customer_id='$customerid'";
  $subres=mysqli_query($link,$subquery);
  if(mysqli_num_rows($subres)>0)
  {
	  foreach ($subres as $item) 
	  {
   
	$proid=$item['product_id'];
    $protitle=$item['productname'];
	$proprice=$item['product_psp_price'];
	$proimage=$item['product_img1'];
	$quantity=$item['quantity'];
	$total=$item['total'];
	$arr=explode(".",$proimage);
	$iname=$arr[0];
	$iext=$arr[1];
	if($iext=="jpeg")
	{
	$iext="jpg";
	$pimagename=$iname.".".$iext;
	}
	else
	{
	$pimagename=$proimage;
	
	}
	
echo "<tr><td class='thumbnail-img'>";
echo "<a href='#'><img class='img-fluid' src='admin_area/product_images/$pimagename' alt='' /></a></td>";
echo "<td class='name-pr'>".$protitle."</td>";
echo "<td class='price-pr'><p><input type='text' readonly name='proprice' id='proprice' value='$proprice'></p></td>";

echo "<td><input type='button' class='btn-increment-decrement' onClick='decrement_quantity($proid)' value='-'>
<input class='input-quantity' id='input-quantity-$proid'  value='$quantity'>
<input type='button' class='btn-increment-decrement' onClick='increment_quantity($proid)' value='+'></td>";
        
	    
		
		
echo "<td class='price-pr' id='price-pr'><p><input type='text' readonly name='proprice' id='proprice'value=".$proprice*$quantity. "
</p></td>";
echo "<td class='remove-pr'><a href='removecartlist.php?pro=$proid&cus=$customerid'><i class='fas fa-times-circle'></i></a></td></tr>";
   }
  }
  else
  {
  echo "<tr><td colspan=6 align=center>No Product Available</td></tr>";
  }
  
  }
 ?> 
<script>
function increment_quantity(cart_id) {
	//alert(cart_id);
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    var newQuantity = parseInt($(inputQuantityElement).val())+1;
    save_to_db(cart_id, newQuantity);
}

function decrement_quantity(cart_id) {
    var inputQuantityElement = $("#input-quantity-"+cart_id);
    if($(inputQuantityElement).val() > 1) 
    {
    var newQuantity = parseInt($(inputQuantityElement).val()) - 1;
    save_to_db(cart_id, newQuantity);
    }
}
function save_to_db(cart_id, new_quantity) {
	var inputQuantityElement = $("#input-quantity-"+cart_id);
    $.ajax({
		url : "update_cart_quantity.php",
		data : "cart_id="+cart_id+"&new_quantity="+new_quantity,
		type : 'post',
		success : function(response) {
			$(inputQuantityElement).val(new_quantity);
		var pprice=$("#price-pr").val()
		$(pprice).val(parseInt(pprice)*parseInt(new_quantity));
		//alert(pprice)	
		}
	});
}
</script>

<? ob_stop(); ?>



		