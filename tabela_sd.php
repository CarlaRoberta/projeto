<?php
require 'incs/inc_menu2.php';
?>
<head>
    <title> Tabelas INSS </title>  
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
</head>

<div class="container"> 
    <div class="py-5 text-center">
        <h1 style="color: black;"> Tabelas Seguro Desemprego </h1>
    </div>

    <div class="container">
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela Seguro Desemprego - 2018 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor da Parcela</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até R$ 1.360,70</th>
                    <td>Multiplica-se o salário médio por 0,8 (80%)</td>
                </tr>
                <tr>
                    <th scope="row">De R$ 1.360,71 a R$ 2.268,05</th>
                    <td> Multiplica-se por 0,5 (50%) e soma-se a R$ 1.088,56 </td>
                </tr>
                <tr>
                    <th scope="row">Superior a R$ 2.268,05</th>
                    <td>O valor da parcela será R$ 1.542,24 invariavelmente</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container"> 
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela Seguro Desemprego - 2017 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Valor da Parcela</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até R$ 1.450,23</th>
                    <td>Multiplica-se o salário médio por 0,8 (80%)</td>
                </tr>
                <tr>
                    <th scope="row">De R$ 1.450,24 a R$ 2.417,29</th>
                    <td> Multiplica-se por 0,5 (50%) e soma-se a R$ 1.160,18 </td>
                </tr>
                <tr>
                    <th scope="row">Superior a R$ 2.417,29</th>
                    <td>O valor da parcela será R$ 1.643,72 invariavelmente</td>
                </tr>
            </tbody>
        </table>
    </div>

    <?php
    require 'incs/inc_rodape.php';
    ?>