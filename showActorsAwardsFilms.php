<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Звіт Actor - Award - Film</h1>


    <?php

    include("db_config.php");

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT ac.NameActors, aw.NameAwards,f.NameFilms 
        FROM actors AS ac LEFT JOIN awards AS aw ON ac.idAwards = aw.idAwards 
        LEFT JOIN films AS f ON ac.idFilms = f.idFilms ORDER BY ac.idActors')) {
        // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("<table><tr><th>Name of Actors</th><th>Name of Awards</th><th>Name of Films</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td></tr>", $row['NameActors'], $row['NameAwards'], $row['NameFilms']); //виводимо результат на сторінку
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
        <li><a href="showActors.php">Таблиця Actors</a><br></li>
        <li><a href="showAwards.php">Таблиця Awards</a><br></li>
        <li><a href="showFilms.php">Таблиця Films</a><br></li>
        <li><a href="index.html">На головну</a><br></li>
    </ul>
    
</body>
</html>
