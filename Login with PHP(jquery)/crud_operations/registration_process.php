<?php

include "../database/config.php";
if(isset($_POST["submit"]))
{
    $user_name = $_POST["name"];
    $user_email= $_POST["email"];
    $user_pass= $_POST["password"];
    $phone= $_POST["phone"];
    $age= $_POST["age"];
}

$sql1 = "INSERT INTO users(user_email, user_password) VALUES ('$user_email',md5('$user_pass'))";
mysqli_query($conn, $sql1);

$sql2 = "SELECT * FROM users WHERE user_email = '$user_email' AND user_password = md5('$user_pass')";
$result = mysqli_query($conn,$sql2);


if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row["user_email"] == $user_email && $row["user_password"] == md5($user_pass))
    {
        $sql2 = "INSERT INTO user_details(user_id, user_name, user_phone, user_age) VALUES ($row[user_id], '$user_name','$phone',$age)";
        mysqli_query($conn, $sql2);
    }

}


mysqli_close($conn);

header("Location: index_process.php");

?>
