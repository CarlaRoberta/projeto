<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['USU_EMAIL']) || $_SESSION['USU_EMAIL'] == FALSE) {
    return header('location: login.php');
}
require 'incs/inc_menu2.php';

?>
<head>
    <title> Folha de Pagamento </title>  
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
</head>

<div class="container">
    <?php
    require 'conexao.php';
    $id = $_GET["id"];
    $sql = "select * from funcionarios WHERE funcionarios.FU_ID = $id";
    $result = mysqli_query($con, $sql);
    $dados = mysqli_fetch_assoc($result);
    $id_funcionarios = $dados ['FU_ID'];
    $nome = $dados ['FU_NAME'];
    $valor_salario = $dados['FU_SALARIO'];
    ?>
    <div class="py-5 text-center">
        <h1 style="color: black;"> Cálculo de Recisão da <?php echo $nome; ?> </h1>
    </div>
    <form class="form" action="calculo_recisao_cal.php?salario=<?php echo $valor_salario; ?>" method="POST"  novalidate>           
        <div class="row">
            <div class="col-md-5 mb-3">
                <label style="font-size: 140%" for="salario"> Salário </label>
                <label style="font-size: 120%"  ><?php echo $valor_salario ?></label>
            </div>
            <div class="col-md-8 order-md-1">
                <div class="row">
                    <div class="col-md-3">
                        <label for="meses"> Data de demissão: </label>
                        <input type="date"  class="form-control" name="meses" id="meses" placeholder="" required>

                    </div>                           
                </div>
            </div>                                       
            <div class="col-md-10 mb-5">
                <label for="ta">Tipo de aviso:</label><br>
                <label class="radio-inline"><input type="radio" name="ta" value="w">Comprido aviso prévio</label>
                <label class="radio-inline"><input type="radio" name="ta" value="q">Aviso prévio indenizado</label>
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