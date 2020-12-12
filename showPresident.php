<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Presidents</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Presidents</h1>


    <?php

    include("db_config.php");

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT * FROM president')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Presidents list: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>Id</th><th>Name President</th><th>Data of Birth</th><th>Studio</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['idPresident'], $row['NamePresident'], $row['DataBirth'], $row['Studio']); //виводимо результат на сторінку
        };
        printf("</table>");
        /*Звільняємо пам'ять*/
        $result->close();
    }

    /*Закриваємо з'єднання*/
    $mysqli->close();
    ?>

    <br><br><br>

    <ul>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
