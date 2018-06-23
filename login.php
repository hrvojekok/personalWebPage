<?php

session_start();

$db = mysqli_connect("localhost", "root", "", "webprojecthk");

    if(isset($_POST['loginBtn'])) {

        $username = mysqli_real_escape_string($db, $_POST['username']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        $password = md5($password);
        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($db, $sql);

        if(mysqli_num_rows($result) == 1) {
            $_SESSION['message'] = "you are now logged in";
            $_SESSION['username'] = $username;
            header ("location: mainPage.php");
        } else {
            $_SESSION ['message'] = "incorrect username/password";
        }
        
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


<form method="post" action="login.php">


<h2 class="center">Login </h2>

  <section class="center">
    <div>  
        <label for="username"><b>Username</b></label>
    </div>

    <div> 
        <input type="text" placeholder="Enter Username" name="username" id="username" required>
    </div> 

    <div> 
        <label for="password"><b>Password</b></label>
    </div>

    <div>  
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
    </div> 

    <div class = "loginButton">
        <button class ="buttonLogin" type="submit" name="loginBtn" id="btn">Login</button>
    </div>
    
    
        
    </section>

        <div class="register"> 
            Not registered?
            <a class="registerButton" href="register.php">Register</a>
        </div>
</form>



</body>
</html>
