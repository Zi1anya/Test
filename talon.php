<?php
require_once 'vendor/coni.php';
$talon_id = $_GET['id'];
$talon = mysqli_query($connect, "SELECT * FROM `talon` WHERE `id` = '$talon_id'");
$talon = mysqli_fetch_assoc($talon);

$my_talons = mysqli_query($connect, "SELECT * FROM `my_talons` WHERE `talon_id` = '$talon_id'");
$my_talons = mysqli_fetch_all($my_talons);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<link rel="stylesheet" href="assets/css/prosmotr.css" media="screen" type="text/css" />
	<title>Талон</title>
</head>
<body>
    <style>
        body{
            color: black;
            font-size: 15px;
        }</style>
     <header class="header">
    <div class="container">
        <div class="header__inner">

            <nav class="nav">
                <a class="nav__link active" href="avtoriz.php">Главная</a>
                <a class="nav__link" href="prosmotr_two.php">Талон</a>
                <a class="nav__link" href="vendor/logout.php" class="logout">Выйти</a>
            </nav> 
        </div>
    </div>
</header><br>
	<h2>
	Дата и время: <?= $talon['date']?></h2>
	<h4>ФИО врача: <?= $talon['fio_vrach']?></h4>
	<h4>Кабинет: <?= $talon['cab']?></h4>
	<td><a href="prosmotr_two.php">Назад</a></td>
    <br>
     <form action="vendor/create_bron.php" method="post">
        <input type="hidden" name="id" value="<?=$talon['id']?>">
    <textarea name="body"></textarea>
         <br>
        <button type="submit">ОК</button>
    </form>
    <h3>Место для записи</h3>
    <ul>
        <?php
    foreach($my_talons as $my_talon){
        ?><li><?= $my_talon[2] ?></li>
        <?php 
    }
        ?>
    </ul>
</body>
</html>