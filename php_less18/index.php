<?php
$lineBreak = "<br>";
echo "Задание 1 - 2{$lineBreak}";
ob_start();
    echo "Это первая строка {$lineBreak}";
    $firstRow = ob_get_contents();
ob_end_clean();
echo "Это вторая строка {$lineBreak}";
echo $firstRow;
echo $lineBreak;
echo "Задание 3{$lineBreak}";
function reverse_str ($buffer) {
    $newStr = "";
    while ($i < strlen($buffer)) {
        $newStr = $newStr . $buffer[(strlen($buffer) - 1) - $i];
        $i = $i +1;
    }
    return $newStr;
}
ob_start("reverse_str");
    echo "reverse string";
ob_end_flush();
echo $lineBreak;
echo "Задание 4{$lineBreak}";
echo "Исходный код: {$lineBreak}";
echo ob_get_level();
ob_start();
    echo ob_get_level();
        ob_start();
            echo ob_get_level();
                ob_start();
                    echo ob_get_level();
                ob_end_flush();
        ob_end_flush();
ob_end_flush();
echo $lineBreak;
echo "Итоговый код: {$lineBreak}";
ob_start();
    ob_start();
        ob_start();
            echo ob_get_level();
        ob_end_flush();
        echo ob_get_level();
    ob_end_flush();
    echo ob_get_level();
ob_end_flush();
echo ob_get_level();
