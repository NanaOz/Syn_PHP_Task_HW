<?php
/*
1.Сколько аргументов можно передавать стандартным функциям min и max? 
     2
2.На каком месте в списке аргументов функции указывается аргумент по умолчанию?
     в конце
3.Напишите функцию, которая принимает два аргумента, выполняет вычисление с их использованием, а затем возвращает 
предложение с результатом в браузер. Вывод должен содержать высоту и ширину прямоугольника. Организуйте вывод внутри функции, а затем 
за ее пределами.
 */
$lienBreak = "<br>";
function task_3($rectangleHeight = 1, $rectangleWidth = 1){
    $rectangleArea = $rectangleHeight * $rectangleWidth;
    echo "Площадь прямоугольника равна {$rectangleArea} <br>";
}
task_3(4, 5);

//4.Найдите функцию, которая находит длину гипотенузы прямоугольного треугольника. Напишите скрипт с использованием этой функции.
function hypotenuseLength($katet1, $katet2){
    $hypotenuse = sqrt(pow($katet1, 2) + pow($katet2, 2));
    return $hypotenuse;
}
$hypotenuse = "Длинна гипотенузы равна ". hypotenuseLength(3, 4) . $lienBreak;
print_r($hypotenuse);

//5.Используя функцию генерации случайного числа, сгенерируйте целое число в диапазоне от 67 до 200.
function randNum(){
    $randomNum = rand(67, 200);
    echo "Рандомное число {$randomNum} <br>";
}
randNum();

//6.Используя функцию генерации случайного числа, сгенерируйте дробное число в диапазоне от 67 до 200.
function randNumDouble(){
    $randomNum = rand(67, 200)/100;
    echo "Рандомное дробное число {$randomNum} <br>";
}
randNumDouble();