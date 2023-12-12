<?php
require ('header.html');
require 'config.php';
if(isset($_GET['delete'])) {
    $productId = $_GET['delete'];
    }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="addtocart.css">

</head>
<body>
  <div class="header">
    <p class="logo">Shopping Cart</p>
    <div class="cart"><i class="fa-solid fa-cart-shopping"></i></div>
     </div>
     <div class="container">
      <header>
        <!-- <h1>Your Shopping Cart</h1>
        <div class="shopping">
            <span class="quntity">0</span>
        </div> -->
    </header>
</div>
<!-- <div class="list card">
    <h1>Card</h1>
    <ul class="listCard"></ul>
    <div class="checkout">
        <div class="total">0</div>
        <div class="closeShopping">Close</div>
    </div>
</div> -->
<style type="text/css">
.product-container {
    display: flex;
    align-items: center;
    padding: 10px;
    border: 1px solid #ccc;
    margin-bottom: 10px;
    width: 65%;
    box-sizing: border-box;
    margin-left: auto;
    margin-right: auto;
}


.image-container {
    width: 100px;
    margin-right: 10px;
}

.product-image {
    width: 100%;
    height: auto;
}

.product-details {
    flex-grow: 1;
}

.product-name {
    font-weight: bold;
    margin-bottom: 5px;
}

.product-quantity-label {
    margin-top: 5px;
}

.quantity-container {
    display: flex;
    align-items: center;
}

.quantity-input {
    width: 50px;
}

.product-price {
    margin-top: 5px;
}

.delete-container {
    margin-left: auto;
}

.delete-button {
    background-color: #ff4d4d;
    color: white;
    border: none;
    padding: 5px 10px;
    cursor: pointer;
}



</style>


    <!-- <div id="root"></div>
    <div class="sidebar"> -->
          <!-- <div class="head"><p>My Cart</p></div> -->
     <!-- <div id="cartItem">Your cart is empty</div> -->
      <!-- <div class="sixteen columns medium-down--one-whole">
        <div class="section cart-extra-fields-wrap clearfix">
          <div class="cartnote-wrap enter-special">
            <label for="note">Enter Special wish</label>
            <textarea id="note" class="card-message-textarea" name="note" rows="2"></textarea>
          </div>
        </div>
      </div> -->
<?php
$command = "SELECT product.name, cart.quantity, product.image, product.price, cart.id
            FROM cart 
            INNER JOIN product ON cart.id = product.id;";
$result = $conn->query($command);

$total = 0; // Initialize total variable

while ($row = mysqli_fetch_row($result)) {
    ?>
    <div class="product-container">
        <div class="image-container">
            <img class="product-image" src="image/<?= $row[2] ?>">
        </div>
        <div class="product-details">
            <p class="product-name"><?= $row[0] ?></p>
            <hr>
            <p class="product-quantity-label">Quantity:</p>
            <div class="quantity-container">
                <input type="number" id="<?= $row[4] ?>" class="quantity-input detect-click" value="<?= $row[1] ?>">
            </div>
            <hr>
            Price: RM <p id="price<?= $row[4] ?>" class="product-price"><?= $row[3] ?></p>
        </div>
        <div class="delete-container">
            <a href="deleteCart.php?delete=<?= $row[4] ?>" class="delete-button"><i class="fa-solid fa-trash"></i></a>
        </div>
    </div>
    <?php

    // Calculate subtotal for each item
    $subtotal = $row[1] * $row[3];
    $total += $subtotal; // Add subtotal to the total
}
?>

<div class="foot">
    <h3>Total: </h3>
    RM <h2 id="total"><?= $total ?></h2>
</div>
<div class="checkout-cart">
    <a>
        <button type="submit" class="action_button add_to_cart checkout_original" id="checkout" name="checkout">CHECKOUT</button>
    </a>
</div>


</div>
<script src="addtocart.js"></script>
</body>
<form action="payment.php" method="post" id="asdasd">
    <input type="hidden" name="total" id="totallyhere">
</form>
</html>

<script type="text/javascript">
    var buttons = document.getElementsByClassName("detect-click");
    var totalElement = document.getElementById("total");

    var checking = document.getElementById('checkout');
    checking.addEventListener('click', ()=>{
        var transfering = document.getElementById('totallyhere');
        transfering.value = totalElement.innerHTML;
        document.getElementById('asdasd').submit();
    });
    var total = <?= $total ?>; // Initialize total variable with PHP value

    // Initialize an object to keep track of quantities
    var quantities = {};

    for (var i = 0; i < buttons.length; i++) {
        var button = buttons[i];
        var productId = button.id;
        var quantity = button.value;

        // Initialize the quantities object with initial quantities
        quantities[productId] = quantity;

        button.addEventListener('change', function () {
            var productId = this.id;
            var newQuantity = parseInt(this.value);

            var priceElement = document.getElementById("price" + productId);
            var price = parseFloat(priceElement.innerHTML);

            var oldQuantity = quantities[productId];
            var subtotal = price * (newQuantity - oldQuantity);

            total += subtotal; // Update total

            quantities[productId] = newQuantity; // Update quantities object

            totalElement.innerHTML = total.toFixed(2); // Update the total element
        });
    }
</script>
