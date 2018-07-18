<?php require 'controllers/WelcomeController.php'; 
/*
|Сделать функцию которая бы обрезала встроенную функцию __FILE__
|до названия функции. Например
|        C:\xampp\htdocs\TestToGit\controllers\WelcomeController.php
|        до
|                        WelcomeController.php
*/

?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo 'Hello, my brother'.'<br>';
        echo 'Hello, my friend!!!';
        echo '<br>';
        $wc = new WelcomeController();
        echo $wc->index();
        ?>
    </body>
</html>
