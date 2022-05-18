<?php

include 'db_connection.php';


if(empty($_POST['name'] && $_POST['age'] && $_POST['occupation'])) {
    echo "you need to fill in all your information";
} else {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $occupation = $_POST['occupation'];

    $sql = "INSERT INTO users (id, name, age, occupation) VALUES (NULL, '$name', '$age', '$occupation');";
    $result = mysqli_query($conn, $sql);
    header("Location: http://localhost/week-three-php-front-and-back/");
}









?>