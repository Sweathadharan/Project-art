<?php
session_start();
//the isset function to check username is already loged in and stored on the session
if(!isset($_SESSION['admin_email'])){
	
}
?>
<!-- Visit codeastro.com for more projects -->
<!DOCTYPE html>
<html lang="en">
<head>
<title>art</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/all.css" rel="stylesheet" />
<link href="../font-awesome/css/fontawesome.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">R gallery</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->

<!--close-top-Header-menu-->
<!--start-top-serch-->
<!-- <div id="search">
  <input type="hidden" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div> -->
<!--close-top-serch-->

<!--sidebar-menu-->

<!--sidebar-menu-->

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="fas fa-home"></i> </a> <a href="member-report.php" class="current"></a> </div>
    <h1 class="text-center">Order Report <i class="fas fa-tasks"></i></h1>
  </div>

  


      <?php
            include 'includes/db.php';
            
            $qry= "select * from pending_orders";
            $result=mysqli_query($con,$qry);
            while($row=mysqli_fetch_array($result)){
              
            ?> 

<?php 

$get_customer = "select * from customers";

$run_customer = mysqli_query($con,$get_customer);

while($row1=mysqli_fetch_array($run_customer)){

  
 ?>


<?php 
$i=0;
$get_cus = "select * from customer_orders";

$run_cus = mysqli_query($con,$get_cus);

while($row2=mysqli_fetch_array($run_cus)){


 ?>
 <?php $i++;
 ?>






      <!--
     <div class="widget-content">
            <div class="row-fluid">
              <div class="span4">
                <table class="">
                  <tbody>
                  <tr>
                      <td><h4>Perfect GYM Club</h4></td>
                    </tr>
                    <tr>
                      <td>5021  Wetzel Lane, Williamsburg</td>
                    </tr>
                    
                    <tr>
                      <td>Tel: 231-267-6011</td>
                    </tr>
                    <tr>
                      <td >Email: support@perfectgym.com</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            -->
              
            <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12">
	          <div class="widget-box">

            <div class="span8">
                <table class="table table-bordered table-invoice-full">
                  <tr>
                    <tbody>
                      <th class="text-center">Order ID</th>
                      <th class="text-center">Customer ID</th>
                      <th class="text-center">Invoice number</th>
                      <th class="text-center">Product ID</th>
                      <th class="text-center">Email</th>
                      <th class="text-center">Customer email</th>
                      <th class="text-center">Customer name</th>
                      <th class="text-center">Order date</th>

                      </tbody>
                    </tr>
                  
                    <tr>
                      <tbody>
                      <td><div class="text-center"><?php echo $row['order_id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['customer_id']; ?> </div></td>
                      <td><div class="text-center"><?php echo $row['invoice_no']; ?> </div></td>
                      <td><div class="text-center"><?php echo $row['product_id']; ?></div></td>
                      <td><div class="text-center"><?php echo $row['order_id']; ?> </div></td>
                      <td><div class="text-center"><?php echo $row1['customer_email'] ; ?></div></td>
                      <td><div class="text-center"><?php echo $row1['customer_name'] ; ?></div></td>
                      <td><div class="text-center"><?php echo $row2['order_date'] ; ?></div></td>

                      </tbody>
                    </tr>
                    <?php 

}} 
                         ?>
                         
           
                </table>
              </div> <!-- end of span 12 -->
              
            </div>

            
                
          </div>
   
		</div>
	
      </div>
      <?php
}
      ?>
    </div>

  </div>
</div>
<?php $i++ ?>

<div class="text-center">
    <button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
  </div>

<!--end-main-container-part-->

<!--Footer-part-->


<style>
#footer {
  color: white;
}
</style>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
