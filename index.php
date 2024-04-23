<?php 
include 'config.php'; 
?>
<!DOCTYPE html>
    <html lang="ru">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width">
            <link rel="stylesheet" href="style.css">
            <title>Библиотека</title>
        </head>
        <body>
            <nav id="menu">
                <ul>
                    <li><div class="now">Главная</div></li>
                    <li><a href="person.html">Личный кабинет</a></li>
                    <li><a href="registr.html">Регистрация</a></li>
                </ul>
            </nav>
            <header>
                <h1>Электронная библиотека</h1>
            </header>
            <div class="semilayer">
                <omg src='Bulgakov_Sobache_serdcze'/>
                <?php 
                $selectBook = mysqli_query($conn, 'SELECT * FROM library_bd');
                while($bookArray = mysqli_fetch_assoc($selectBook)) {
                    include 'database.php';
                }
                ?>
        </div>
        </body>
</html>