<button id="rzp-button1">Pay</button>
<?php require("feedback.php"); ?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
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
                                    }
                                }

                                ?>
<script>
var options = {
    "key": "rzp_test_WlwPLc7eM1aZvt", // Enter the Key ID generated from the Dashboard
    "amount": "<?php echo $grandtotal*100?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "R GALLERY",
    "description": "Test Transaction",
    "image": "",
    //"order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    //"account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    }
};
var rzp1 = new Razorpay(options);
    rzp1.open();
    

</script>