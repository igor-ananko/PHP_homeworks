<?php

CONST SERVER = "localhost";
CONST DB = "php_mysql";
CONST LOGIN = "root";
CONST PASS = "";

$dbConnect = mysqli_connect(SERVER,LOGIN,PASS,DB);
if(!mysqli_set_charset($dbConnect, "utf8")){
    printf("Error: ".mysqli_error($dbConnect));
}