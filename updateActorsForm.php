<html>
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Лабораторна робота, MySQL, з'єднання з базою даних">
    <meta name="description" content="Лабораторна робота. З'єднання з базою даних">
    <title>Вставка даних</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php
        include("showActors.php")
    ?>

<form action="updateActors.php" method="post">
    <label>Id to change</label>
    <input name="id" type="text"><br>

    <label>New Actor name</label>
    <input name="NameActors" type="text" required><br>

    <label>New Phone number</label>
    <input name="Phone" type="number" required><br><br>

    <label>New Date of birth:</label>
    <input name="Date_birth" type="date" required><br><br>

    <label>Award:</label>
    <select name="idAwards">
        <option value="1">Оскар</option>
        <option value="2">Золотий глобус</option>
        <option value="3">Кінопремія Голлівуду</option>
        <option value="4">Еммі</option>
        <option value="5">Сатурн</option>
    </select><br>

    <label>Film:</label>
    <select name="idFilms">
        <option value="1">Месники</option>
        <option value="2">Бетмен</option>
        <option value="3">Роккі</option>
        <option value="4">Нестримні</option>
    </select>

    <input type="submit" value="Змінюємо рядок">
</form>

</body>
</html>