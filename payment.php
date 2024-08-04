
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<form>
    <input type="text" name="name" placeholder="Enter your name"><br><br>
    <input type="text" name="amount" placeholder="Enter your amount"><br><br>
    <input type="button" name="button" value="pay with Razor pay" onclick="MakePayment()"><br>


</form>

<script>
      function MakePayment() {
          var name = $("#name").val();
          var amount = $("#amount").val();
          var options = {
    "key": "rzp_test_WlwPLc7eM1aZvt", // Enter the Key ID generated from the Dashboard
    "amount": 199000, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": name,
    "description": "R gallery",
    "image": "https://example.com/your_logo",
    //"order_id": "order_Ef80WJDPBmAeNt", //Pass the `id` obtained in the previous step
    //"account_id": "acc_Ef7ArAsdU5t0XL",
    "handler": function (response){
        jQuery.ajax({
         type:"POST",
         url:"payment1.php",
         date:"pay_id="+response.razorpay_payment_id+"&amount="+amount+"&name="+name,
         success:function(result){
             window.location.href="feedback.php";
         }
        });
    }
};
var rzp1 = new Razorpay(options);
 
 
    rzp1.open();
    

}
      
</script>