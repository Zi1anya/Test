
<?php
	session_start();
	
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);

$password = md5($password);

$mysql = new mysqli('localhost', 'root', '', 'test');
	$mysql->query("INSERT INTO `users` (`id`, `email`, `number_tel`, `login`, `password`, `full_name`) VALUES (NULL, '$email', '$number_tel', '$login', '$password', '$full_name')");

$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
$user = $result->fetch_assoc();
if (count($user) == 0 ){
	echo "Пользователь не найден. Вернитесь назад и повторите попытку.";
	exit();

$_SESSION['user'] = [
	"id" => $user['id'],
	"full_name" => $user['full_name']
	];
}
else {
	$_SESSION['message'] = "неверный логин или пароль";
	header('Location: /vhod.php');
}



$mysql->close();

header('Location: /avtoriz.php');

?>
