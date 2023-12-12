<?php
require ('header.html');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=advice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href=typesStyle.css>
	<title>Dessert</title>
</head>
<body>
	<div class="dessert">
		<div class="heading">
			<h1>Dessert</h1>
			<h3>&mdash;Menu&mdash;</h3>
		</div>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center" style="column-gap: 20px;"  margin-bottom="0.5 rem">
				<div class="dessert-item">
					<img src="image/Macarons.jpg">
					<div class="details">
						<div class="details-su">
							<h5>Macarons</h5>
							<h5 class="price">RM25.00</h5>
						</div>
						 <button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b> 
            </button>
					</div>
				</div>

				<div class="dessert-item">
					<img src="image/Belgium.jpg">
					<div class="details">
						<div class="details-sub">
							<h5>Belgium Chocolate</h5>
							<h5 class="price">RM80.00</h5>
						</div>
						<button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b>
            </button>
					</div>
				</div>
				
				<div class="dessert-item">
					<img src="image/Brownies.jpg">
					<div class="details">
						<div class="details-sub">
							<h5>Brownies</h5>
							<h5 class="price">RM68.00</h5>
						</div>
						<button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b>
            </button>
					</div>
				</div>

				<div class="dessert-item">
					<img src="image/WhiteDonut.jpg">
					<div class="details">
						<div class="details-sub">
							<h5>White Chocolate Doughnut</h5>
							<h5 class="price">RM4.00</h5>
						</div>
						<button type="button" 
                class="btn btn-default btn-sm" >
                <span class="glyphicon 
                    glyphicon-shopping-cart">
                </span>
                <b> Add to Cart </b>
                        </button>
						
					</div>
				</div>

				<div class="dessert-item">
					<img src="image/cookies.jpg">
					<div class="details">
						<div class="details-sub">
							<h5>Double choc Cookie</h5>
							<h5 class="price">RM30.00</h5>
						</div>
						<button type="button" class="btn btn-default btn-sm" >
			                <span class="glyphicon 
			                    glyphicon-shopping-cart">
			                </span>
			                <b> Add to Cart </b>
			            </button>
						
					</div>
				</div>

				<div class="dessert-item">
					<img src="image/HeartCookies.jpg">
					<div class="details">
						<div class="details-sub">
							<h5>Heart Cookies</h5>
							<h5 class="price">RM5.50</h5>
						</div>
						<button type="button" class="btn btn-default btn-sm" >
		                <span class="glyphicon 
		                    glyphicon-shopping-cart">
		                </span>
		                <b> Add to Cart </b>
		                </button>
					</div>
				</div>

			</div>

			
	</div>
</body>
</html>