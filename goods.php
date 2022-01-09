<?php

    include 'databases.php';

    $goods_id = $_GET['id'];

    $script = mysqli_query($connect, "SELECT * FROM `goods` WHERE `id` = '$goods_id'");

    $script = mysqli_fetch_assoc($script);

    $comments = mysqli_query($connect, "SELECT * FROM `comments` WHERE `goods_id` = '$goods_id'");

    $comments = mysqli_fetch_all($comments);
?>

<!doctype html>
<html lang="en">
<head>
    <title>Goods</title>
</head>
<body>
    <h2>Name: <?= $script['name'] ?></h2>
    <h4>Price: <?= $script['price'] ?></h4>
    <h4>Description: </h4> <p> <?= $script['description'] ?></p>

    <hr>

    <h3>Add comment</h3>
    <form action="script/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $script['id'] ?>">
        <textarea name="customer_text"></textarea> <br><br>
        <button type="submit">Add comment</button>
    </form>

    <hr>

    <h3>Comments</h3>
    <ul>
        <?php

            foreach ($comments as $comment) {
            ?>
                <li><?= $comment[1] ?></li>
            <?php
            }
        ?>
    </ul>
</body>
</html>