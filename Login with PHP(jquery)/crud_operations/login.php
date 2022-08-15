<?php

session_start();
include "../database/config.php";

if(isset($_POST["email"]) && isset($_POST["password"]))
{
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return($data);
    }
}

$email = validate($_POST["email"]);
$pass = validate($_POST["password"]);

if(empty($email))
{
    header("Location: ../index.php?error=User Name is required");
    exit();
}

elseif(empty($pass))
{
    header("Location: ../index.php?error=Password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE user_email = '$email' AND user_password = md5('$pass')";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row["user_email"] == $email && $row["user_password"] == md5($pass))
    {
        $sql = "SELECT * FROM users Join user_details ON $row[user_id] = user_details.user_id";
        $Newresult = mysqli_query($conn,$sql);
        $row1 = mysqli_fetch_assoc($Newresult);

        echo "Logged in";
        $_SESSION["user_email"] = $row["user_email"];
        $_SESSION["user_password"] =  $row["user_password"];
        $_SESSION["user_id"] =  $row["user_id"];
        $_SESSION["user_name"] =  $row1["user_name"];
        $_SESSION["user_phone"] =  $row1["user_phone"];
        $_SESSION["user_age"] =  $row1["user_age"];
        $_SESSION["user_details_id"] = $row1["user_details_id"];
        header("Location: dashboard.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect Email or Password");
        exit();
    }
}
else{
    header("Location: ../index.php");
    exit();
}
?>