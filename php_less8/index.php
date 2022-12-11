<?php
// 1.Изучите таблицы истинности для логических операций И, ИЛИ и НЕ.
// 2.Напишите функцию, определяющую, является ли возраст призывным. от 18 до 27 лет
 function draftAge($age){
    $lineBreak = "<br>";
    if ($age > 18 && $age < 27){
        return "Возраст {$age} является призывным. $lineBreak";
    }
    return "Возраст {$age} не является призывным. $lineBreak";
 }
 $age = rand(1, 99);
 echo draftAge($age);

// 3.Напишите функцию, определяющую, равны два числа друг другу или нет.
 function equalityNumbers($num1, $num2){
    $lineBreak = "<br>";
    if ($num1 === $num2){
        return "Число {$num1} равно числу {$num2}. {$lineBreak}";
    }
    return "Число {$num1} не равно числу {$num2}. {$lineBreak}";
 }
 $num1 = rand(1, 9);
 $num2 = rand(1, 9);
 echo equalityNumbers($num1, $num2);

// 4.Напишите функцию, возвращающую значение true, если хотя бы один из аргументов имеет положительное значение.
 function positiveNum($num1, $num2){
    return $num1 > 0 || $num2 > 0;
 }
 $lineBreak = "<br>";
 $num1 = rand(-10, 10);
 $num2 = rand(-10, 10);
 var_dump(positiveNum($num1, $num2));
 echo $lineBreak;

// 5.Напишите функцию, которая параметрами принимает 2 числа. Если их сумма больше 15 - пусть функция вернет true, а если нет - false.
function sumNum($num1, $num2){
    $number = 15;
    $sum = $num1 + $num2;
    return $sum > $number;
 }
 $num1 = rand(1, 20);
 $num2 = rand(1, 20);
 var_dump(sumNum($num1, $num2));
 echo $lineBreak;
