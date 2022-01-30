<?php

include('database.php');

$user=$_POST['user'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];

if(filter_var($email, FILTER_VALIDATE_EMAIL) and $password == $cpassword){

    $queryEmail = "SELECT * FROM accounts WHERE email = '$email'";

    $result = mysqli_query($connection, $queryEmail);

    if(mysqli_num_rows($result) > 0) {
        echo "Email already exists";
    }else{
        $query= "INSERT INTO `accounts`(`user`, `email`, `password`) VALUES ('$user','$email','$password')";
    
        mysqli_query($connection, $query);

        header("location:singup.php");
    }

}else{
    header("location:index.php");
}

mysqli_close($connection);

?>