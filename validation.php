<?php

session_start();

header("location:login.php");
$conn = mysqli_connect("127.0.0.1", "root", "", "sih");
mysqli_select_db($conn, 'sih');
$name =  $_POST['name'];
$pwd = $_POST['pwd'];
$q = "select * from user where name ='$name' ";
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);
if ($num == 1) {
    $_SESSION['password'] = $pwd;
    $_SESSION['name'] = $name;
    $_SESSION['score'] = 0;
    header('location:Optionslanguage.html');
} else {
    header('location:login.php');
}