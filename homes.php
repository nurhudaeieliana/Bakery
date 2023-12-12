<?php
require('header.html');
?>
<!-- @include 'config.php'; -->

 <!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=advice-width, initial-scale=1.0">
 <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">
 <link rel="stylesheet" href=home.css>
 <title>Home Page</title>
</head>
<style>
  .row {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
}

.flavour-item {
  flex-basis: 30%;
  margin-bottom: 20px;
}

.flavour-item img {
  width: 100%;
  height: auto;
  border-radius: 15px;
}

</style>
<body>
 <div class="flavour">
  <div class="heading">
   <h1>Home Page</h1>
   <h3>&mdash;Menu&mdash;</h3>
  </div>
  <div class="container-fluid">
   <div class="row d-flex justify-content-center" style="column-gap: 20px;"  margin-bottom="0.5 rem">
    <div class="flavour-item">
     <img src="image/millecrepe.jpg">
     <div class="details">
      <div class="details-subsection">
       <!-- <h5>Vanilla Mille Crepe</h5>
       <h5 class="price">RM125.00</h5> -->
      </div>
      <!--  <button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b>  
            </button> -->
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/rainbowmille.jpg">
     <div class="details">
      <div class="details-sub">
       <!-- <h5>Rainbow mille Crepe</h5>
       <h5 class="price">RM130.00</h5> -->
      </div>
      <!-- <button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b> 
            </button> -->
     </div>
    </div>
    
    <div class="flavour-item">
     <img src="image/Redvelvet.jpg">
     <div class="details">
      <div class="details-sub">
       <!-- <h5>Red Velvet Cake</h5>
       <h5 class="price">RM78.00</h5> -->
      </div>
      <!-- <button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b>
            </button> -->
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/lemon.jpg">
     <div class="details">
      <div class="details-sub">
       <!-- <h5>Lemon Cake</h5>
       <h5 class="price">RM78.00</h5> -->
      </div>
      <!-- <button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b> 
                        </button> -->
      
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/tiramisu.jpg">
     <div class="details">
      <div class="details-sub">
       <!-- <h5>Tiramisu Cake</h5>
       <h5 class="price">RM130.00</h5> -->
      </div>
      <!-- <button type="button" class="btn btn-default btn-sm" >
                   <span class="glyphicon 
                       glyphicon-shopping-cart">
                   </span>
                   <b> Add to Cart </b> 
               </button> -->
      
     </div>
    </div>

    <div class="flavour-item">
     <img src="image/Oreocake.jpg">
     <div class="details">
      <div class="details-sub">
       <!-- <h5>Oreo Cake</h5>
       <h5 class="price">RM100.00</h5> -->
      </div>
      <!-- <button type="button" class="btn btn-default btn-sm" >
                  <span class="glyphicon 
                      glyphicon-shopping-cart">
                  </span>
                  <b> Add to Cart </b> 
                  </button> -->
     </div>
    </div>

</div>
   <div>
        <div class="heading">
       <h1>Contact Us</h1>
       <p>Opening Hours : </p>
       <p>Monday to Friday - 9am to 10pm</p>
       <p>Saturday to sunday - 8am to 11pm</p>
       <div class="footer-row">
        <p>SweetBakery@gmail.com<i class="fa fa-paper-plane"></i></p>
           <p>+04-8666073<i class="fa fa-phone"></i></p>
           </p>
       </div>
       <div class="social-links">
            <i class="fa fa-paper-plane"></i>
            <i class="fa fa-phone"></i>
        </div>
        </div>
   </div>

   
 </div>
</body>
</html>
