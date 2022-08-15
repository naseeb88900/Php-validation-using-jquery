<?php
session_start();
include "../database/config.php";

$id = $_SESSION["user_id"];
$sql = "DELETE FROM users WHERE user_id = $id ";
$result = mysqli_query($conn, $sql);


mysqli_close($conn);

if($result == true)
{
    header("Location: index_process.php");
}
?>