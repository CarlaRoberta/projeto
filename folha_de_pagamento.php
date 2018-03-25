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

                    <div class="col-sm-7" style="margin-top: 10px;">

                        <input type="checkbox" id="insa" name="insa[]" value="2" onclick="document.getElementById('hsf').disabled = !this.checked;" >   

                        <label for="insa" style="font-size: 18px;"> Insalubridade? </label> 

                        <input type="number" name="tinsa[]" id="tinsa" class="form-control"style="height: 45px; width: 300px; margin-left: 30px;" disabled="disabled" placeholder="Informe o percentual de insalubridade">

                    </div>

                    <div class="col-sm-7" style="margin-top: 10px;">

                        <input type="checkbox" id="des" name="des[]" value="3" onclick="document.getElementById('hsf').disabled = !this.checked;" >   

                        <label for="des" style="font-size: 18px;"> Descendentes? </label> 

                        <input type="number" name="tdes[]" id="tdes" class="form-control"style="height: 45px; width: 300px; margin-left: 30px;" disabled="disabled" placeholder="Informe o número de descendentes">

                    </div>

                    <div class="col-sm-7" style="margin-top: 10px;">

                        <input type="checkbox" id="per" name="per[]" value="4" onclick="document.getElementById('hsf').disabled = !this.checked;" >   

                        <label for="per" style="font-size: 18px;"> Periculosidade? </label> 
                    </div>
                </div>

        </div>

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

