<?php
session_start();
?>
<!doctype html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="img/iconec.png">
        <title>Projeto</title>
        <link href="css/css.css" rel="stylesheet" type="text/css"/>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>  
        <link href="css/carousel.css" rel="stylesheet" type="text/css"/>
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="assets/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
        <script src="assets/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="navbar-wrapper">
            <div class="container">

                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Cild.a
                                <?php
                                //$valor = isset($_SESSION['id']) ? 'S' : 'N';
                                //if ($valor == 'S') {
                                //$id_cadastro_usuario = $_SESSION['id'];
                                //echo "<a style=\"font-size: 16px; color:#A9A9A9; margin-left:200px;margin-botom:20px;\"> Bem vindo " . $_SESSION['email'];
                                //}
                                ?>
                            </a>
                        </div>
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home</a></li>
                                <li><a href="sobre.php">Sobre</a></li>
                                <li><a href="funcionarios.php">Funcionários</a></li>                                
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cálculos <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="folha_de_pagamento.php">Folha de Pagamento</a></li>
                                        <li><a href="recisao.php">Cálculo de Rescisão</a></li>
                                        <li><a href="seguro_desemprego1.php">Seguro Desemprego</a></li>
                                        <li>__________________________________</li>
                                        <li><a href="piscofins.php">Calculo do PIS e COFINS</a></li>
                                        <li><a href="calculosimples.php">Calculo Simples nacional</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Tabelas <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="tabela_inss.php">Tabelas INSS</a></li>
                                        <li><a href="tabela_irrf.php">Tabelas IRRF</a></li>
                                        <li><a href="tabela_sd.php">Tabelas Seguro Desemprego</a></li>
                                        <li><a href="tabela_simplesnacional.php">Tabelas Simples Nacionais</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>


        <!-- Carousel
        ================================================== -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#" data-slide-to="0" class="active"></li>
                <li data-target="#" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="img/slide/lap.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <a href="login.php"><button class="left btn "><span  class="glyphicon glyphicon-user" ></span></button></a>
                            <p style="color: white"><?php echo ($_SESSION['USU_EMAIL']);?> <a style="color: white" href="sair.php">Sair</a></p>
                            <h1>Saiba sobre o Projeto Cild.a</h1>
                            <p>O projeto Cild.a surgiu em 2018 do curso de Auxiliar de serviços contábeis. Os seus criadores são
                                Anna Ellen, Isabella Moretti, Luana Neves e Carla Roberta</p>
                            <p><a class="btn btn-lg btn-primary" href="sobre.php" role="button">Saiba mais</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="img/slide/banner.png" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <a href="login.php"><button class="left btn "><span  class="glyphicon glyphicon-user" ></span></button></a>
                            <p style="color: white"><?php echo ($_SESSION['USU_EMAIL']);?><a style="color: white" href="sair.php"> Sair</a></p>
                            <h1>Saiba sobre o Projeto Cild.a</h1>
                            <p>O projeto Cild.a surgiu em 2018 do curso de Auxiliar de serviços contábeis. Os seus criadores são
                                Anna Ellen, Isabella Moretti, Luana Neves e Carla Roberta</p>
                            <p><a class="btn btn-lg btn-primary" href="sobre.php" role="button">Saiba mais</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
