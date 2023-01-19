<?php
// require_once("./db/dbhelper.php");
// require_once("./utils/utility.php");
require_once('./utils/getuser.php');
?>
<header>
    <!-- <div id="w-top"></div> -->
    <div class="h-top">
        <span class="hotline"></span>
        <div class="search">
            <form action="show-room.php" method="GET">
                <input type="text" name="s" autocomplete="off" placeholder="Enter the name of car...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            </form>
        </div>

        <div class="account-manager">

            <a href="<?php
            if(!empty($_SESSION)){
                        if ($_SESSION['uid'] == 1) {
                            echo './accounts/admin.php';
                        } else {
                            echo './accounts/account-setting.php';
                        }}
                        ?>">
                        <?php
                        if(isset($user)){
                            echo '<img class="avt" src="img/avatar/'. $user['avatar'] .'" alt="avatar"><span>'.$user['user_name'].'</span>';
                        }
                        ?>
        </a>

        </div>
        <div class="account-box">
            <?php
            if (!isset($_SESSION['uid'])) {
                echo "<span><a href='./accounts/sign.php'>Sign Up or Sign In</a></span>";
            } else {
                echo "<span><a href='./accounts/logout.php'>Log Out</a></span>";
            }

            ?>
        </div>
    </div>
    <div class="menu" id="menuTop">
        <div class="logo">
            <a href="index.php"><img src="https://img1.oto.com.vn/Static/Images/v3/logo-oto.svg" alt=""></a>
            <p>Car information and transaction channel</p>
        </div>
        <div class="main-menu">
            <div class="menu-item">
                <a href="index.php">Home</a>
            </div>
            <div class="menu-item">
                <a href="show-room.php">Show Room</a>
            </div>
            <div class="menu-item">
                <p>Brands</p> 
                <div class="sub-menu">
                    <ul>
                        <?php
                        foreach ($brands as $brand) {
                            echo '<li><img src="./img/logo/'.$brand['logo'].'"><a href="show-room.php?brand=' . $brand['id'] . '">' . $brand['name'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
            <p>Range of car</p>
                <div class="sub-menu ranges">
                    <ul>
                        <?php
                        foreach ($ranges as $range) {
                            echo '<li class"range"><a href="show-room.php?range=' . $range['id'] . '">' . $range['name'] . '</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="menu-item">
                <a href="show-room.php?status=0">PreOwned Car</a>
            </div>
            <div class="menu-item">
                <a href="./about-us.php">About Us</a>
            </div>
            <div class="menu-item">
                <a href="contact-us.php">Contact Us</a>
            </div>
        </div>
    </div>
</header>