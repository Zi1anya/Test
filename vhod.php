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
	<title>вход</title>
	<link rel="stylesheet" href="assets/css/vhod.css" media="screen" type="text/css" />
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
        <h1>Авторизация</h1>
      <fieldset>
        <form action="vendor/signup.php" method="post">
          <input type="login" name="login" placeholder="Логин" required />
          <input type="password" name="password" placeholder="Пароль" required />
          <input type="submit" value="Войти" />
        </form>
        <p><a href="registr.php">Нет аккаунта? Регистрация.</a><br>
        </p>
          <?php
            if ($_SESSION['message']){
                echo '<p class="msg"> ' . $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);
        ?>
      </fieldset>
    </div>
    <div class="form-login">
    </div>
  </div>
</body>
</html>