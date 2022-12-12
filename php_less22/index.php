<?php
$link = mysqli_connect("localhost", "root","", "syn_less20");
if ($link == false){
    print("Невозможно подключиться. Ошибка " . mysqli_connect_error());
}
else {
    mysqli_set_charset($link, "utf8");
    $date = "01.12.2022";
    $date = date("Y-m-d", strtotime($date));
    echo "Список заказов от " . $date . "<br>";
    $sql = 'SELECT clients.sureName, clients.firstName, clients.secondName, clients.phone, 
        material.materialName, products.productName, orders.orderDate FROM clients JOIN material JOIN products JOIN orders 
        ON orders.clientID = clients.ID AND orders.materialID = material.ID AND orders.productID = products.ID 
        WHERE orders.orderDate = \'' . $date. '\';';
    $result = mysqli_query($link, $sql);
    if ($result == false) {
        echo "Ошибка " . mysqli_error($link);
    }
    while ($row = mysqli_fetch_array($result)) {
        print("<br>Имя клиента: " . $row['sureName'] . " " . $row['firstName'] . " " . $row['secondName'] . 
                ";<br>Номер телефона: " . $row['phone'] . "; <br>Товар: " . $row['productName'] . ";<br>Материал изготовления: " . 
                $row['materialName'] . "<br>");
    }
}