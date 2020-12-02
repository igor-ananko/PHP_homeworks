
<?php

//Задание 1
echo "<br><br>Задание 1 <br>";

$i = 0;
while ($i <= 100) {
    if ($i % 3 == 0 && $i > 0) {
        echo "$i ";
        $i++;
    }
    else {
        $i++;
    }
}

// Задание 2
echo "<br><br>Задание 2 <br>";

function oddEven($num) {
    if ($num == 0) {
        return "$num - это ноль";
    }
    elseif ($num % 2 == 0) {
        return "$num - четное число";
    }
    else {
        return "$num - нечетное число";
    }
}

$n = 0;
do {
    echo oddEven($n) . "<br>";
    $n++;
} while ($n <= 10);

// Задание 3
echo "<br><br>Задание 3 <br>";

$area = [
    "Московская область" => ["Москва", "Зеленоград", "Клин", "Королев"],
    "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
    "Волгоградская область" => ["Волгоград", "Волжский", "Камышин", "Калач-на-Дону"]
];

foreach($area as $region => $city) {
    echo "<br>$region: <br>";
     foreach ($city as $city1) { 
            echo  "$city1 ";
        }
 
}

// Задание 4
echo "<br><br>Задание 4 <br>"; 

function translit($stroka){
    $abc = [
    "а" => "а",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "yo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "kh",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "shch",
    "ъ" => "'",
    "ы" => "y",
    "ь" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
    "А" => "A",
    "Б" => "B",
    "В" => "V",
    "Г" => "G",
    "Д" => "D",
    "Е" => "E",
    "Ё" => "Yo",
    "Ж" => "Zh",
    "З" => "Z",
    "И" => "I",
    "К" => "K",
    "Л" => "L",
    "М" => "M",
    "Н" => "N",
    "О" => "O",
    "П" => "P",
    "Р" => "R",
    "С" => "S",
    "Т" => "T",
    "У" => "U",
    "Ф" => "F",
    "Х" => "Kh",
    "Ц" => "Ts",
    "Ч" => "Ch",
    "Ш" => "Sh",
    "Щ" => "Shch",
    "Ы" => "Y",
    "Э" => "E",
    "Ю" => "Yu",
    "Я" => "Ya"
];
    $stroka = strtr($stroka, $abc);
    return $stroka;
}

$stroka = ".          Привет! Как твои дела, Вася?<br> Эээ, брат, вещь!<br> ЭЮЯ ЭЮЯ здесь получается ПеСтНя            .";

echo translit($stroka);


// Задание 5
echo "<br><br>Задание 5 <br>"; 

function lowerSpace($stroka) {
    $abc = [
    " . " => "_",
    " ." => "",
    ". " => "",
    "    " => "",
    ";" => "",
    "?" => "",
    "." => "",
    ":" => "",
    "<br>" => "",
    "," => "",
    "'" => "",
    "!" => "",
    " " => "_"
    ];
    $stroka = strtr(mb_strtolower(trim($stroka)), $abc);
    return $stroka;
}
// пытался решить задачу, чтобы убрать произвольные символы перед текстом. 
// В голову пришла только громоздкая конструкция по проверке и замене всех точек запятых на пробелы,
// потом trim, потом уже замена пробелов на нижние подчеркивания


echo lowerSpace($stroka);

// Задание 7
echo "<br><br>Задание 7 <br>"; 


for ($i = 0; $i < 10; print "$i ", $i++);

//// есть предпложение, что echo не возвращает значение $i после вывода на экран, поэтому цикл прерывается
//


// Задание 8
echo "<br><br>Задание 8 <br>"; 

foreach ($area as $region => $city) { 
    echo "<br>$region: <br>";
    foreach ($city as $city1) { 
        if (mb_substr($city1,0,1) === "К") 
            echo  " $city1";
    }
}

//Вот прям тяжео далось. 

// Задание 9
echo "<br><br>Задание 9 <br>"; 

echo lowerSpace(translit($stroka));
