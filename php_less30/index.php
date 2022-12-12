<?php
session_start();
unset($_SESSION['logged_in_user_id']);
unset($_SESSION['logged_in_user_name']);
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
    <h1>Домашняя страница</h1>
    <h2><a href="privatePageHash.php">Закрытая информация</h2>
</body>
</html>