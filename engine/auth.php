<?php
session_start();
include "config.php";
$login = md5($_POST['login'] ? strip_tags($_POST['login']) : "");
$pass = md5($_POST['pass'] ? strip_tags($_POST['pass']) : "");
$sql = "select id from users where login='$login' and pass='$pass'";
$res = mysqli_query($dbConnect,$sql) or die("Error: ".mysqli_error($dbConnect));

if(mysqli_num_rows($res) == 1){
    $_SESSION["login"] = $login;
    $_SESSION["pass"] = $pass;
    $_SESSION["user_id"] = mysqli_fetch_assoc($res)['id'];
    header("Location: /?page=catalog");
}
else{
    header("Location: /?page=login");
}
