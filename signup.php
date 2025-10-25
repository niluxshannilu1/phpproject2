<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>signup page </title>
    <link rel="stylesheet" href="./style_signup.css">

  </head>
    
  <body>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Signup Form</title>
    <link rel="stylesheet" href="signup-style.css">
 
</head>

<body>
    <?php

    include("registration.php");
    ?>
    
     
    <div class="signup-container">
        <form class="signup-form">
            <h2>M Tec Sign Up</h2>

            <div class="input-group">
                <input type="text" required>
                <label for="text">Full Name</label>
            </div>

            <div class="input-group">
                <input type="email" required>
                <label for="email">Email</label>
            </div>

            <div class="input-group">
                <input type="text" required>
                <label for="text">Username</label>
            </div>

            <div class="input-group">
                <input type="password" required>
                <label for="password">Password</label>
            </div>
            
            <div class="input-group">
                <input type="text" required>
                <label for="text">Nic Number</label>
            </div>
            <div class="input-group">
                <input type="text" required>
                <label for="text">Mobile Number</label>
            </div>
            

            <button type="submit">Create Account</button>

            <div class="login-link">
                Already have an account? <a href="login.php">Login</a>
            </div>
        </form>
    </div>
</body>
</html>
    
  </body>
  
</html>
