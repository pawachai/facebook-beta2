<?php

require_once("connect.php");
    session_start();
    $user = mysqli_real_escape_string($conn,$_POST['username']);
    $pass = mysqli_real_escape_string($conn,$_POST['password']);
    $sql = "SELECT username, password FROM loglog WHERE username = '".$user."' AND password = '".$pass."'";
    $result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    $_SESSION['username'] = $_POST['username']; 
    echo "<script>alert('Welcome!'); location.href='profile.php';</script>";
    exit();
} else {
    echo "<script>alert('EROR YOUR PAGE'); location.href='login.php';</script></script>";
}
?>








