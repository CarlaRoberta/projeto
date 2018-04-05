<body>
    <?php
    require 'conexao.php';
    $sql = "select * from funcionarios";
    $result = mysqli_query($con, $sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="center col-sm-4">
                <div class="table-responsive">
                    <center>   
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
                                                <p><a href="folha_de_pagamento.cal.php?id= <?php echo $id_funcionarios; ?>" class=" btn btn-sm btn-primary">Folha de Pagamento</a></p>
                                            </div></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                            </tbody>
                        </table>  
                    </center>
                </div>                
            </div>
        </div>
    </div>