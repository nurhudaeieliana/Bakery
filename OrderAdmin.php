<?php
// Connect to database (replace values with your own)
$servername = "localhost";
$username = "username";
$password = "password";
// $dbname = "myDB";

$conn = mysqli_connect('localhost','root','','project_bakery_database');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Get customer orders from database
$sql = "SELECT * FROM customer";
$result = $conn->query($sql);

// Display orders on admin panel
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "Order ID: " . $row["order_id"] . "<br>";
    echo "Customer Name: " . $row["customer_name"] . "<br>";
    echo "Order Total: $" . $row["order_total"] . "<br>";
    echo "Order Status: " . $row["order_status"] . "<br><br>";
  }
} else {
  echo "No orders found.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Orderadmin.css">
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="Admin.css">
	<!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- Add icon library -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/bootstrap.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Orders</title>
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
			<li>
				<a href="productadmin.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Products</span>
				</a>
			</li>
			<li class="active">
				<a href="orderAdmin.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Orders</span>
				</a>
			</li>
			<li>
				<a href="report.php">
					<i class='bx bxs-message-dots' ></i>
					<span class="text">Customer Report</span>
				</a>
			</li>
			<!-- <li>
				<a href="#">
					<i class='bx bxs-group' ></i>
					<span class="text">Customers</span>
				</a>
			</li> -->
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
					<h1>Customers</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Customers</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>

	<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> 
					</div>
					<table>
						<thead>
							<tr>
								<th>Id</th>
								<th>Customer Name</th>
								<th>product purchase</th> 
								<th>Quantity</th>
							  <th>Total RM</th>

							</tr>
						</thead> 
						  <?php 
						   $query = "SELECT * FROM payment";
						  $result = mysqli_query($conn, $query);
							$row = mysqli_fetch_assoc($result);

						   if($result->num_row > 0){
						   	while($rows = $reslut->fetch_assoc()){
						   		$Id= $rows['Id'];
						   		$Customer_Name = $rows['customer_name'];
						   		$product_purchase = $rows['product_purchase'];
						   		$Quantity = $rows['Quantity'];
						   		$Total_RM = $rows['Total_RM'];

						   	}
						   }
						   	?>
					<tbody>
						<tr>
							<form method = "POST" enctype = "multipart/form-data">
								<td><?php echo $id; ?></td>
								<td><?php echo $customer_name; ?></td>
								<td><?php echo $product_purchase; ?></td>
								<td><?php echo $Quantity; ?></td>
								<td><?php echo $Total_RM; ?></td>
							</form>

						</tr>
					</tbody>
						<!-- <tbody>
							<tr>
								<td>
									
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody> -->
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>FOR FUN</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<h4>Yeay.....Customer purchase again</h4>
							<!-- <i class='bx bx-dots-vertical-rounded' ></i> -->
						</li>
						<!-- <li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li> -->
					</ul>
				</div>  
			</div>
</body>
</html>