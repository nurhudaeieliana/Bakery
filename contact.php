<?php
require('header.html');
?>
<?php

@include 'config.php';

if(isset($_POST['contact'])){
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$note = $_POST['note'];
	

	if(empty($name) || empty ($phone) || empty($email) || empty($subject) || empty($note)){
		$message[] = 'please fill out all';
	}else{
		$insert = "INSERT INTO contact VALUES('','$name', '$email', '$phone', '$subject', '$note')";
		$upload = mysqli_query($conn,$insert);
		// Show success notification
         echo '<script>alert("Successfully Submitted!");</script>';
     }
	}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CONTACT US</title>
	<link rel="stylesheet" href="contact.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">

</head>
<body>
	<div class="container">
		<h1>CONTACT US NOW</h1>
		<p>Have a problem?<br>
		 We'd love to hear it from you. Here's how you can contact us...</p>
		<div class="contact-box">
			<div class="contact-left">
				<h3>Your request</h3>
	           <form method="POST">
    <div class="input-row">
        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" placeholder="Your Name">
        </div>
        <div class="input-group">
            <label>Phone</label>
            <input type="text" name="phone" placeholder="+Your phone number">
        </div>
    </div>
    <div class="input-row">
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Your Email">
        </div>
        <div class="input-group">
            <label>Subject</label>
            <input type="text" name="subject" placeholder="What do you think?">
        </div>
    </div>
    <label>Note</label>
    <textarea rows="5" name="note" placeholder="Your Note"></textarea>

    <button type="submit" name="contact">SEND</button>
</form>

	        </div>
	       <div class="contact-right">
	       	    <h3>Contact Us</h3>

	       	    <table>
	       	    	<tr>
	       	    		<td>Email</td>
	       	    		<td>sweetbakery@gmail.com</td>
	       	    	</tr>
	       	    	<tr>
	       	    		<td>Phone</td>
	       	    		<td>+04-8666073</td>
	       	    	</tr>
	       	    	<tr>
	       	    		<td>Address</td>
	       	    		<td>02600, 9, Jalan Dua, Taman Paduka,<br> 13200, Kepala Batas, Pulau Pinang </td>
	       	    	</tr>

	       	    </table>


	       </div>
	   </div>

</body>
</html>