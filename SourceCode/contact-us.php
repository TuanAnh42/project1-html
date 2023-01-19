<?php
require_once('./utils/utility.php');
require_once('./db/dbhelper.php');
require_once('getdata.php');
require_once('./utils/p-title.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/contact-us-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&family=Quicksand&display=swap" rel="stylesheet">
	<title><?=PAGE_TITLE?></title>
    <link rel="stylesheet" href="./style/header-style.css">
    <link rel="stylesheet" href="./style/style.css">
</head>
<body>
    <header>
        <?php
            include('./layout/header.php');
        ?>
    </header>
    <div class="contact-us">
        <div class="title">
            <h2>CONTACT US</h2>
        </div>
        <div class="box">
            <div class="contact form">
                <h3>Send a Message</h3>
                <form>
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="Enter your first name">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Enter your last name">
                            </div>
                        </div>

                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="text" placeholder="Enter your Email">
                            </div>
                            <div class="inputBox">
                                <span>Phone Number</span>
                                <input type="text" placeholder="Enter your Phone Number">
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea placeholder="Write your message here ..."></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="contact info">
                <h3>Contact Infomation</h3>
                <div class="infoBox">
                    <div>
                        <span><ion-icon name="location"></ion-icon></span>
                        <p>54 Lê Thanh Nghị, Bách Khoa, Hà Nội</p>
                    </div>
                    <div>
                        <span><ion-icon name="mail"></ion-icon></span>
                        <a href="mailto:nguyenductho922003@gmail.com"> nguyenductho922003@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call"></ion-icon></span>
                        <a href="+84985239556">0985239556</a>
                    </div>
                    <!-- Social Media Link -->
                    <ul class="sci">
                        <li><a href="https://www.facebook.com/Thopo2003"><ion-icon name="logo-facebook"></ion-icon></a></li>
                        <li><a href="https://www.instagram.com/chip_munk.09/"><ion-icon name="logo-instagram"></ion-icon></a></li>
                        <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
                    </ul>
                </div>
            </div>
            <div class="contact map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7295561235896!2d105.84769451426945!3d21.003475286012083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ad58455db2ab%3A0x9b3550bc22fd8bb!2zNTQgUC4gTMOqIFRoYW5oIE5naOG7iywgQsOhY2ggS2hvYSwgSGFpIELDoCBUcsawbmcsIEjDoCBO4buZaSwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1656516500986!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        
            </div>
        </div>
    </div>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>