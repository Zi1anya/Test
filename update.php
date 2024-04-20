<?php
require_once 'vendor/coni.php';
$talon_id = $_GET['id'];
$talon = mysqli_query($connect, "SELECT * FROM `talon` WHERE `id` = '$talon_id'");
$talon = mysqli_fetch_assoc($talon);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Обновление таблицы</title>
</head>
<body>
 <h3>Обновление таблицы</h3>
    <form action="vendor/uupdate.php" method="post">
      <input type="hidden" name="id" value="<?= $talon['id'] ?>">
       <p>Дата и время</p>
       <input type="datetime-local" name="date" value="<?= $talon['date'] ?>">
       <p>Врач</p>
       <input type="text" name="fio_vrach" value="<?= $talon['fio_vrach'] ?>">
       <p>Кабинет</p>
       <input type="text" name="cab" value="<?= $talon['cab'] ?>">
       <br><br>
       <button type="submit">Обновить</button>
</body>
</html>