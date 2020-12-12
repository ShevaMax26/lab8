<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Таблиця Actors</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Таблиця Actors</h1>


    <?php
    // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
    $mysqli = new mysqli('localhost', 'root', '', 'lab06');
    // Встановлюємо кодування utf8
    $mysqli->set_charset("utf8");

    
    if (mysqli_connect_errno()) {
        printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
        exit;
    }

    /* Надсилаємо запит серверу */
    if($result = $mysqli->query('SELECT * FROM actors ORDER BY idActors')) {   // $mysqli - наш об'єкт, через який здійснюємо підключення, query - метод, який дозволяє виконати довільний запит

        printf("Список студентів: <br><br>");   // <br> в html - розрив рядка
        printf("<table><tr><th>Id</th><th>Actor name</th><th>Phone number</th><th>Date of birth</th></tr>");   // <br> в html - розрив рядка
        /* Вибірка результатів запиту  */
        while( $row = $result->fetch_assoc() ){ // fetch_assoc() повертає рядок із запиту у вигляді асоціативного масиву, наприклад $row = ['id'=>'1', 'pib'=>'Олександр', 'grupa'=>'ІПЗ-31']
            printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>", $row['idActors'], $row['NameActors'], $row['Phone'], $row['Date_birth']); //виводимо результат на сторінку
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
        <!-- <li><a href="https://www.google.com/">Google</a><br></li> -->
        <li><a href="insertIntoActorsForm.php">Вставити рядок</a><br></li>
         <li><a href="updateActorsForm.php">Змінити рядок</a><br></li>
         <li><a href="deleteFromActorsForm.php">Видалити рядок</a><br></li>
         <li><a href="showActorsAwardsFilms.php">Звіт Actor - Award - Film</a><br></li>
         <li><a href="index.html">На головну</a><br></li>
     </ul>

 </body>
 </html>
