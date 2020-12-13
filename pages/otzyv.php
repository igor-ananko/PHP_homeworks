<div class="reports">
<?php
include "engine/config.php";
$sql = "SELECT * FROM otzyvy";
$res = mysqli_query($dbConnect, $sql);
?>
<?php
    while ($reports = mysqli_fetch_assoc($res)):?>
    <div class="report">
        <div class="username"><?= $reports['username']?></div>
        <div class="reportText"><?= $reports['otzyv']?></div>
        <div class="data"><?= $reports['data']?></div>
    </div>
    <?php
    endwhile;
    ?>
<div class="writeReport">
    <form class="submitForm" action="" method="post">
        <p>Введите имя</p>
        <input type="text" name="user" placeholder="Ваше имя">
        <p>Введите отзыв</p>
        <textarea name="reporttext"  placeholder="Текст отзыва" cols="30" rows="10"></textarea>
        <p>Введите дату</p>
        <input type="date" name="date"> <br><br>
        <input type="submit" value="Отправить">
    </form>
    <?php
    if(isset($_POST['reporttext'])){
    $sql = "INSERT INTO otzyvy (username, otzyv, data) VALUES ('{$_POST['user']}', '{$_POST['reporttext']}', '{$_POST['date']}')";
    mysqli_query($dbConnect, $sql);
//    header("Location: /?");
    }
    ?>
</div>
</div>