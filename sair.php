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
        <div class="container">
            <h1> Página Sair </h1>
            <br>
            <div style="font-size: 20pt;">

                <?php
                session_start();
                session_destroy();

                //Remove os valores que foram gravados 
                unset($_SESSION['USU_EMAIL'], $_SESSION['USU_EMAIL']);
                header("Location: index.php");
                ?>

            </div>
    </body>
</html>
