<?php
$rows = 2;
$cols = 4;
$data = array(
    array(
        "1", "Антонов Игорь Владимирович", "helloworld@mail.ru", "муж", "1986"
    ),
    array(
        "2", "Иванова Кристина Викторовна", "helloworld@mail.ru", "жен", "1972"
    ),
    array(
        "3", "Борисов Максим Анатольевич", "helloworld@mail.ru", "муж", "1989"
    )
);

?>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1 class="greeting"><?php echo "Привет новый пользователь!"; ?></h1>

    <h3>Текущая дата:<?php echo date("d/m/Y"); ?></h3>

    <table class="table">
        <thead>
            <th>№</th>
            <th>ФИО</th>
            <th>E-mail</th>
            <th>Пол</th>
            <th>Год рождения</th>
        </thead>
        <?php
        echo "<tbody>";
        for ($tr = 0; $tr <= $rows; $tr++) {
            echo "<tr>";
            for ($td = 0; $td <= $cols; $td++) {
                echo "<td>" . $data[$tr][$td] . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        ?>
        <tfoot>
            <th colspan="4">ИТОГО</th>
            <th>3</th>
        </tfoot>
    </table>

</body>

</html>