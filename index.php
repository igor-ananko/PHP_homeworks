<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="header">
    <div class="container">
    <?php
        include "blocks/main_menu.php";
        include "blocks/header.php";
    ?>
    </div>
</div>
<div class="container">
    <div class="content">
    <?php
        include "blocks/content.php";
    ?>
    </div>
</div>
<div class="footer container">
    Подвал сайта
</div>

</body>
</html>