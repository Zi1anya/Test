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
    <title>главная</title>
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">О сайте</div>
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
    <div align="right" class="container">
        <a style="font-size: 18px;"> Данный сайт создан с целью возможности записи к врачу</a><br>
        <a style="font-size: 18px;"> не стоя в очереди регистратуры медицинского учреждения.</a>
        <br><br>
        <a style="font-size: 18px;" >Разработала:</a><a style="font-size: 18px;"> <br>
        <a style="font-size: 18px;" > Руденко Александра Дмитриевна</a><br>
        <a style="font-size: 18px;">Учащаяся группы 2120</a> <br>
        <a style="font-size: 18px;">УО "Новопольский ГАЭК"</a>
        <a style="font-size: 18px;"></a>
        <br><br>
        <a style="font-size: 18px;" href="email: shurka.2004ru@gmail.com"> Почта: shurka.2004ru@gmail.com</a>
    </div>
<div class="headd" id="divi1">
    <img style="margin-left: 100px; top: 100px;" src="assets/images/ava.jpg"  width="400" height="350" alt="" class="iimag"/>
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
                    Инфо
                </div>
                <div class="slider__item">
                    <span class="slider__num">03</span>
                    Врачи
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
