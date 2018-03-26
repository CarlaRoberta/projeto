<?php
//error_reporting(0);
//session_start();
//if (!isset($_SESSION['email_cliente']) || $_SESSION['email_cliente'] == false) {
//    return header('location: indexB.php');
//}
//require 'incs/inc_menu.php';
?>
<html>
    <head>
        <title> Folha de Pagamento </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>
    <body>

        <div class="col-sm-11 text-center">
            <h1 style="font-size: 32px;color:black;"> Cálculo da Folha de Pagamento </h1>
        </div>

        <div class="col-sm-8">
            <!-- <form action="perfil-coletabd.php" method="POST" class="form-horizontal" > -->

            <form action="folha_de_pagamento_cal.php" method="POST">

                <div class="form-group" style="margin-left: 30px;">
                    <div class="col-sm-12">
                        <label for="valor_salario" style="font-size: 18px;">
                            Indique o valor do seu salário:
                        </label>
                        <div class="text-center">
                            <input type="number" name="valor_salario" id="valor_salario" required class="form-control"style="height: 45px;">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="des" style="font-size: 18px;">
                                Informe o número de descendentes:
                            </label>
                            <div class="text-center">
                                <input type="number" name="des" id="des" required class="form-control"style="height: 45px;">
                            </div>
                        </div>

                        <div class="form-group">
                        <div class="col-sm-12">
                            <label for="insa" style="font-size: 18px;">
                                Informe o valor do adcional de insalubridade:
                            </label>
                            <div class="text-center">
                                <input type="number" name="insa" id="insa" required class="form-control"style="height: 45px;" placeholder="Não o símbolo: %. Exemplo caso 10%, coloque apenas 10.">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                <label for="peri" style="font-size: 18px;">
                                    Possui adcional de Periculosidade?
                                </label>
                                <div class="text-center">
                                <input type="text" name="peri" id="peri" required class="form-control"style="height: 45px;" placeholder="Só responda Sim ou Não">
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                    <div class="col-sm-11">
                        <div class="form-group">
                            <div class="text-center">
                                <input type="submit" value="Enviar" 
                                       id="botao_submit" class="btn btn-primary" style="color: black; height: 45px;">
                                <input type="reset" value="Limpar" 
                                       id="botao_limpar" class="btn btn-primary" style="color: black; height: 45px;">
                            </div>
                        </div>
                    </div>

            </form>



    </body>
</html>

