<?php

include '../databases.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect, "UPDATE `goods` SET `name` = '$name', `price` = '$price', `description` = '$description' WHERE `goods`.`id` = '$id'");

header('Location: /');