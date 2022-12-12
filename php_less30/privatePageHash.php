<?php 
session_start();
if (!($_SESSION['logged_in_user_id'] === '1' && $_SESSION['logged_in_user_name'] === 'vasya')) {
    Header("Location: autorizate.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Личный кабинет</h1>
    <h2><a href="index.php"> На главную  </h2>
</body>
</html>