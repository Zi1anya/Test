<?php
    session_start();
$connect = mysqli_connect("localhost","root","","test") or die("err");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <title>главная</title>
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">Название потом придумаю</div>

            <nav class="nav">
                <a class="nav__link active" href="prosmotr_two.php">Талон</a>
                <a class="nav__link" href="carta.php">Карта</a>
                <a class="nav__link" href="talon.php">Мои талоны</a>
                <a class="nav__link" href="contact.php">Контакты</a>
                <a class="nav__link" href="ob_site.php">О сайте</a>
                <a class="nav__link" href="vendor/logout.php" class="logout">Выйти</a>
            </nav> 
        </div>
    </div>
</header>
 
<div class="headd" id="divi1">
    <img src="assets/images/v1.jpg" width="500" height="350" alt="" class="iimag"/> 
    <img src="assets/images/v2.jpeg" width="500" height="350" alt="" class="iimmag"/>
    <img src="assets/images/v3.jpg" width="500" height="350" alt="" class="iimaag"/>
</div>    
    
<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <a class="btn" href="podtverdi.php">Настройки</a>
        </div>
    </div>
    <div class="slider">
        <div class="container">
            <div class="slider__inner">
                <div class="slider__item active">
                    <span class="slider__num">01</span>
                    Запись к врачу
                </div>
                <div class="slider__item">
                    <span class="slider__num">02</span>
                    Информация
                </div>
                <div class="slider__item">
                    <span class="slider__num">03</span>
                    Контакты
                </div>
                <div class="slider__item">
                    <span class="slider__num">04</span>
                    Талоны
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
