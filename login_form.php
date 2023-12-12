<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   // $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $password = md5($_POST['password']);
   // $confirm_password = md5($_POST['confirm_password']);

   $select = " SELECT * FROM register WHERE email = '$email' && password = '$password' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0)
   {

      $row = mysqli_fetch_array($result);
      header('location: homes.php');
     
   }
   else{
      $error[] = 'incorrect email or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="registerstyle.css">

</head>
<body>
   
<div class="form-container">

   <form method="post">
      <h3>user login </h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login" class="form-btn">
      <p>don't have an account? <a href="register_form.php">register now</a></p>
      <p>login as admin? <a href="loginadmin_form.php">click here</a></p>
   </form>

</div>

</body>
</html>