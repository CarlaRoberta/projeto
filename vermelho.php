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
        <div class="panel panel-danger">
            <div class="panel-heading">Você Gosta de Vermelho</div>
            <div class="panel-body">
                <p>AAA é uma Galeria.</p>
            </div>
        </div>
        <center>
            <div class="row">
                <div id="zoom" class="col-sm-6 col-md-4" >
                    <img style="max-width: 50%; max-height: 50%" src="img/galeria/1.jpg" alt=""/>
                </div>
                <div id="zoom"class="col-sm-6 col-md-4" >
                    <img style="max-width: 50%; max-height: 50%" src="img/galeria/2.jpg" alt=""/>
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
