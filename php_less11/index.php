<?php 
$lineBreak = "<br>";
// 1. Выведите количество дней до еще не наступившего дня рождения (выберите любую дату). 
// Для получения целого результата используйте стандартную функцию intval().
$bday = mktime(0, 0, 0, 9, 8, 2023);
$current = time();
const SEC_PER_DAY = 60 * 60 * 24;
$datToNextBDay = intval(($bday - $current) / SEC_PER_DAY);
echo "До следующего дня рождения {$datToNextBDay} дней. {$lineBreak}";

// 2.С помощью стандартной функции date() приведите строку “2022-02-23” к дате в формате “d-m-Y”. 
// Результат выведите на страницу в браузере.
$data = "2022-02-23";
$newDate = date("d-m-Y", strtotime($data));
echo $newDate . $lineBreak;

// 3.Посчитайте количество дней с начала года до текущей даты. 
// Для получения целого результата используйте стандартную функцию intval().
$fromDate = strtotime("2022-01-01");
$toDate = time();
$subDate = intval(($toDate - $fromDate)/SEC_PER_DAY);
echo $subDate;