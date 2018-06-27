<?php
session_start();

$db = mysqli_connect("localhost", "root", "", "webprojecthk");


if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
$username = $_SESSION['username'];
// sql to delete a record
$sql = "DELETE FROM users WHERE username = '$username'";

session_destroy(); 
header("location:mainPage.php");
if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
    header ("location: mainPage.php");
} else {
    echo "Error deleting record: " . mysqli_error($db);
}

mysqli_close($db);
?>