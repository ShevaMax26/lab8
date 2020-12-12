<?php

include("db_config.php");


$id = $_POST['id'];


$sql = "DELETE FROM actors WHERE idActors='$id'";


if($mysqli->query($sql)){
    echo "Рядок видалено успішно";
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
