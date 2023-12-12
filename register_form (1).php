<?php

@include 'config.php';

if(isset($_POST['submit'])){
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   $confirm_password = md5($_POST['confirm_password']);

   $select = "SELECT * FROM register WHERE email = '$email' && password = '$password'";
   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = 'User already exists!';
   } else {
      if($password != $confirm_password){
         $error[] = 'Passwords do not match!';
      } elseif(strlen($_POST['password']) < 8) {
         $error[] = 'Password must be at least 8 characters long!';
      } else {
         $insert = "INSERT INTO register(name, email, password) VALUES('$name','$email','$password')";
         mysqli_query($conn, $insert);
         // Show success notification
         echo '<script>alert("Successfully registered!");</script>';
         header('location: login_form.php');
         exit();
      }
   }
} 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="registerstyle.css">

</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Register Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         }
      }
      ?> 
      <input type="text" name="name" required placeholder="Enter your name">
      <input type="email" name="email" required placeholder="Enter your email">
      <input type="password" name="password" required placeholder="Enter your password">
      <input type="password" name="confirm_password" required placeholder="Confirm your password">
      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>Already have an account? <a href="login_form.php">Login Now</a></p>
   </form>

</div>

</body>
</html>