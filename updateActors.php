<?php

include("db_config.php");

$Id = $_POST['id'];
$NameActors = $_POST['NameActors'];
$Phone = $_POST['Phone'];
$Date_birth = $_POST['Date_birth'];
$idFilms = $_POST['idFilms'];
$idAwards = $_POST['idAwards'];

$sql = "UPDATE actors SET NameActors='$NameActors', Phone='$Phone', Date_birth='$Date_birth', idFilms='$idFilms', idAwards='$idAwards'  WHERE idActors='$Id'";


if($mysqli->query($sql)){
    echo "Рядок змінено успішно";
    }
else
    {
        echo "Error" . $sql . "<br/>" . $mysqli->error;
    }



/*Закриваємо з'єднання*/
$mysqli->close();
header("Location: http://localhost/koledj/showActors.php");
//include("showActors.php")
?>
