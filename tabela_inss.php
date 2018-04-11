<?php
error_reporting(0);
session_start();
if (isset($_SESSION['USU_EMAIL']) || $_SESSION['USU_EMAIL'] == TRUE) {
    return header('location: login.php');
}
?>
<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] == false) {
    return header('location: index.php');
}
require 'incs/inc_menu2.php';
?>
<head>
    <title> Tabelas INSS </title>  
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
</head>

<div class="container">
    <div class="py-5 text-center">
        <h1 style="color: black;"> Tabelas INSS </h1>
    </div>

    <div class="container"> 
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela INSS - 2018 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Percentual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até R$ 1.693,72</th>
                    <td>8%</td>
                </tr>
                <tr>
                    <th scope="row">De R$ 1.693,73 A R$ 2.822,90</th>
                    <td>9%</td>
                </tr>
                <tr>
                    <th scope="row">De R$ 2.822,91 Até R$ 5.645,80</th>
                    <td colspan="2">11%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela INSS - 2017 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Percentual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até 1.659,38</th>
                    <td>8%</td>
                </tr>
                <tr>
                    <th scope="row">De 1.659,39 Até 2.765,66</th>
                    <td>9%</td>
                </tr>
                <tr>
                    <th scope="row">De 2.765,67 Até 5.531,31</th>
                    <td colspan="2">11%</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container">
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela INSS - 2016 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Percentual</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até 1.556,94</th>
                    <td>8%</td>
                </tr>
                <tr>
                    <th scope="row">De 1.556,95 Até 2.594,92</th>
                    <td>9%</td>
                </tr>
                <tr>
                    <th scope="row">De 2.594,93 Até 5.189,82</th>
                    <td colspan="2">11%</td>
                </tr>
            </tbody>
        </table>
    </div>
    <?php
    require 'incs/inc_rodape.php';
    ?>