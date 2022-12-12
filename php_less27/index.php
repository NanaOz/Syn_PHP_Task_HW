<?php
function checkInput($text)
{
    $text = trim($text);
    $text = stripcslashes($text);
    $text = htmlspecialchars($text);
    return $text;
}
$nameErr = $emailErr = $logErr = $passErr = "";
$name = $email = $log = $pass = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["userName"])) {
        $nameErr = "Введите имя ";
    } else {
        $name = checkInput($_POST['userName']);
        if (!preg_match("/^(([a-zA-Z' -]{1,40})|([а-яА-Я' -]{1, 40}))$/u", $name)) {
            $nameErr = "Введите корректное имя. ";
        }
    }
    if (empty($_POST["userLogin"])) {
        $logErr = "Введите логин";
    } else {
        $log = checkInput(($_POST["userLogin"]));
        if (!preg_match("/^(([a-zA-Z0-9-_]{2,20}))$/u", $log)) {
            $logErr = "Введите корректный логин. ";
        }
    }
    if (empty($_POST["userEmail"])) {
        $emailErr = "Введите email";
    } else {
        $email = checkInput($_POST["userEmail"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Введите корректный email. ";
        }
    }
    if (empty($_POST["userPass"])) {
        $passErr = "Введите пароль. ";
    } else {
        $pass = checkInput($_POST["userPass"]);
        if (!preg_match("/^(?=.*[a-z])(?=.*{A-Z])(?=.*\d)(?=.*[^\da-zA-Z]).{6,}$/u", $pass)) {
            $passErr = "Введите корректный пароль. ";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HW27</title>
</head>

<body>
    <div class="contact-us">
        <form name="userForm" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label>Ваше имя: <span class="error">*<br><?php echo $nameErr; ?></span><input type="text" name="userName"></label>
            <label>Ваш логин: <span class="error">*<br><?php echo $logErr; ?></span><input type="text" name="userLogin"></label>
            <label>Ваш email: <span class="error">*<br><?php echo $emailErr; ?></span><input type="text" name="userEmail"></label>
            <label>Ваш пароль: <span class="error">*<br><?php echo $emailErr; ?></span><input type="text" name="userPass"></label>
            <input type="submit" name="send" value="Зарегистрироваться">
        </form>
        <b>Вы ввели: </b><br>
        Пароль: <?php echo $pass; ?><br>
    </div>
</body>

</html>