<?php

include('database.php');

$EMAIL=$_POST['email'];
$PASSWORD=$_POST['password'];

$query = "SELECT * FROM accounts WHERE email='$EMAIL' and password='$PASSWORD'";

$result = mysqli_query($connection, $query);

$rows = mysqli_num_rows($result);

if ($rows) {
    header("location:home.php");
}else {
    echo "Is email or password incorrect";
}

mysqli_free_result($result);

mysqli_close($connection);

?>