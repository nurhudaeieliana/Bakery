<?php
	require 'config.php';
	$id = $_GET['id'];
	$count = $_GET['counting'];
	$command = "SELECT COUNT(id) FROM cart WHERE id='$id'";
	if(mysqli_fetch_row($conn->query($command))[0] != '0')
	{
		echo "YOU HAVE INSERT THIS ITEM ALREADY IN YOUR CART";
	}
	else
	{
		$command = "INSERT INTO cart VALUES('$id', '$count')";
		$conn->query($command);
	}
	echo "<script>window.close();</script>";
?>