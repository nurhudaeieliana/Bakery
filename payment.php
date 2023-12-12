<?php

include 'config.php';

if(isset($_POST['checkout'])){
  
  $fullName = $_POST['fullname'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $state = $_POST['state'];
  $zip = $_POST['zip'];
  $creditcardnumber = $_POST['creditcardnumber'];
  $expmonth = $_POST['expmonth'];
  $expyear = $_POST['expyear'];
  $zipccv = $_POST['zipcvv'];

  // if(empty($fullname) || empty($email) || empty($address) || empty($city) || empty($state) || empty($zip) || empty($creditcardnumber) || empty($expmonth) || empty($expyear) || empty($zipccv)){
  //   $message[] = 'please fill out all';
  // }else{
    $insert = "INSERT INTO payment VALUES('','$fullName', '$address', '$city', '$state','$zip','$creditcardnumber','$expmonth','$expyear','$zipccv')";
    $upload = mysqli_query($conn,$insert);
    // // Show success n)otification
    // echo '<script>alert("Successfully uploaded!");</script>';
    //  // }
  }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #C4A484;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 3px solid black;
  border-radius: 3px;
   
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #f79123;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #f79123;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>

<body>

<div class="row">
  <div class="col-75">
    <div class="container">
      <form method="post">
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
      
            Full Name
            <input required type="text" name="fullname" placeholder="Enter Name">
            Email
            <input required type="text" name="email" placeholder="Enter Email">
            Address
            <input required type="text" name="address" placeholder="Enter Address">
            City
            <input required type="text" name="city" placeholder="Enter City">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input required type="text" id="state" name="state" placeholder="Enter State">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input required type="text" id="zip" name="zip" placeholder="Zip Code">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
           <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <img src="image/VISA.jpg" width="50px">
              <img src="image/masterCard.jpeg" width="50px">
              <img src="image/CIMB.jpg" width="50px">
              <img src="image/HongLeong.jpg" width="50px">
            </div>
            
            Credit Card Number
            <input required type="text" name="creditcardnumber" placeholder="Enter Card Number">
            Exp Month
            <input required type="text" name="expmonth" placeholder="Enter Month">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input required type="text" id="expyear" name="expyear" placeholder="Enter Year">
              </div>
              <div class="col-50">
                <label for="zipcvv">CVV</label>
                <input required type="text" id="zipcvv" name="zipcvv" placeholder="CVV Number">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" name="checkout" value="Continue to checkout" class="btn">
        
       <!--  <button type="submit" name="payment">PLACE ORDER</button> -->
      </form>

      

    </div>
  </div>
  <?php
        if (isset($_POST['checkout'])) {
            // Perform the update logic here

            // Display the success message
            echo '<script>alert("The order has been place");</script>';

            // Redirect to productadmin.php
            echo '<script>window.location.href = "category.php";</script>';
        }
        ?>
   <!-- <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b>4</b></span></h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div> -->
</div>
</body>
</html>
