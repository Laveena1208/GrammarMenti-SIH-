<?php
session_start();

header("location:login.php");
$conn = mysqli_connect("127.0.0.1", "root", "", "sih");
mysqli_select_db($conn, 'sih');
$name =  $_POST['name'];
$email =  $_POST['email'];
$age =  $_POST['age'];
$pno =  $_POST['pno'];
$pwd =  $_POST['pwd'];
$gender = $_POST['gender'];

$q = "select * from user where name ='$name' ";
// $_SESSION['name'] = $name;
$result = mysqli_query($conn, $q);
$num = mysqli_num_rows($result);
if ($num == 1) {

    header('location:signup.php');
} else {

    //$_SESSION['score'] = 0;
    $sql = "INSERT INTO user (`name`,`email`,`age`,`phone no`, `passwd`,`gender`)  VALUES ('$name','$email','$age','$pno','$pwd','$gender')";
    mysqli_query($conn, $sql);
    echo "Registration successful";
}