<?php


//spajanje na bazu
$username = '';
$email = '';
$password = '';

$database = new mysqli('localhost', 'root', '', 'webprojecthk') or die("Unable to connect!");

if(isset($_POST['register'])){
    $username = mysqli_real_escape_string($_POST[$username]);
    $email = mysqli_real_escape_string($_POST[$email]);
    $password = mysqli_real_escape_string($_POST[$password]);


    

   
    $insert = mysqlquery ("INSERT INTO users(username,email,password) VALUES('$username', '$email', '$password')");
        
    mysqli_query($database, $sql);
   
}



?>