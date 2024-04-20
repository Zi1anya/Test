<?php
    session_start();
if ($_SESSION['user']) {
    header('Location: prosmotr.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>podtverdite</title>
	<link rel="stylesheet" href="assets/css/vhod.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <nav class="nav">
                <a class="nav__link active" href="avtoriz.php">Главная</a>
            </nav>
        </div>
    </div>
</header>

  <div id="login">
    <div class="form-signup">
        <h1>Вы админ?</h1>
      <fieldset>
        <form action="vendor/podtv.php" method="post">
          <input type="email" name="email" placeholder="Если Вы админ" required />
          <input type="tel" name="number_tel" placeholder="То знаете что тут должно быть" required />
          <input type="submit" value="Войти" />
        </form>
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