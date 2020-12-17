<?php
if($_GET['newreg']):?>
<h2>Вы зарегистрировались, теперь залогиньтесь.</h2>
<?php
    endif;
?>
<form action="../engine/auth.php" method="post">
    <p>Ваш логин</p>
    <input type="text" name="login" value="<?= $_SESSION['login']?>">
    <p>Ваш пароль</p>
    <input type="password" name="pass" value="<?= $_SESSION['pass']?>"><br><br>
    <input type="submit" value="Войти"><br><br>
    <a href="/?page=registration">Зарегистрироваться</a>
</form>


