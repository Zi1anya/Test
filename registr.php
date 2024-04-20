<?php
    session_start();
if ($_SESSION['user']) {
    header('Location: avtoriz.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>регистрация</title>
	<link rel="stylesheet" href="assets/css/registr.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <nav class="nav">
                <a class="nav__link active" href="index.php">Главная</a>
            </nav>
        </div>
    </div>
</header>

  <div id="login">
    <div class="form-signup">
      <h1>Регистрация</h1>
      <fieldset>
      <p class="login-msg"></p>
        <form action="vendor/check.php" method="post">
            <input type="fio" name="full_name" placeholder="Введите Ваше ФИО..." required />
          <input type="email" name="email" placeholder="Введите Email..." required />
            <input type="tel" name="number_tel" placeholder="Введите номер телефона... Например: 445131375" required />
            <input type="log" name="login" placeholder="Логин..." required />
          <input type="password" name="password" placeholder="Пароль..." required />
          <input type="password" name="povtpass" placeholder="Повторите пароль..." required />
          <input type="submit" value="Зарегистрироваться" />
        </form>
        <a href="vhod.php">Уже зарегистрированы? Войти.</a>
        <?php
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
      </fieldset>
    </div>
  </div>
</body>
</html>