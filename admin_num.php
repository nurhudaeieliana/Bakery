<?php
include ('config.php');

// Execute the SQL query
$sql = "SELECT COUNT(*) as total FROM register_admin";
$result = $conn->query($sql);

// Check if the query executed successfully
if ($result === false) {
    echo "Error: " . $sql . "<br>" . $conn->error;
    // Handle the error appropriately, such as redirecting to an error page
}

// Fetch the count value from the result
$row = $result->fetch_assoc();
$count = $row['total'];


// Display the count
echo "<h3> " . $count."</h1>";


// Close the database connection
$conn->close();
?>