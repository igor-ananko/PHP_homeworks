<?php
session_start();
$_SESSION = array();
include "config.php";
$login = md5($_POST['login'] ? strip_tags($_POST['login']) : "");
$pass = md5($_POST['pass'] ? strip_tags($_POST['pass']) : "");
$sql = "INSERT INTO users (login, pass, role) VALUES ('$login', '$pass', '0')";

if(mysqli_query($dbConnect,$sql)){
    header("Location: /?page=login&newreg=true");
}
else{
    header("Location: /?page=registration");
}