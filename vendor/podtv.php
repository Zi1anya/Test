
<?php
	session_start();
	
$number_tel = filter_var(trim($_POST['number_tel']), FILTER_SANITIZE_STRING);


$mysql = new mysqli('localhost', 'root', '', 'test');
	$mysql->query("INSERT INTO `users` (`id`, `email`, `number_tel`, `login`, `password`, `full_name`) VALUES (NULL, '$email', '$number_tel', '$login', '$password', '$full_name')");

$result = $mysql->query("SELECT * FROM `users` WHERE `number_tel` = '$number_tel' AND `email` = '$email'");
$user = $result->fetch_assoc();
if (count($user) == 0 ){
	echo "nety";
	exit();

$_SESSION['user'] = [
	"number_tel" => $user['number_tel'],
	"email" => $user['email']
	];
}
else {
	$_SESSION['message'] = "neto";
	header('Location: ../podtverdi.php');
}



$mysql->close();

header('Location: ../prosmotr.php');

?>
