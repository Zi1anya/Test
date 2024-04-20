<?php
require_once 'coni.php';

$date = $_POST['date'];
$fio_vrach = $_POST['fio_vrach'];
$cab = $_POST['cab'];

mysqli_query($connect, "INSERT INTO `talon` (`id`, `date`, `fio_vrach`, `cab`, `fio_polz`) VALUES (NULL, '$date', '$fio_vrach', '$cab', NULL)");
header('Location: ../prosmotr.php');
?>