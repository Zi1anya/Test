<?php
    session_start();
$connect = mysqli_connect("localhost","root","","test") or die("err");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script|Montserrat:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <title>контакты</title>
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">Контакты</div>
            <nav class="nav">
                <a class="nav__link active" href="avtoriz.php">Главная</a>
                <a class="nav__link" href="prosmotr_two.php">Талон</a>
                <a class="nav__link" href="carta.php">Карта</a>
                <a class="nav__link" href="talon.php">Мои талоны</a>
                <a class="nav__link" href="vendor/logout.php" class="logout">Выйти</a>
            </nav> 
        </div>
    </div>
</header>

<div class="intro">
    <div class="container">
        <a style="font-size: 20px;"> Адрес: г.Борисов, ул. Строителей</a>
        <br><br>
        <a style="font-size: 20px;">Телефоны:</a>
        <br><br>
        <a style="font-size: 18px;" href="tel:+375445131375">88005553535</a><a style="font-size: 18px;"> ------> Для справок (регистратура)</a> <br>
        <a style="font-size: 18px;" href="tel:+375445131375">+375447658706</a><a style="font-size: 18px;"> ------> Глав.врач</a> <br>
        <a style="font-size: 18px;" href="tel:+375445131375">+375445131375</a><a style="font-size: 18px;"> ------> Для справок о сайте</a>
        <br><br>
        <a style="font-size: 18px;" href="email: shurka.2004ru@gmail.com"> Почта: shurka.2004ru@gmail.com</a>
    </div>
    <div class="headd" id="divi1">
    <img style="margin-left: 600px; top: 300px;" src="assets/images/cabi2.jpg"  width="600" height="350" alt="" class="iimag"/>
</div>     
    <div class="slider">
        <div class="container">
            <div class="slider__inner">
                <div class="slider__item active">
                    <span class="slider__num">01</span>
                    Инфо
                </div>
                <div class="slider__item">
                    <span class="slider__num">02</span>
                    Инфо
                </div>
                <div class="slider__item">
                    <span class="slider__num">03</span>
                    Инфо
                </div>
                <div class="slider__item">
                    <span class="slider__num">04</span>
                    Инфо
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
