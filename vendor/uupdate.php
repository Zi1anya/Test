<?php
require_once 'coni.php';
$id = $_POST['id'];
$date = $_POST['date'];
$fio_vrach = $_POST['fio_vrach'];
$cab = $_POST['cab'];

mysqli_query($connect, "UPDATE `talon` SET `date` = '$date', `fio_vrach` = '$fio_vrach', `cab` = '$cab' WHERE `talon`.`id` = '$id'");

header('Location: ../prosmotr.php');
?>
