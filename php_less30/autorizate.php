<?php
session_start();
if (!isset($_GET['submit'])){
    echo "
    <form>
        Login: <input type=text name=login>
        Password: <input type=password name=pass>
        <input type=submit name=submit value=Войти>
    </form>";
}
else {
    $passForm = $_GET['pass'];
    $login = $_GET['login'];
    $link = mysqli_connect("localhost", "root", "", "pass");
    if ($link == false){
        print("Ошибка" . mysqli_connect_error());
    }
    else{
        $sql = "SELECT hash FROM users WHERE login = ' " . $login . "' ;";
        $result = mysqli_query($link, $sql);
        if ($result == false) {
            print("Ошибка") . mysqli_error($link);
        }
        else {
            $pass = mysqli_fetch_array($result);
            if(password_verify($passForm, $pass['hash'])) {
                $_SESSION['logged_in_user_id'] = '1';
                $_SESSION['logged_in_user_name'] = 'vasya';
                Header("Location: privatePageHash.php");
            }
            else echo "Неверный пароль";
        }
    }
}
?>