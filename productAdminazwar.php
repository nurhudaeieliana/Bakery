<?php

@include 'config.php';

if(isset($_POST['add_product'])){
	
	$product_name = $_POST['product_name'];
	$product_price = $_POST['product_price'];
	$product_image = $_FILES['product_image']['name'];
	$product_image_tmp_name = $_FILES['product_image']['tmp_name'];
	$product_image_folder = 'image/'.$product_image;
	$product_category = $_POST['product_category'];

	if(empty($product_name) || empty ($product_price) || empty($product_image)){
		$message[] = 'please fill out all';
	}else{
		$insert = "INSERT INTO product VALUES('null','$product_name', '$product_price', '$product_image', '$product_category')";
		$upload = mysqli_query($conn,$insert);
		// Show success notification
         echo '<script>alert("Successfully uploaded!");</script>';
		// if($upload){

		// move_uploaded_file($product_image_tmp_name, $product_image_folder);
		// $message[] = 'new product added successfully';
	// }else{
	// 	$message[] = 'could not add the product';

	}


		 

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Admin.css">
	<!-- <style>
.dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style> -->


	<title>AdminHub</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>
			<span class="text">Admin</span>
		</a>
		<ul class="side-menu top">
			<li>
				<a href="Admin.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li class="active">
				<a href="productadmin.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<!-- <li>
				<a href="orderAdmin.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Orders</span>
				</a>
			</li> -->
			<li>
				<a href="report.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Customer Report</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Customers</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<!-- <li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li> -->
			<li>
				<a href="login_form.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<!-- <form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form> -->
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<!-- <a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">0</span>
			</a> -->
			<a href="#" class="profile">
				<!-- <img src="img/people.png"> -->
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Product</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Product</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<!-- <a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a> -->
			</div>
	
<?php

if(isset($message)){
	foreach($message as $message){
		echo '<span class="message">'.$message.'</span>';
	}
}

?>
			<div class="container">

				<div class="admin-product-form-container">

					<form method="post" enctype="multipart/form-data">
						<h3>add new product</h3>
						<input type="text" placeholder="enter product name" name="product_name" class="box">

						<!-- <input type="type" placeholder="choose category" name="category"> -->
						<!-- <div class="dropdown">
						  <button class="dropbtn">Category</button>
						  <div class="dropdown-content">
						    <a href="#">Cake&Pastry</a>
						    <a href="#">Dessert</a>
						    <a href="#">Flavour</a>
						  </div>
						</div> -->
						<select name="product_category">
							<?php
							 	$command = "SELECT * FROM category;";
							 	$result = $conn->query($command);
							 	while($data = mysqli_fetch_array($result) )
							 	{
							 		?>
							 		<option value="<?php echo $data['categoryID'];?>" ><?php echo $data['categoryName']; ?></option>
							 		<?php
							 	}
							 	?>
						</select>
						<!-- </input> -->



						<input type="decimal" placeholder="enter product price" name="product_price" class="box">
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" calss="box">
						<input type="submit" class="btn" name="add_product" value="add product">

						
					</form>

				</div>

	</section>
	!<-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>