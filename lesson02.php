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
    if ($pow > 1)
        return $val * power($val, $pow - 1);
}

echo power(2, 4);
