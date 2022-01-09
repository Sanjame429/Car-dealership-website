<?php

include '../databases.php';

$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];

mysqli_query($connect,"INSERT INTO `goods` (`id`, `name`, `price`, `description`) VALUES (NULL, '$name', '$price', '$description')");

header('../index.php');