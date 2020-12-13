<?php
    function mathOp($arg1, $arg2, $operation)
    {
    switch ($operation) {
        case "Сложить";
            return $arg1 + $arg2;;
            break;
        case "Вычесть";
            return $arg1 - $arg2;;
            break;
        case "Умножить";
            return $arg1 * $arg2;
            break;
        case "Разделить";
            if ($arg2 != 0) {
                return $arg1 / $arg2;
            } else {
                return "на ноль не делим";
            }
            break;
    }
    }
    if(isset($_POST)){
        $res = mathOp((float)$_POST['x'], (float)$_POST['y'], $_POST['operation']);
        $result = mathOp((float)$_POST['a'], (float)$_POST['b'], $_POST['operation']);
}
?>

    <form action="" method="POST">
        <p>Калькулятор 1. Введите числа в форму</p>
        <input type="text" name="x">
        <select name="operation">
            <option value="Сложить">Сложить</option>
            <option value="Вычесть">Вычесть</option>
            <option value="Умножить">Умножить</option>
            <option value="Разделить">Разделить</option>
        </select>
        <input type="text" name="y">
    <input type="submit" value="Посчитать">
    </form>
    <br>
    <p>Результат 1: <?= $res?></p>

    <br><br><br>
    <form action="" method="POST">
        <p>Калькулятор 2. Введите числа в форму</p>
        <input type="text" name="a">
        <input type="text" name="b">
        <br>
        <input type="submit" name="operation" value="Сложить">
        <input type="submit" name="operation" value="Вычесть">
        <input type="submit" name="operation" value="Умножить">
        <input type="submit" name="operation" value="Разделить">
    </form>
<br>
<p>Результат 2: <?= $result?></p>



