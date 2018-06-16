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


<form action="/action_page.php">


<h2 class="center">Login </h2>

  <section class="center">
    <div>  
        <label for="uname"><b>Username</b></label>
    </div>

    <div> 
        <input type="text" placeholder="Enter Username" name="uname" required>
    </div> 

    <div> 
        <label for="psw"><b>Password</b></label>
    </div>

    <div>  
        <input type="password" placeholder="Enter Password" name="psw" required>
    </div> 

    <div class = "loginButton">
        <button class ="buttonLogin" type="submit">Login</button>
    </div>
  
</section>
<aside>
        <div class="register"> 
            Not registered?
            <button class="registerButton" type="submit">Register</button>
        </div>
    </aside>
</form>



</body>
</html>
