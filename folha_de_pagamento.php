<?php require 'incs/inc_menu2.php'; ?>
<html>
    <head>
        <title> Folha de Pagamento </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>
    <body>
        <?php
        require 'conexao.php';
        $sql = "select * from funcionarios";
        $result = mysqli_query($con, $sql);
        ?>
    <center>
        <div class="row">
            <div class="col-sm-3">
                
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Funcionários</th>
                                    <th></th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($dados = mysqli_fetch_assoc($result)) {
                                    $nome = $dados ['FU_NAME'];
                                    $id_funcionarios = $dados ['FU_ID'];
                                    ?>
                                    <tr>                                
                                        <td><?php echo $nome; ?></td>
                                        <td><div method="POST" action="enviar.php">
                                                <p><a href="folha_de_pagamento_cal.php?id= <?php echo $id_funcionarios; ?>" class=" btn btn-sm btn-primary">Folha de Pagamento</a></p>
                                            </div></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table> 
                    </div>                
            </div>
        </div>
    </center>
        <?php require 'incs/inc_rodape.php'; ?>