<?php

include '../databases.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `goods` WHERE `goods`.`id` = '$id'");

header('Location: /');