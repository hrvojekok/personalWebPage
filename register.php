<?php
session_start();


$db = mysqli_connect("localhost","root", "", "webprojecthk");


    if (isset($_POST['registerBtn'])) {
        $username = mysqli_real_escape_string($db, $_POST['username']);
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        $password = md5($password); //hashira password
    
        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);

        $_SESSION['message'] = "You are now logged in";
        $_SESSION['username'] = $username;
        header("location: mainPage.php");

    }
mysqli_close($db);

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


<form method="post" action="register.php" id="myForm">


<h2 class="center">Register </h2>

  <section class="center">
    <div>  
        <label for="username"><b>Username</b></label>
    </div>

    <div> 
        <input type="text" placeholder="Enter Username" name="username" id="user" required>
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
        <input type="password" placeholder="Enter Password" name="password" id="pass" required>
    </div> 

    <div class = "loginButton">
        <button class ="buttonLogin" type="submit" id="btn" name="registerBtn">Register</button>
    </div>
  
    </section>

        <div class="register"> 
            Already registered?
            <a class="registerButton" href="login.php">Log in</a>
        </div>
        
</form>



</body>
</html>