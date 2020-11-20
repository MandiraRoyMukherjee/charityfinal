<?php 
require_once('config.php'); 
?>
<html>
  <head>
    <title> RazorPay Integration in PHP - phpexpertise.com </title>
    <meta name="viewport" content="width=device-width">
    <style>
      .razorpay-payment-button {
        color: #ffffff !important;
        background-color: #7266ba;
        border-color: #7266ba;
        font-size: 14px;
        padding: 10px;
        margin-left: 400px;
      }
      .middle{
        margin-left: 400px;
      }
    </style>
  </head>
  <body>
    <form action="charge.php" method="POST">
      <div class="middle">
   


    <h3 class="title-style-1 text-center">Thank you for your donation <span class="title-under"></span>  </h3>

<div class="row">

    <div class="form-group col-md-12 ">
        <input type="text" class="form-control" id="amount" placeholder="AMOUNT(€)">
    </div>

</div>
<div class="modal-body">

<div class="row">
    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="firstName" placeholder="First name*">
    </div>

    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="lastName" placeholder="Last name*">
    </div>
</div>


<div class="row">

    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="email" placeholder="Email*">
    </div>

    <div class="form-group col-md-6">
        <input type="text" class="form-control" name="phone" placeholder="Phone">
    </div>

</div>

<div class="row">

    <div class="form-group col-md-12">
        <input type="text" class="form-control" name="address" placeholder="Address">
    </div>

</div>


<div class="row">

    <div class="form-group col-md-12">
        <textarea cols="30" rows="4" class="form-control" name="note" placeholder="Additional note"></textarea>
    </div>

</div>

<div class="row">

    <div class="form-group col-md-12">
        <button type="submit" class="btn btn-primary pull-right" name="donateNow" >DONATE NOW</button>
    </div>

</div>
</div>
      </div>

              
         
    <!-- Note that the amount is in paise = 50 INR -->
    <script
        src="https://checkout.razorpay.com/v1/checkout.js"
        data-key="<?php echo $razor_api_key; ?>"
        data-amount="10000";
        
        data-buttontext="Pay with Razorpay"
        data-name="PHPExpertise.com"
        data-description="Test Txn with RazorPay"
        data-image="https://your-awesome-site.com/your_logo.jpg"
        data-prefill.name="Harshil Mathur"
        data-prefill.email="support@razorpay.com"
        data-theme.color="#F37254"
    ></script>
    <input type="hidden" value="Hidden Element" name="hidden">
    </form>
  </body>
</html>