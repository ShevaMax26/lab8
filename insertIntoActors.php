<?php

include("db_config.php");


$NameActors = $_POST['NameActors'];
$Phone = $_POST['Phone'];
$Date_birth = $_POST['Date_birth'];
$idFilms = $_POST['idFilms'];
$idAwards = $_POST['idAwards'];

$sql = "INSERT INTO actors (NameActors, Phone, Date_birth, idAwards, idFilms) 
        VALUES ('$NameActors', '$Phone', '$Date_birth', '$idAwards', '$idFilms' )";


if($mysqli->query($sql)){
    echo "Рядок вставлено успішно";
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
