<?php
require ('header.html');
@include 'config.php';

session_start();

	// if(isset($_POST['add_to_cart'])){

	// 	  $product_name = $_POST['product_name'];
	// 	  $product_price = $_POST['product_price'];
	// 	  $product_image = $_POST['product_image'];
	// 	  $product_quantity = 1;

	// 	  $select_cart = mysql_query($conn, "SELECT * FROM 'cart' WHERE name = '$product_name'");

	// 	  if(mysqli_num_rows($select_cart) > 0){
	// 	  	$message[] = 'product already added to cart';
	// 	  }else{
	// 	  	$insert_product = mysql_query($conn, "INSERT INTO 'cart'(name, price, image, quatity)
	// 	  		VALUES('$product_name', '$product_price', '$product_image', 'product_quantity')");
	// 	  	$message[] = 'product added to cart succesfull!';
	// 	  }
	// 	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=advice-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">
	<link rel="stylesheet" href=categoryStyle.css> 
	<title>Pastry</title>
</head>	
<body>
	<div class="pastry">
		<div class="heading">
			<h1>Pastry</h1>
			<h3>&mdash;Menu&mdash;</h3>
		</div>
		<div class="container-fluid">
			<div class="row d-flex justify-content-center" style="column-gap: 20px;"  margin-bottom="0.5 rem">

				<body>

					<!-- <div class="container-fluid">
						<div class='col-md-12'>
							<div class="row">
								<div class="col-md-6">
									<h2 class="text-center">Shopping cart date</h2>
									<div class="col-md-12">
										<div class='row'>
										-->
										<?php

										$query = "SELECT * FROM product where category=102";
										$result = mysqli_query($conn,$query);

										while ($row = mysqli_fetch_array($result)) {?>
											<div class="col-md-4">
												<!-- <form> -->
													<img id="position" src="image/<?php echo $row['image']  ?>" style='height: 250px;'>
													<h5 class="text-center"><?= $row['name']; ?></h5>
													<h5 class="text-center">RM<?= number_format($row['price'],2); ?></h5>
													<input type="hidden" name="name" value="<?= $row['name'] ?>">


													<input type="hidden" name="price" value="<?= $row['price'] ?>">

													<input type="number" id="abc<?php echo $row['id']?>" name="quantity" value="0" class="form-control bilangan">
													<input onclick="changeLocation(<?php echo $row['id'];?>)" class="btn btn-warning btn-block my-2" value="Add To Cart">
												<!-- </form> -->

												<style>
													#position{
														justify-content: center;
														padding-left: 100px;
													}
												</style>
												<!-- </form> -->

											</div>

											<?php
										}
										?>
									</div>
									<script type="text/javascript">
										// var btn = document.getElementById('add_to_cart');
										function changeLocation(id)
										{
											var bilangan = document.getElementById('abc'+id);
											// console.log(bilangan.value);
											window.open("insertItemCart.php?id="+id+"&counting="+bilangan.value, '_blank');
										}
									</script>
								</div>
							</div>
						</div>
					</div>
				</div>
			</body>
	</body>
	</html>
