<?php

	session_start();

	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$full_name = filter_var(trim($_POST['full_name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$number_tel = filter_var(trim($_POST['number_tel']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	$povtpass = filter_var(trim($_POST['povtpass']), FILTER_SANITIZE_STRING);

	if(mb_strlen($login)< 5 || mb_strlen($login) >90) {
		$_SESSION['message'] = 'Недопустимая длина логина (от 5 до 90 символов)';
		header('Location: ../registr.php');
	}
	else if(mb_strlen($password)< 2 || mb_strlen($password) >20) {
		$_SESSION['message'] = 'Недопустимая длина пароля (от 2 до 20 символов)';
		header('Location: ../registr.php');
	}

if ($password === $povtpass)
{
		//

	$password = md5($password);

	//bd
	$mysql = new mysqli('localhost', 'root', '', 'test');
	$mysql->query("INSERT INTO `users` (`id`, `email`, `number_tel`, `login`, `password`, `full_name`) VALUES (NULL, '$email', '$number_tel', '$login', '$password', '$full_name')");

	$_SESSION['message'] = 'Вы зарегистрировались';
	header('Location: ../vhod.php');


	}else{
		$_SESSION['message'] = 'Пароли не совпадают';
		header('Location: ../registr.php');
	}

		
	$mysql->close();


?>