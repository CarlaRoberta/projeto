<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['USU_EMAIL']) || $_SESSION['USU_EMAIL'] == FALSE) {
    return header('location: login.php');
}
?>
<?php
require 'incs/inc_menu2.php';
?>
<head>
    <title> Calculo do PIS e COFINS </title>  
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
        <h1> Tributo do PIS e COFINS </h1>
    </div>
    <form class="form" action="piscofins_cal.php" method="POST">

        <div class="col-sm-8 order-md-1">
            <div class="form-group">
                <label for="ne">
                    Nome da Empresa
                </label>
                <input type="text" name="ne" id="ne" required class="form-control">
            </div>
            <div class="form-group">
                <label for="ma">
                    Valor da Mercadoria Adquirida
                </label>
                <input type="number" name="ma" id="ma" required class="form-control">
            </div>
            <div class="form-group">
                <label for="mv">
                    Valor da Mercadoria Vendida
                </label>
                <input type="number" name="mv" id="mv" required class="form-control">
            </div>
            <div class="">
                <div class="form-group">
                    <label for="re">
                        Regime:
                    </label>
                    <select id="re" name="re" required class="form-control">
                        <option value="ac">Acumulativo</option>
                        <option value="nc">Não Acumulativo</option>
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