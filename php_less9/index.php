<?php
// 1 Изучите понятие многомерный массив в php.
// 2 Изучите понятие сортировка массива и их виды. Посмотрите, какие стандартные функции сортировок реализованы в php.
// 3 Изучите цикл foreach. Где его полезнее всего применять?
/*4 Выберите любой месяц года и составьте массив из значений температуры воздуха в соответствии с количеством дней в нем.
По очереди выведите следующие значения:
5 Средняя температура месяца;
6 Три самых высоких значений температуры;
7 Три самых низких значений температуры.
Для выбора трех высоких и трех низких температур используйте стандартную функцию array_slice().*/
$lineBreak = "<br>";
$temperature = array(18, 16, 15, 17, 16, 15, 16, 14, 13, 12, 12, 6, 5, 8, 10, 10, 12, 12, 8, 11, 11, 12, 12, 13, 10, 9, 10, 8, 6, 4);
$count = count($temperature);
$summ = 0;
foreach ($temperature as $temp) {
    $summ += $temp;
}
$averge = round($summ / $count);
echo "Средняя максимальная температура за месяц составила {$averge}. {$lineBreak}";
rsort($temperature);
$hotTemp = array_slice($temperature, 0, 3);
echo "Три самых высоких значений температуры:{$lineBreak}";
foreach ($hotTemp as $hot) {
    echo "{$hot}{$lineBreak}";
}
$coldTemp = array_slice($temperature, -3, 3);
echo "Три самых низких значения температуры:{$lineBreak}";
foreach ($coldTemp as $cold) {
    echo "{$cold}{$lineBreak}";
}


// 8 Создайте многомерный массив из 10 подмассивов. 
// Заполните каждый из подмассивов 10-ю случайными числами в диапазоне значений от 1 до 10.
$arr = [];
for ($i = 0; $i < 10; $i++) {
    echo "Значения {$i}:";
    for ($j = 0; $j < 10; $j++) {
        $arr[$i][$j] = rand(1, 10);
        echo $arr[$i][$j];
    }
    echo $lineBreak;
}

// 9 Создайте многомерный массив с данными пользователей: имя пользователя, логин и пароль. 
// При организации подмассивов используйте формат ключ-значение ("userName" => "Stanley"). 
// С помощью цикла выведите данные пользователей также в формате ключ-значение.
$users = array(
    array(
        "name" => "Vasya",
        "login" => "vasya001",
        "pass" => "1253"
    ),
    array(
        "name" => "Kolya",
        "login" => "kolya564",
        "pass" => "5df5f4s"
    ),
    array(
        "name" => "Anna",
        "login" => "annaAnna",
        "pass" => "dcda4c4d"
    ),
    array(
        "name" => "Sasha",
        "login" => "sasasa",
        "pass" => "dzd55ds"
    )
);
echo "Информация о пользователях: {$lineBreak}";
foreach ($users as $users){
    foreach ($users as $key => $value){
        echo "{$key}: {$value}{$lineBreak}";
    }
}

// 10 Посчитайте сумму квадратов чисел в диапазоне от 1 до 25.
echo "Сумма квадратов чисел в диапазоне от 1 до 25{$lineBreak}";
$sum = 0;
for ($i = 1; $i <=25; $i++){
    $sum += pow($i, 2);
}
echo $sum;
echo $lineBreak;

// 11 Напишите функцию, которая будет формировать приветственную фразу для разных пользователей (разных имен). 
// Дополните эту функцию возможностью выводить приветствие на разных языках: русский, английский, французский и итальянский.
function helloLang($lang, $name){
    $helloArr = array('ru' => 'Привет', 'en' => 'Hello', 'rb' => 'прывітанне', 'de' => 'Hallo');
    $mess = $helloArr[$lang] . ", " . $name ;
    return $mess;
}
echo "На русском: " . helloLang('ru', 'Anna') . $lineBreak;
echo "На английском: " . helloLang('en', 'Anna') . $lineBreak;
echo "На белорусском: " . helloLang('rb', 'Anna') . $lineBreak;
echo "На немецком: " . helloLang('de', 'Anna') . $lineBreak;