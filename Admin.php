<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <style type="text/css">
    	.chart-container {
        max-width: 400px;
        margin-bottom: 20px;
      }
    </style>

	<!-- My CSS -->
	<link rel="stylesheet" href="Admin.css">

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
			<li class="active">
				<a href="#">
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
				<a href="customerlist.php">
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
				<!-- <div class="form-input">
					<input type="search" placeholder="Search...">
					<button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
				</div> -->
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
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
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

			<ul class="box-info">
        <li>
          <i class='bx bxs-calendar-check' ></i>
          <span class="text">
            <?php require 'admin_num.php'?>
            <!-- <h3>0</h3> -->
            <p>Admins</p>
          </span>
        </li>
        <li>
          <i class='bx bxs-group' ></i>
          <span class="text">
            <?php require 'visitor.php'?>
            <!-- <h3>0</h3> -->
            <p>Visitors</p>
          </span>
        </li>
        <!-- <li> -->
          <!-- <i class='bx bxs-dollar-circle' ></i> -->
          <!-- <span class="text"> -->
            <!-- <?php require 'visitor.php'?> -->
            <!-- <h3>$0</h3> -->
            <!-- <p>Total Sales</p>
          </span>
        </li> -->
      </ul>




			<div class="table-data">
				<div class="order">
					<div class="head">
						<!-- <h3>Recent Orders</h3> -->
						<!-- <i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i> -->
					</div>


					 <!--Graph-->
					
					<table>
						<head>
					      
					          <div class="chart-container">
				      <canvas id="Bakery"></canvas>
				    </div>
				    <script>
				      var colorSet = [
				        '#FDD7E4', // Color 1
				        '#FFDFDD', // Color 2
				        // '#FFCCCB', // Color 3
				        // '#FFB8BF', // Color 4
				        // '#E8ADAA', // Color 5
				      ];
				      var data = {
				        labels: ['Pastry', 'Cake'],
				        datasets: [{
				          label: "Sweet&Co Bakery",
				          data: [
				            <?php 
				              require 'config.php'; 
				              $command="SELECT product.name, COUNT(product.name), category.categoryName FROM product INNER JOIN category ON product.category = category.categoryID GROUP BY product.category; "; 
				              $result = $conn->query($command);
				              while($row = mysqli_fetch_row($result)){ 
				                echo $row[1] . ',';
				              }
				            ?>
				          ],
				          backgroundColor: colorSet,
				          borderColor: "white",
				          borderWidth: 1
				        }]
				      };

				      // Configuration options
				      var options = {
				        responsive: true,
				        scales: {
				          y: {
				            beginAtZero: true
				          }
				        }
				      };

				      // Create the chart
				      var ctx = document.getElementById('Bakery').getContext('2d');
				      new Chart(ctx, {
				        type: 'doughnut',
				        data: data,
				        options: options
				      });
				    </script>
			      </script>
				</head>
									  
										<!-- <thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead> -->
						<!-- <tbody>
							<tr>
								<td>
									<-- <img src="img/people.png"> --
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
							<tr>
								<td>
									<-- <img src="img/people.png"> --
									<p>John Doe</p
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<-- <img src="img/people.png"> --
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status process">Process</span></td>
							</tr>
							<tr>
								<td>
									<-- <img src="img/people.png"> --
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status pending">Pending</span></td>
							</tr>
							<tr>
								<td>
									<-- <img src="img/people.png"> --
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Completed</span></td>
							</tr>
						</tbody> -->
					</table>
				</div>
				<!--  <div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
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
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>  -->
			</div>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="script.js"></script>
</body>
</html>