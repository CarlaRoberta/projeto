
<!DOCTYPE html>
<html>
    <header>
        <link rel="icon" href="img/iconec.png">
        <?php require 'incs/inc_menu2.php'; ?>
    </header>

    <div class="escopo"> 
        <center>
            <div class="row">
                <div class="col-lg-4">
                    <img class="img-circle" src="img/folha.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Folha de Pagamento</h2>
                    <p>Folha de pagamento é uma lista mensal, 
                        semanal ou diária da remuneração paga aos trabalhadores de uma instituição,
                        também conhecido como holerite. </p>
                    <p><a class="btn btn-default" href="folha_de_pagamento.php" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="img/recisao.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Calculo de Rescisão</h2>
                    <p>Calculo da anulação ou cancelamento do vínculo empregatício por algum motivo específico.</p>
                    <p><a class="btn btn-default" href="recisao.php" role="button">Ver detalhes &raquo;</a></p>
                </div>
                <div class="col-lg-4">
                    <img class="img-circle" src="img/seguro.jpg" alt="Generic placeholder image" width="140" height="140">
                    <h2>Seguro Desemprego</h2>
                    <p>É um benefício temporário concedido ao trabalhador desempregado, dispensado sem
                        justa causa ou em decorrência de rescisão indireta.</p>
                    <p><a class="btn btn-default" href="desemprego.php" role="button">Ver detalhes &raquo;</a></p>
                </div>               
            </div>
        </center>   
    </div>
    <?php
    require 'incs/inc_rodape.php';
    ?>
