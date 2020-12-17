<?php

switch($_GET['page']){
    case "load":
        include "pages/form.php";
        break;
    case "gallery":
        include "pages/scan.php";
        break;
    case "catalog":
        include "pages/catalog.php";
        break;
    case "otzyv":
        include "pages/otzyv.php";
        break;
    case "cart":
        include "pages/cart.php";
        break;
    case "login":
        include "pages/login.php";
        break;
    case "registration":
        include "pages/registration.php";
        break;
    default:
        include "pages/catalog.php";
}
?>