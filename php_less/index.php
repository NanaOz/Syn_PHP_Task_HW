<?php

/*Задание 1: Вывести приветственное сообщение в начале электронного
письма: “Hello, Anna!”*/
$task1 = "<b>Задание 1</b>";
$name_user = "Anna";
$hello = "<br>Hello";
//echo $task1 . $hello . " " . $name_user;
echo "{$task1} {$hello}, {$name_user}!";

/*Задание 2 Вывести стихотворение А.С. Пушкина с соблюдением
форматирования. В начале и в конце стихотворения должны
стоять кавычки.*/
$task2 = "<br><b>Задание 2</b>";
$poem = "<br> \" <i>Аптеку позабудь ты для венков лавровых 
            <br>И не мори больных, но усыпляй здоровых.</i>\"";
//echo $task2 . $poem;
echo "{$task2} {$poem}";

/*Задание 3 Напишите скрипт, который считает и выводит на экран количество
секунд в часе.*/
$task3 = "<br><b>Задание 3</b>";
$secInMin = 60;
$minInHour = 60;
$secInHour = $secInMin * $minInHour;
//echo $task3 . "<br>В часе " . $secInHour . " секунд.";
echo "{$task3}<br>В часе {$secInHour} секунд.";