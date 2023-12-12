<?php
    include'config.php';

// Execute query to fetch data
$query = "SELECT * FROM contact";
$result = $conn->query($query);

// Check for query errors
if (!$result) {
    die('Query Error: ' . $mysqli->error);
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

    <style>
    table {
        width: 100%;
        border-collapse: collapse;
        font-family: Arial, sans-serif;
    }
    
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    
    th {
        background-color: #4aa3ff;
        color: black;
        font-weight: bold;
        text-transform: uppercase;
    }
    
    /*tr:hover {
        background-color: #abd8ff;
    }*/
    
    tr:nth-child(even) {
        background-color: #abd8ff;
    }
</style>

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
            <li>
                <a href="productadmin.php">
                    <i class='bx bxs-shopping-bag-alt' ></i>
                    <span class="text">Products</span>
                </a>
            </li>
           <!--  <li>
                <a href="orderAdmin.php">
                    <i class='bx bxs-doughnut-chart' ></i>
                    <span class="text">Orders</span>
                </a>
            </li> -->
            <li class="active">
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
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
        }
    </style>
</head>

<main>
    <table>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>phoneNum</th>
            <th>subject</th>
            <th>note</th>

            <!-- Add more column headers as needed -->
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phoneNum']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['note']; ?></td>
                <!-- Add more columns as needed -->
            </tr>
        <?php endwhile; ?>
    </table>
</main>
</body>
</html>