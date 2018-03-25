<?php
require 'incs/inc_menu.php';
?>
<div class="container">
    <div class="py-5 text-center">
        <h1 style="color: black;"> Cálculo de Recisão </h1>
    </div>

    <form class="form-signin" action="inserir/inserir_pessoas.php" method="POST"  novalidate>
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


                <input type="radio" name="gender" value="male" style="font-size: 18px;"> Aviso prévio trabalhado<br>
                <input type="radio" name="gender" value="female" style="font-size: 18px;"> Aviso prévio indenizado<br>

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