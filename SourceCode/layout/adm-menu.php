<?php


// var_dump($user);

?>

<div class="container">
    <div class="row-left">
        <i class="fa fa-home home" aria-hidden="true">
            <a href="../index.php">Home</a></i></span>

        <span>
            <h4 id="time"></h4>
        </span>
        <div class="top">
            <div class="avt" onclick="change_avatar(<?= $user['id'] ?>)">
                <img src="../img/avatar/<?= $user['avatar'] ?>" alt="avatar" onerror="this.onerror=null;this.src='../img/avatar/default.jpg';">
            </div>
            <h3 style="color: white;"><?= $user['user_name'] ?></h3>
        </div>
        <div class="menu">
            <hr>
            <div id="demo" class="menu-left">
                <ul>
                    <li><a href="?admin=profile"><i class="fa fa-id-badge" aria-hidden="true"></i> Profile</a></li>
                    <li><a href="?admin=brand.php"><i class="fas fa-book-open"></i>Brand</a></li>

                    <?php

                    if ($_SESSION['uid'] == 1) {
                        echo '<li><a href="?admin=user"><i class="fa fa-user-circle" aria-hidden="true"></i> User Management</a></li>';
                    }


                    if ($user['sell_permission'] == "1")
                        echo '<li><a href="?admin=product"><i class="fas fa-dharmachakra"></i>Product Management </a></li>';
                    ?>
                </ul>
            </div>
        </div>

    </div>
</div>