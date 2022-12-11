<?php
// 1. С помощью Heredoc выведите стихотворение А.С. Пушкина с кавычками, учитывая требования к выводу из ДЗ к уроку 2
// Аптеку позабудь ты для венков лавровых
// И не мори больных, но усыпляй здоровых.
$lineBreak = "<br>";
$text = <<<INFO
"Аптеку позабудь ты для венков лавровых
И не мори больных, но усыпляй здоровых."
INFO;
echo nl2br($text);
echo $lineBreak;

// 2. С помощью стандартных функций substr(), chunk_split() и date() выведите строку “010122” в формате даты “01.01.2022”.
$data = "010122";
echo substr(chunk_split($data, 2, '.'), 0, -1);
echo $lineBreak;

// 3. С помощью стандартной функции strpos() определите, есть ли подстрока “пяти” во фразе “Я считаю до пяти”. 
// Организуйте вывод с помощью условной конструкции.
$someText = "Я считаю до пяти";
if (strpos($someText, 'пяти') != false) {
    echo "Есть";
}
else {
    echo "Нету";
}
echo $lineBreak;

// 4.Определите имя файл в строке пути к нему “C:/OpenServer/domains/localhost/index.php”. 
// Используйте стандартные функции substr() и strrchr()
$pathFile = "C:/OpenServer/domains/localhost/index.php";
$fileName = substr(strrchr($pathFile, "/"), 1);
echo $fileName;