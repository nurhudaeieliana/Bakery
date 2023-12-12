<?php 
  echo "<script>window.location='login_form.php'</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bakery Sweet&Co</title>
  <!--<style type="text/css">
        body
        {
            background-images: url(/image/Pictures.jpeg);
        }
    </style>-->
  <!--<meta charset="UTF-8">-->
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">-->
  <link rel="stylesheet" href="indexStyle.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>
</head>

<body>
  
 <!--  <nav class="navbar">
    <div class="inner-width">
      <a class="logo" href='website.html'>Bakery Sweet&Co</a>
      <div class="navbar-menu">
        <ul id='MenuItems'>
          <li><a href="home.php" class="button" >Home</a></li>
          <li><a href= "Menu.php" class="button">Menu </a></li>
          <li><a href= "Contact.php" class="button">Contact </a></li>
          <li><a href="SignUp.php" class="button" >Sign Up</a></li> 
        </ul>
      </div>
    </div>
  </nav> -->
    <nav class="navbar">
    <div class="inner-width">
      <a class="logo" href='website.html'>Bakery Sweet&Co</a>
      <div class="navbar-menu">
        <ul id='MenuItems'>
          <!-- <a href="home.php" class="button" >Home</a> -->
          <!-- <a href= "Menu.php" class="button">Menu </a> -->
          <a href= "Contact.php" class="button">Contact </a>
          <!-- <a href="login_form.php" class="button" >Login</a> -->
        </ul>
      </div>
    </div>
  </nav>
   <!-- <nav class="navbar">
      <div>
        <a href='website.html'>Sweet&Co Bakery</a>
       </div>
    
     
        <ul id='MenuItems'>
          <li><a href="home.php" class="button">Home </a></li>
          <li><a href= "Menu.php" class="button">Menu </a></li>
          <li><a href= "Contact.php" class="button">Contact </a></li>
          <li><a href= "AboutUs.php" class="button">About Us</a></li>
          <li><a href="SignUp.php" class="button">Sign Up</a></li>-->
          <!--<li><button class='loginbtn' onclick="document.getElementById('login-form').style.display = 'block'"
              style="width:auto;">Login</button> </li>
        </ul>
      
    </nav>-->
    
    <!-- <section id="home"> 
      <div class="content1">
        <div class="title">
          <h1>It's sweet. It's light. It's flaky and buttery. It's right here</h1>
        </div>
        <div class="images"></div>
      </div>
      <div class="content2">
        <div class="images"></div>
        <div class="title">
          <p>It's sweet. It's light. It's flaky and buttery. It's right here</p>
          <button>Find More</button>
        </div>
      </div>
    </section>-->
    
    <!--<div class="social-container">
      <ul class="social-icons">
        <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
      </ul>
    </div>-->
    
    <!--<div id='login-form' class='login-page'>
      </form>

      <div class=" form-box">
        <div class='button-box'>
          <div id='btn'></div>
          <button type='button' onclick='login()' class='toggle-btn'>Log In</button>
          <button type='button' onclick='register()' class='toggle-btn'>Register</button>
        </div>

        <--login form->
        <form id='login' class='input-group-login'>
          <center>
            <form action="/action_page.php">
              <input type="radio" id="Login" name="Login" value="Users" />Users&#160; &#160;
              &#160;
              <input type="radio" id="Login" name="Login" value="Admin" />
              <label for="Admin">Admin</label>
          </center>
          <input type='text' class='input-field' placeholder='Email Id' style="color:black" ; required>
          <input type='password' class='input-field' placeholder='Enter password' style="color:black" ; required>
          <input type='checkbox' class='check-box'><span>Remember password</span>
          <button type='submit' class='submit-btn'> Log in</button>
        </form>
      </form>


        <--registeration form ->
        <form id='register' class='input-group-register'>
          <input type='text' class='input-field' placeholder='First Name' style="color:black" ; required>
          <input type='text' class='input-field' placeholder='Last Name' style="color:black" ; required>
          <input type='text' class='input-field' placeholder='Email Id' style="color:back" ; required>
          <input type='password' class='input-field' placeholder='Confirm password' style="color:black" ; required>
          <input type='checkbox' class='check-box'><span>I agree to the terms and conditions</span>
          <button type='submit' class='submit-btn'>Register</button>
        </form>
      </div>
    </div>
  </div>
 
  <--for login and registration form to move correctly->
  <script src="app.js"></script>
  <script>
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');

    function register() {
      x.style.left = '-400px';
      y.style.left = '50px';
      z.style.left = '110px';
    }
    function login() {
      x.style.left = '50px';
      y.style.left = '450px';
      z.style.left = '0px';
    }
  </script>
  <script>
    var modal = document.getElementById('login-form');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>-->
</body>

</html>