<?php


?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="designLogin.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>


<form method="post" action="register.php">
 

<h2 class="center">Register </h2>

  <section class="center">
    <div>  
        <label for="username"><b>Username</b></label>
    </div>

    <div> 
        <input type="text" placeholder="Enter Username" name="username" required>
    </div> 

    <div>  
        <label for="email"><b>Email</b></label>
    </div>

    <div> 
        <input type="text" placeholder="Enter email" name="email" required>
    </div> 

    <div> 
        <label for="password"><b>Password</b></label>
    </div>

    <div>  
        <input type="password" placeholder="Enter Password" name="password" required>
    </div> 

    <div class = "loginButton">
        <button class ="buttonLogin" type="submit" name="register">Register</button>
    </div>
  
    </section>

        <div class="register"> 
            Already registered?
            <a class="registerButton" href="login.php">Log in</a>
        </div>
        
</form>



</body>
</html>
