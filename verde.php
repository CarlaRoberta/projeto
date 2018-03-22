<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <header>
        <?php require 'incs/inc_menu.php'; ?>
    </header>

    <div class="escopo"> 
        <div class="panel panel-success">
            <div class="panel-heading">Você Gosta de verde.</div>
            <div class="panel-body">
                <p>Aurora Boreal.</p>
            </div>
        </div>

        <center>
            <div class="row">
                <div class="col-sm-6 col-md-8" >
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img src="http://4.bp.blogspot.com/-6XKFre1v91I/TmuntXSJTMI/AAAAAAAACbg/Xi_otSFV4gY/s1600/AURORA%2BBOREAL%2B%25282%2529%2B%2B-%2B%2B10.09.11%2B%2BBLOG.jpg" alt=""/>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://cdn-static.pisa.tur.br/img/imagens/0b38dfeaab28ba46dc111288ae13f3f0.jpeg" alt=""/>
                                <div class="carousel-caption">
                                </div>
                            </div>
                            <div class="item">
                                <img src="http://4.bp.blogspot.com/-vlRoLl7hirg/TigzZRNtUDI/AAAAAAAAAao/srTlJyMqweM/s1600/aurora_boreal1.jpg" alt=""/>
                                <div class="carousel-caption">
                                </div>
                            </div>
                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4" >
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Menu Lateral
                        </a>
                        <a href="verde.php" class="list-group-item list-group-item-success">Qual é a Cor que você mais gosta? VERDE</a>
                        <a href="azul.php" class="list-group-item list-group-item-info">Qual é a Cor que você mais gosta? AZUL</a>
                        <a href="amarelo.php" class="list-group-item list-group-item-warning">Qual é a Cor que você mais gosta? AMARELO</a>
                        <a href="vermelho.php" class="list-group-item list-group-item-danger">Qual é a Cor que você mais gosta? VERMELHO</a>
                    </div>
                </div>
            </div>
        </center>   
    </div>

    <?php
    require 'incs/inc_rodape.php';
    ?>
