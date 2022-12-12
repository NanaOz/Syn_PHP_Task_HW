<?php
function isLeap($year) {
    return date("L", mktime(0, 0, 0, 7, 7, $year));
}
function whatDay($date) {
    return date("l", strtotime($date));
}
function daysTOBD($dateBD){
    $currentTime = time();
    $secPerDay = 60 * 60 * 24;
    $daysToNextBDay = intval((strtotime($dateBD) - $currentTime) / $secPerDay);
    return $daysToNextBDay;
}
if (isset($_POST['userCity'], $_POST['userYear'], $_POST['userDate'], $_POST['userBDay'])) {
    print("Любимый город пользователя: " . $_POST['userCity'] . "<br>");
    if (isLeap($_POST['userYear'])) print("Год " . $_POST['userYear'] . "високосный. <br>");
    else print("Год " . $_POST['userYear'] . "не високосный. <br>");
    print($_POST['userDate'] . "день недели: " . whatDay($_POST['userDate']) . "<br>");
    print("До следующего дня рождения: " . daysTOBD($_POST['userBDay']) . "дней<br>");
}