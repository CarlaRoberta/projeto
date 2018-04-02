<?php
require 'incs/inc_menu2.php';
?>
<head>
    <title> Folha de Pagamento </title>  
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
</head>

<div class="container">
    <?php
    require 'conexao.php';

    //$id = $_GET["id"];
    //$sql = "select * from funcionarios WHERE funcionarios.FU_ID = $id";
    //$result = mysqli_query($con, $sql);
    //$dados = mysqli_fetch_assoc($result);
    //$id_funcionarios = $dados ['FU_ID'];
    //$nome = $dados ['FU_NAME'];
    //$valor_salario = $dados['FU_SALARIO'];
    ?>
    <div class="py-5 text-center">
        <h1 style="color: black;"> Cálculo de Seguro Desemprego <?php //echo $nome;             ?> </h1>
    </div>

<!-- <form class="form" action="calculo_recisao_cal.php?salario=<?php //echo $valor_salario;             ?>" method="POST"  novalidate> -->  

    <form class="form" action="seguro_desemprego_cal" method="POST"  novalidate>

        <div class="row">
            <div class="col-md-5 mb-3">

                <!-- <label style="font-size: 140%" for="salario"> Salário </label>
                 <label style="font-size: 120%"  ><?php //echo $valor_salario            ?></label> -->

            </div>

            <div class="col-md-8 order-md-1">
                <div class="form-group">
                    <label for="ad">
                        Já recebeu seguro desemprego anteriormente?
                    </label>
                    <select id="ad" name="ad" required class="form-control">
                        <option value="um"> Não, está será minha primeira solicitação </option>
                        <option value="dois"> Sim, já recebi uma vez </option>
                        <option value="tres"> Sim, já recebi duas ou mais vezes </option>
                    </select>
                </div>
            </div>

            <div class="col-sm-8 order-md-1">
                <div class="form-group">
                    <label for="as">
                        Antepenúltimo salário
                    </label>
                    <input type="text" name="as" id="as" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="ps">
                        Penúltimo salário
                    </label>
                    <input type="text" name="ps" id="ps" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="us">
                        Último salário
                    </label>
                    <input type="text" name="us" id="us" required class="form-control">
                </div>

                <div class="form-group">
                    <label for="mt">
                        Meses trabalhados nos últimos 36 meses
                    </label>
                    <input type="number" name="mt" id="mt" required class="form-control">
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
            </div>
    </form>
</div>

<?php
require 'incs/inc_rodape.php';
?>