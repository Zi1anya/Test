<?php
require_once 'coni.php';

$id = $_GET['id'];

mysqli_query($connect, "DELETE FROM `talon` WHERE `talon`.`id` = '$id'");

header('Location: ../prosmotr.php');
?>