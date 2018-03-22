<?php
require 'conexao.php';

////$juncao = 'oi';
//$juncao = $_GET["juncao"];
//var_dump($juncao);
//$sql = "SELECT USU_FNAME FROM usuario WHERE USU_EMAIL = $juncao";
//$result = mysqli_query($con, $sql);
//$dados = mysqli_fetch_assoc($result);
//$fname = $dados ['USU_FNAME'];
//var_dump($fname);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <link href="css/bood.css" rel="stylesheet" type="text/css"/>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <ul class="nav">
            <nav class="navbar  navbar-transparent navbar-fixed-top navbar-burger" role="navigation">  
                <div  class="container-fluid">
                    <div class="navbar-header">
                        <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                 data-target="#nav" aria-expanded="false" aria-controls="navbar">
                            <span style="color:white; font-size: 150%" class="glyphicon glyphicon-th" aria-hidden="true"></span>
                        </button>
                    </div>
                    <div id="nav"  class="navbar-collapse collapse" >
                        <div  style="background-color: black"class=" navbar-default" aria-expanded="true">
                            <ul class="nav navbar-nav "> 
                                <li> <a href="index.php" style="color: white; font-size: 150%">Home</a> </li>
                                <!--                                <li> <a href="#"style="color: white; font-size: 150%" ></a>aaa </li>
                                                                <li> <a href="#"style="color: white;font-size: 150%"></a> aaa</li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav> 
        </ul>
        <header>
            <div class="jumbotron" style="background-image:url(img/índice.jpg)">
                <center>
                    <h1>Hello, world!</h1>
                    <p style="color: #fff">Eu não sei o que escrever aqui então vai ficar assim mesmo, eu não sei o que escrever aqui então vai ficar assim mesmo, eu não sei o que escrever aqui então vai ficar assim mesmo.</p>
                    <p><a class="btn btn-primary btn-lg" href="login.php" role="button"><span style="  color: white;font-size:150%;" class="glyphicon glyphicon-user"> <?php //echo $juncao; ?></span></a></p>
                </center>
            </div>
        </header>
