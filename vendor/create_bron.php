<?php

require_once 'coni.php';

$id = $_POST['id'];
$body = $_POST['body'];


mysqli_query($connect, "INSERT INTO `my_talons`(`id`, `talon_id`, `body`) VALUES (NULL, '$id', '$body')");

header('Location: ../talon.php?id=' .$id);
?>