<?php

    include 'databases.php';

    $goods_id = $_GET['id'];

    $goods = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");

    $goods = mysqli_fetch_assoc($goods);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update goods</title>
</head>
<body>
    <h3>Update goods</h3>
    <form action="script/update.php" method="post">
        <input type="hidden" name="id" value="<?= $goods['id'] ?>">
        <p>Name</p>
        <input type="text" name="name" value="<?= $goods['name'] ?>">
        <p>Description</p>
        <textarea name="description"><?= $goods['description'] ?></textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $goods['price'] ?>"> <br> <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>