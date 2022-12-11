<?php

$lienBreak = "<br>";
/*
1. Напишите функцию, определяющую, к какой четверти часа принадлежит значение переменной $time 
(диапазон возможных значений лежит от 0 до 59).*/
$time = rand(0, 59);

function task_1($time){
    if ($time >=0 && $time <= 15){
        echo "Значение {$time} принадлежит I четверти <br>";
    }
    elseif ($time > 15 && $time <= 30){
        echo "Значение {$time} принадлежит II четверти <br>";
    }
    elseif ($time > 30 && $time <= 45){
        echo "Значение {$time} принадлежит III четверти <br>";
    }
    else {
        echo "Значение {$time} принадлежит IV четверти <br>";
    }   
}
task_1($time);
$lienBreak = "<br>";

/*2.Напишите функцию, которая будет по номеру месяца определять время года. Если номера с таким месяцем не существует, 
функция должна выводить соответствующее сообщение.*/
function task_2($month){
    if ($month >=3 && $month <= 5){
        echo "{$month} - это весна <br>";
    }
    elseif ($month >= 6 && $month <= 8){
        echo "{$month} - это лето <br>";
    }
    elseif ($month >= 9 && $month <= 11){
        echo "{$month} - это осень <br>";
    }
    elseif ($month === 1 || $month === 2 || $month === 12){
        echo "{$month} - это зима <br>";
    }
    else {
        echo "{$month} Такого месяца не существует! <br>";
    } 
}
$month = rand(0, 20);
task_2($month);
$lienBreak = "<br>"; 

/*3.Напишите функцию, которая будет возвращать квадрат числа, если оно четное, и его кубическую степень в противном случае.*/
function task_3($num){
    if ($num % 2 === 0){
        $res = pow($num, 2);
        echo "{$num} - четное число. Результат: {$res} - квадрат числа <br>";
    }
    else {
        $res = pow($num, 3);
        echo "{$num} - нечетное число. Результат: {$res} - кубическая степень! <br>";
    } 
}
$num = rand(0, 20);
task_3($num);
$lienBreak = "<br>"; 

/*4.Напишите функцию, которая в данном трехзначном числе переставляет цифры так, 
чтобы новое число оказалось наибольшим из возможных. Не используйте стандартные функции. */
function task_4($num){
    $oneNum = (int)($num / 100);
    $twoNum = (int)(($num % 100) / 10);
    $threeNum = $num % 10;

    $one = (string)$twoNum.(string)$threeNum.(string)$oneNum;
    $two = (string)$twoNum.(string)$oneNum.(string)$threeNum;
    $three = (string)$threeNum.(string)$twoNum.(string)$oneNum;
    $four = (string)$threeNum.(string)$oneNum.(string)$twoNum;
    $five = (string)$oneNum.(string)$threeNum.(string)$twoNum;

    echo "{$num} - заданное число.  ";

    if ($num > $one && $num > $two && $num > $three && $num > $four && $num > $five){
        echo "{$num} большее из возможных, после перестановки цифр <br>";
    }
    elseif ($one > $num && $one > $two && $one > $three && $one > $four && $one > $five){
        echo "{$one} большее из возможных, после перестановки цифр  <br>";
    }
    elseif ($two > $num && $two > $one && $two > $three && $two > $four && $two > $five){
        echo "{$two} большее из возможных, после перестановки цифр  <br>";
    }
    elseif ($three > $num && $three > $one && $three > $two && $three > $four && $three > $five){
        echo "{$three} большее из возможных, после перестановки цифр  <br>";
    }
    elseif ($four > $num && $four > $one && $four > $two && $four > $three && $four > $five){
        echo "{$four} большее из возможных, после перестановки цифр  <br>";
    }
    else {
        echo "{$five} большее из возможных, после перестановки цифр  <br>";
    } 
}
$num = rand(100, 999);
task_4($num);
$lienBreak = "<br>"; 