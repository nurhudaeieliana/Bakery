
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Admin.css">
	<!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Add icon library -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
.btn {
  background-color: red;
  border: none;
  color: white;
  padding: 12px 16px;
  font-size: 16px;
  cursor: pointer;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: orangered;
}

.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
}

.button1 {
	box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}
</style>

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
				<a href="#">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<li>
				<a href="orderAdmin.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Status Delivery</span>
				</a>
			</li>
			<li>
				<a href="customerlist.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Customers</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
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
			<a href="#" class="notification">
				<i class='bx bxs-bell' ></i>
				<span class="num">0</span>
			</a>
			<a href="#" class="profile">
				<!-- <img src="img/people.png"> -->
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Products</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Products</a>
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
			<div>
				<a href="productadminazwar.php">
					<button class="button button1">Add Product</button>
				</a>
			</div>
<?php

if(isset($message)){
	foreach($message as $message){
		echo '<span class="message">'.$message.'</span>';
	}
}

?>

			<div class="container mt-5">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header bg-info">
								<h4 class="text-white">Product List</h4>
							</div>
							<div class="card-body">
								<?php
									$conn = mysqli_connect('localhost','root','','project_bakery_database');
									$query = "SELECT * FROM product ";

									$query_run = mysqli_query($conn, $query);

								?>
								<table class="table">
									<thead>
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>price</th>
										<th>images</th>
										<th>edit</th>
										<th>deleted</th>
									</tr>
									</thead>

									<tbody>
										<?php
											if(mysqli_num_rows($query_run) > 0)
											{
												foreach($query_run as $row)
												{
												?>
												<tr>
													<td><?php echo $row['id']; ?></td>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['price']; ?></td>
													<td><?php echo $row['image']; ?></td>
													<td>
														<?php $temp = $row['id']; ?>
														<button class="btn" onclick="window.location = 'updateproduct.php?id=<?php echo $temp ?>'"><i class="fa fa-edit"></i></button>
													</td>
													<td>
														<button class="btn" onclick="confirmDelete(<?php echo $row['id']; ?>)"><i class="fa fa-trash"></i></button>

														<!-- <button class="btn" onclick="window.location = 'deletedproduct.php?id=<?php echo $row['id']?>'"><i class="fa fa-trash"></i></button> -->
					
													</td>
												</tr>
												<?php
												}
											}else
											{
											?>
											<tr>
												<td>No Record Available</td>
											</tr>
											<?php
											}
										?>

										<!-- <td>id</td> -->
								</tbody>
							</div>
						</div>
					</div>
				</div>

	</section>
	<!-- !<-- CONTENT -->
	

	<script src="script.js"></script>
	    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="script.js"></script>
    <script>
    	function confirmDelete(productId) {
    		if (confirm("Are you sure you want to delete this product?")) {
    			window.location = 'deletedproduct.php?id=' + productId;
    		}
    	}
</script>
    <!-- <script>
    	function window.location {
    		confirm("Are you sure you want to deleted this?");
    	}
    </script> -->

</body>
</html>