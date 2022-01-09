<?php include 'databases.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Goods</title>
</head>
<style>
    th, td {
        padding: 10px;
    }

    th {
        background: #606060;
        color: #fff;
    }

    td {
        background: #b5b5b5;
    }
</style>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>

        <?php

            $goods = mysqli_query($connect, "SELECT * FROM `goods`");

            $goods = mysqli_fetch_all($goods);

            foreach ($goods as $goods) {
                ?>
                    <tr>
                        <td><?= $goods[0] ?></td>
                        <td><?= $goods[1] ?></td>
                        <td><?= $goods[2] ?></td>
                        <td><?= $goods[3] ?></td>
                        <td><a href="goods.php?id=<?= $goods[0] ?>">View</a></td>
                        <td><a href="update.php?id=<?= $goods[0] ?>">Update</a></td>
                        <td><a style="color: red;" href="script/delete.php?id=<?= $goods[0] ?>">Delete</a></td>
                    </tr>
                <?php
            }
        ?>
    </table>
    <h3>Add new goods</h3>
    <form action="script/create.php" method="post">
        <p>Name</p>
        <input type="text" name="name">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price"> <br> <br>
        <button type="submit">Add new goods
    </form>
</body>
</html>