<?php

require_once ('vendor/coni.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>редач талона</title>
	<link rel="stylesheet" href="assets/css/prosmotr.css" media="screen" type="text/css" />
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
    <style>
    th, td {
        padding: 10px;
        }
        th {
            background: #fff;
            color: black;
        }
        td {
            background: #fff;    
            color: black;
        }
    </style>
<body>
    <header class="header">
    <div class="container">
        <div class="header__inner">
            <nav class="nav">
                <a class="nav__link active" href="avtoriz.php">Главная</a>
                <a class="nav__link" href="talon.php">Мои талоны</a>
            </nav>
        </div>
    </div>
</header>
    <table>
        <tr>
            <th>№</th>
            <th>Дата и время</th>
            <th>ФИО врача</th>
            <th>Кабинет</th>
        </tr>
         <?php
        $talon = mysqli_query($connect,"SELECT * FROM `talon`");
        $talon = mysqli_fetch_all($talon);
        foreach ($talon as $talon) {
            ?>
            <tr>
            <td><?= $talon[0] ?></td>
            <td><?= $talon[1] ?></td>
            <td><?= $talon[2] ?></td>
            <td><?= $talon[3] ?></td>
                <td><a href="talon.php?id=<?= $talon[0] ?>">Просмотр</a></td>     
        </tr>
            <?php
        }
        ?>
    </table>
    </form>   
    <div class="headd" id="divi1">
    <img style="margin-left: 800px; top: 250px;" src="assets/images/cabi2.jpg"  width="600" height="350" alt="" class="iimag"/>
</div>   
    <form method="post">
        <input type="text" name="search" class="search">
        <input type="submit" name="submit" value="поиск">
        </form>
        <?php
            if (isset($_POST['submit'])){
                $talon = explode(" ",$_POST['talon']) ;
                $count = count($talon);
                $array = array();
                $i = 0;
                foreach($talon as $key){
                    $i++;
                    if($i <$count) $array[] = "CONCAT (`fio_vrach`,`cab`) LIKE '%".$key. "%' OR "; else $array[] = "CONCAT (`fio_vrach`,`cab`) LIKE '%".$key."%'";
                }
                $sql = "SELECT * FROM `talon` WHERE " .implode("",$array);
                echo $sql;
                $query = mysqli_query($connect,$sql);
                while($row = mysqli_fetch_assoc($query)) echo "<h1>". $row['fio_vrach']."</h2><p>".$row['cab']."</p><br>";
        }
        ?>
</body>
</html>