<?php
/*
1.Ознакомьтесь с комбинированными операторами php.

2.Напишите скрипт, в котором по-очереди переменная будет
изменять свое значение с помощью комбинированных
операторов:

Стартовое значение 0;
Увеличьте значение переменной на 7;
Увеличьте значение переменной в 4 раза;
Уменьшите значение переменной на 8;
Разделите значение переменной на 4;
Возведите значение переменной в 3 степень;
Найдите остаток от деления переменной на 3
 
Все промежуточные вычисления необходимо выводить с указанием
примененной операции.

3.Ознакомьтесь с понятием “переменные переменных” php.

4. Создайте 2 переменных и присвойте им значения 50 и 70
соответственно.

Теперь создайте переменную $pupil и присвойте ей строку с именем первой переменной.

Выведите на экран ${$pupil}.

Создайте еще одну переменную $student и присвойте ей строку с именем второй переменной.

Выведите на экран ${$student}.
*/ 

$lineBreak = "<br>";

$task1 = "<b>Задание 1</b>";
$startInt = 0;
$increaseBy7 = 7;
$increaseIn4 = 4;
$reduceBy8 = 8;
$devideBy4 = 4;
$degree3 = 3;
$remOdDivision3 = 3;

echo "{$task1} $lineBreak";
$startInt = $startInt + $increaseBy7 ;
echo "<i>Увеличена на 7:</i> {$startInt} {$lineBreak}";
$startInt = $startInt * $increaseIn4 ;
echo "<i>Увеличена в 4 раза:</i> {$startInt} {$lineBreak}";
$startInt = $startInt - $reduceBy8 ;
echo "<i>Уменьшена на 8:</i> {$startInt} {$lineBreak}";
$startInt = $startInt / $devideBy4 ;
echo "<i>Разделена на 4:</i> {$startInt} {$lineBreak}";
$startInt = $startInt ** $degree3 ;
echo "<i>Возведена в степень 3:</i> {$startInt} {$lineBreak}";
$startInt = $startInt % $remOdDivision3;
echo "<i>Остаток от деления на 3:</i> {$startInt} {$lineBreak}";

$task2 = "<b>Задание 2</b>";
$one = 50;
$two = 70;
echo "{$task2} $lineBreak";
$pupil = "one";
echo ${$pupil};
$student = "two";
echo ${$student};




