<?php
session_start();
include "../database/config.php";

if(isset($_POST["update"]))
{
    $id =  $_SESSION["user_id"];
    $name =$_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $phone = $_POST["phone"];
    $age = $_POST["age"];
    $userDetailsID =  $_SESSION["user_details_id"];
}

$sql = "UPDATE users SET user_email = '$email', user_password = '$password' where user_id = $id ";
mysqli_query($conn, $sql);

$sql1 = "UPDATE user_details SET user_id = $id , user_name = '$name', user_phone = '$phone', user_age = $age where user_details_id = $userDetailsID ";
mysqli_query($conn, $sql1);

mysqli_close($conn);

header("Location: index_process.php");
?>