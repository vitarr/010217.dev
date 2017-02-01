<?php
$users = array(
    admin => array(
        login => 'admin',
        password => 'qwerty'
    )
);
$login = filter_input(INPUT_POST, 'login');
$pass = filter_input(INPUT_POST, 'pass');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <style>
            body{
                padding-top: 20px;
            }
            h2{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php if($login == $users['admin']['login'] && $pass == $users['admin']['password']): ?>
        <h2>Вы авторизованы</h2>
        <?php else: ?>
        <h2>Неправиьный логин/пароль</h2>
        <?php endif; ?>
    </body>
</html>
