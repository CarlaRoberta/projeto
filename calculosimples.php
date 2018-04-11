<?php
require 'incs/inc_menu2.php';
?>
<head>
    <title> Calculo Simples </title>  
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
</head>

<div class="container">
    <?php
//    require 'conexao.php';
//
//    $id = $_GET["id"];
//    $sql = "select * from funcionarios WHERE funcionarios.FU_ID = $id";
//    $result = mysqli_query($con, $sql);
//    $dados = mysqli_fetch_assoc($result);
//    $id_funcionarios = $dados ['FU_ID'];
//    $nome = $dados ['FU_NAME'];
//    $valor_salario = $dados['FU_SALARIO'];
//    
    ?>
    <div class="py-5 text-center">
        <h1> Calculo Simples </h1>
    </div>
    <form class="form" action="calculosimples_cal.php" method="POST">

        <div class="col-sm-8 order-md-1">
            <div class="form-group">
                <label for="ne">
                    Nome da Empresa
                </label>
                <input type="text" name="ne" id="ne" required class="form-control">
            </div>
            <div class="form-group">
                <label for="rb">
                    Receita Bruta acumulada nos últimos 12 meses
                </label>
                <input type="number" name="rb" id="rb" required class="form-control">
            </div>
            <div class="form-group">
                <label for="fm">
                    Faturamento do mês
                </label>
                <input type="number" name="fm" id="fm" required class="form-control">
            </div>
            <div class="">
                <div class="form-group">
                    <label for="em">
                        Empresa:
                    </label>
                    <select id="em" name="em" required class="form-control">
                        <option value="c"> Comercial</option>
                        <option value="i"> Industrial</option>
                    </select>
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
        </div>
    </form>
</div>
<?php
require 'incs/inc_rodape.php';
?>