<?php
//require 'incs/inc_menu.php';
?>
<html>
    <head>
        <title> Folha de Pagamento </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>

    <div class="container">
        <div class="py-5 text-center">
            <h1 style="color: black;"> Cálculo de Recisão </h1>
        </div>

        <form class="form-signin" action="calculo_recisao_cal.php" method="POST"  novalidate>
            <!--
            <div class="row">
                <div class="col-md-8 order-md-1">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label style="color: black; font-size: 18px;" for="valor_salario">Qual foi a data da contratação?</label>
                            <input type="date" class="form-control" name="firstName" id="firstName" placeholder="" required style="height: 45px;">
                        </div>

                        <div class="col-md-6 mb-3">
                            <label style="color: black; font-size: 18px;" for="valor_salario">Qual foi a data da demição?</label>
                            <input type="date" class="form-control" name="firstName" id="firstName" placeholder="" required style="height: 45px;">
                        </div>

                    </div> 
            -->

            <div class="row">
                <div class="col-md-8 order-md-1">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="meses"> Data de demissão: </label>
                            <input type="date"  class="form-control" name="meses" id="meses" placeholder="" required>

                        </div>                           
                    </div>

                   
                                <div class="row">
                                    <div class="col-md-8 order-md-1">
                                        <div class="row">
                                            <div class="col-md-12 mb-3">
                                                <label for="salario"> Salário </label>
                                                <input type="number"  class="form-control" name="salario" id="salario" placeholder="" required>

                                            </div>                           
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label for="ta">Tipo de aviso:</label><br>
                                                <label class="radio-inline"><input type="radio" name="ta" value="w">Comprido aviso prévio<br></label>
                                                <label class="radio-inline"><input type="radio" name="ta" value="q">Aviso prévio indenizado<br></label>
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