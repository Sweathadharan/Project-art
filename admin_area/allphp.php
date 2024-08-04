<?php

$i = 0;

$get_orders = "select * from pending_orders";

$run_orders = mysqli_query($con,$get_orders);

while ($row_orders = mysqli_fetch_array($run_orders)) {

$order_id = $row_orders['order_id'];

$c_id = $row_orders['customer_id'];

$invoice_no = $row_orders['invoice_no'];


$product_id = $row_orders['product_id'];

$qty = $row_orders['qty'];


$order_status = $row_orders['order_status'];

$get_products = "select * from products where product_id='$product_id'";

$run_products = mysqli_query($con,$get_products);

$row_products = mysqli_fetch_array($run_products);

$product_title = $row_products['product_title'];

$product_price=$row_products['product_price'];

$i++;

?>


<?php 

$get_customer = "select * from customers where customer_id='$c_id'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_email = $row_customer['customer_email'];

 ?>



<?php

$get_customer_order = "select * from customer_orders where customer_id='$c_id'";

$run_customer_order = mysqli_query($con,$get_customer_order);

$row_customer_order = mysqli_fetch_assoc($run_customer_order);

$order_date = $row_customer_order['order_date'];

$due_amount = $row_customer_order['due_amount'];



?>