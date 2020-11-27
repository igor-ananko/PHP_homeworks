<?php

//Задание 1
echo "Задание 1 <br>";

$a = rand(-10, 10);
$b = rand(-10, 10);

echo $a . " " . $b . "<br>";
if ($a >= 0 && $b >= 0) {
    echo "Разность чисел: " . deduct($a, $b);
} elseif ($a < 0 && $b < 0) {
    echo "Произведение чисел: " .  multiply($a, $b);
} else {
    echo "Сумма чисел: " . sum($a, $b);
}

// Задание 2
echo "<br><br>Задание 2<br>";

echo "<br>Костыль 1<br>";
$task2 = rand(0, 15);

switch ($task2) {
    case 0:
        echo $task2++ . " ";
    case 1:
        echo $task2++ . " ";
    case 2:
        echo $task2++ . " ";
    case 3:
        echo $task2++ . " ";
    case 4:
        echo $task2++ . " ";
    case 5:
        echo $task2++ . " ";
    case 6:
        echo $task2++ . " ";
    case 7:
        echo $task2++ . " ";
    case 8:
        echo $task2++ . " ";
    case 9:
        echo $task2++ . " ";
    case 10:
        echo $task2++ . " ";
    case 11:
        echo $task2++ . " ";
    case 12:
        echo $task2++ . " ";
    case 13:
        echo $task2++ . " ";
    case 14:
        echo $task2++ . " ";
    case 15:
        echo $task2++ . " ";
}

echo "<br>Костыль 2<br>";
$task21 = rand(0, 15);
switch ($task21) {
    case ($task21 < 15):
        while ($task21 <= 15) {
            echo $task21++ . " ";
        }
    case ($task21 == 15):
        echo $task21;
}

echo "<br>Костыль 3, все равно цикл<br>";
$task22 = rand(0, 15);
switch ($task22) {
    case ($task22 < 15):
        rec($task22);
        break;
    case ($task22 == 15):
        echo $task22;
}

function rec($a){
    if($a > 15){
        return;
    }
    echo $a." ";
    rec($a+1);
}

// Задание 3 функции
function sum($a, $b)
{
    return $a + $b;
}

function deduct($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function split($a, $b)
{
    if ($b != 0) {
        return $a / $b;
    } else {
        return "на ноль не делим";
    }
}

// Задание 4
echo "<br><br>Задание 4 <br>";

$operation = "деление";
// a и b из задания 1
// начал читать по select и $_POST, но запутался
echo mathOp($a, $b, $operation);

function mathOp($arg1, $arg2, $operation)
{
    switch ($operation) {
        case "сложение";
            echo sum($arg1, $arg2);
            break;
        case "вычетание";
            echo deduct($arg1, $arg2);
            break;
        case "умножение";
            echo multiply($arg1, $arg2);
            break;
        case "деление";
            echo split($arg1, $arg2);
    }
}


// Задание 6
echo "<br><br>Задание 6 <br>";

function power($val, $pow)
{
    if ($pow == 0)
        return 1;
    elseif ($pow == 0)
        return $val;
    else
        return $val * power($val, $pow - 1);
}
echo power(5, 3);

// Задание 7
echo "<br><br>Задание 7 <br>";

function curHour($h) {
    if (($h % 10) == 0 || ($h % 10) >= 5){
    echo $h = $h . " часов ";
    }
    elseif ($h % 10 == 1){
    echo $h = $h . " час ";    
    }
    else {
    echo $h = $h . " часа ";    
    }
}
function curMinute($m) {
    if (($m % 10) == 0 || ($m >= 11 && $m <= 14) || ($m % 10) >= 5){
    echo $m = $m . " минут ";    
    }
    elseif ($m % 10 == 1){
    echo $m = $m . " минута ";    
    }
    else {
    echo $m = $m . " минуты ";    
    }
}

$h = (int)substr(date("h:i"), 0, 3);
$m = (int)substr(date("h:i"), -2);
//$h=10;
//$m=31;

curHour($h);
curMinute($m);
