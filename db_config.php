<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12.12.2020
 * Time: 22:41
 */
$mysqli = new mysqli('localhost', 'root', '', 'lab06'); // Створюємо нове підключення з назвою $mysqli за допомогою створення об'єта класу mysqli. Параметри підключення по порядку: сервер, логін, пароль, БД
$mysqli->set_charset("utf8"); // Встановлюємо кодування utf8

if (mysqli_connect_errno()) {
    printf("Підключення до сервера не вдалось. Код помилки: %s\n", mysqli_connect_error());
    exit;
}