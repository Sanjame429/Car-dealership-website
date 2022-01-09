<?php

include '../databases.php';

$id = $_POST['id'];
$customer_text = $_POST['customer_text'];
$goods_id = $_POST['goods_id'];

mysqli_query($connect, "INSERT INTO `comments` (`id`, `customer_text`, `goods_id`) VALUES (NULL, '$customer_text', '$id')");

header('Location: /goods.php?id=' . $id);