<?php
$connect = mysqli_connect("localhost","root","","blogprojectdb") or die("ERROR: Couldn't connectect".mysqli_connect_error());

$name="";
$birthday="";
$gender="";
$email="";
$username="";
$password="";

if(isset($_GET['name'])){
    $name = mysqli_real_escape_string($connect, $_GET['name']);
}
if(isset($_GET['birthday'])){
    $birthday = $_GET['birthday'];
}
if(isset($_GET['gender'])){
    $gender = $_GET['gender'];
}
if(isset($_GET['email'])){
    $email = mysqli_real_escape_string($connect, $_GET['email']);
}
if(isset($_GET['username'])){
    $username = mysqli_real_escape_string($connect, $_GET['username']);
    setcookie("userName", $username, 0);
}
if(isset($_GET['password'])){
    $password = mysqli_real_escape_string($connect, $_GET['password']);
}

$sql = "INSERT INTO users (name, birthday, gender, email, username, password) VALUES ('$name','$birthday', '$gender', '$email','$username', '$password')";

if(mysqli_query($connect, $sql)){
    echo "hozzaadtuk a usert";
} else {
    echo "ERROR: ".mysqli_error($connect);
}

mysqli_close($connect);