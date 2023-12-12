<?php include ('config.php');

$servername = "localhost";
$database = "project_bakery_database";
$username = "root";
$password = "";
$conn = mysqli_connect('localhost','root','','project_bakery_database');


if(isset($_GET['id'])){
	$id = $_GET['id'];


	$query = "SELECT * FROM product WHERE id='$id'";
	$result = mysqli_query($conn, $query);
	$row = mysqli_fetch_assoc($result);

// Set the values for the input boxes
	$productName = $row['name'];
	$productPrice = $row['price'];


	if(!$result){
		die("Query Failed".mysqli_error($connection, $query));
	}

	else {
    // header('location:productadmin.php?update_msg=Product updated successfully.');
	}
}
if (isset($_POST['update_product'])) {
    // Get the submitted form data
    $productName = $_POST['product_name'];
    $productPrice = $_POST['product_price'];
    $productId = $_GET['id']; // Assuming you're passing the ID via the URL parameter

    // Check if an image was uploaded
    if (!empty($_FILES['product_image']['tmp_name'])) {
        // Process the uploaded image if needed
        $image = $_FILES['product_image']['name'];
        // Code to handle image processing and storage
        move_uploaded_file($_FILES['product_image']['tmp_name'], "image/".basename($_FILES['product_image']['name']));
        $processedImage = $_FILES['product_image']['name'];
        // Perform the update query with the updated image
        $query = "UPDATE product SET name='$productName', price='$productPrice', image='$processedImage' WHERE id='$productId'";
    } else {
        // Perform the update query without changing the image
        $query = "UPDATE product SET name='$productName', price='$productPrice' WHERE id='$productId'";
    }

    // Execute the update query
    if (mysqli_query($conn, $query)) {
        echo "Product updated successfully!";
        // Additional code or redirect after successful update
        // ...
    } else {
        echo "Error updating product: " . mysqli_error($conn);
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

	<title>Update Product</title>
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
			<form action="#">
				<div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div>
			</form>
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
						<h3>Update Product</h3>
						<input type="text" placeholder="enter product name" name="product_name" class="box" autocomplete="off" value="<?php echo $productName; ?>">
						<input type="decimal" placeholder="enter product price" name="product_price" class="box" autocomplete="off" value="<?php echo $productPrice; ?>">
						<input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box" autocomplete="off">
						<input type="submit" class="btn" name="update_product" value="Update Product">
					</form>

				</div>
			</div>
      <?php
if (isset($_POST['update_product'])) {
    // Perform the update logic here

    // Display the success message
    echo '<script>alert("Successfully updated");</script>';

    // Redirect to productadmin.php
    echo '<script>window.location.href = "productadmin.php";</script>';
}
?>
		</section>	

		<script src="script.js"></script>
	</body>
	</html>