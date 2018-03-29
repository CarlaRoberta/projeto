<!DOCTYPE html>
<head>
    <?php require 'incs/inc_menu2.php'; ?>
    <link href="css/dashboard.css" rel="stylesheet">
</head>

<body>
    <?php
    require 'conexao.php';
    $sql = "select * from funcionarios ";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="row">
        <a style="color: black" href="cadastrofuncionarios.php"><button class="center-block btn " style="font-size: 200%"><span  class="glyphicon glyphicon-user" > Cadastro de Funcionários</span></button></a>     
        <div class="col-sm-11 col-sm-offset-3 col-md-10 col-md-offset-2 main">           
            <h2 class="sub-header">Lista de Funcionários</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Dependentes</th>
                            <th>Insalubridade</th>
                            <th>Periculosidade</th>
                            <th>Salário</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($dados = mysqli_fetch_assoc($result)) {
                            $id_funcionarios = $dados ['FU_ID'];
                            $nome = $dados ['FU_NAME'];
                            $insalubridade = $dados ['FU_ISA'];
                            $periculosidade = $dados ['FU_PERI'];
                            $dependentes = $dados ['FU_DES'];
                            $valor_salario = $dados['FU_SALARIO'];
                            ?>
                            <tr>
                                <td><?php echo $id_funcionarios ?></td>
                                <td><?php echo $nome ?></td>
                                <td><?php echo $dependentes ?></td>
                                <td><?php echo $insalubridade ?></td>
                                <td><?php echo $periculosidade ?></td>
                                <td><?php echo $valor_salario ?></td>
                            </tr>  
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php require 'incs/inc_rodape.php'; ?>
