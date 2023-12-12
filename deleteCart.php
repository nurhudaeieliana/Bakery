<?php
	require 'config.php';
	$id = $_GET['delete'];
	$command = "DELETE FROM cart WHERE id='$id'";
	$conn->query($command);
	header("location: addtocart.php");
?>