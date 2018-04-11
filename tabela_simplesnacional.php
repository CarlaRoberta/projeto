<?php
error_reporting(0);
session_start();
if (!isset($_SESSION['USU_EMAIL']) || $_SESSION['USU_EMAIL'] == FALSE) {
    return header('location: login.php');
}
require 'incs/inc_menu2.php';
?>
<head>
    <title> Tabelas INSS </title>  
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
</head>

<div class="container">
    <div class="py-5 text-center">
        <h1 style="color: black;"> Tabelas Simples Nacional 2018</h1>
    </div>

    <div class="container">
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Empresas de Comercios </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Recita Bruta total em 12 meses</th>
                    <th scope="col">Alíquota %</th>
                    <th scope="col">Parcela a deduzir em R$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até 180.000,00</th>
                    <td>4%</td>
                    <td>R$ 0</td>
                </tr>
                <tr>
                    <th scope="row">De 180.000,01 até 360.000,00</th>
                    <td>7,3%</td>
                    <td>R$ 5.940,00</td>
                </tr>
                <tr>
                    <th scope="row">De 360.000,01 até 720.000,00</th>
                    <td>9,5%</td>
                    <td>R$ 13.860,00</td>
                </tr>
                <tr>
                    <th scope="row">De 720.000,01 até 1.800.000,00</th>
                    <td>10,7%</td>
                    <td>R$ 22.500,00</td>
                </tr>
                <tr>
                    <th scope="row">De 1.800.000,01 até 3.600.000,00</th>
                    <td>14,3%</td>
                    <td>R$ 87.300,00</td>
                </tr>
                <tr>
                    <th scope="row">De 3.600.000,01 até 4.800.000,00</th>
                    <td colspan="">19%</td>
                    <td colspan="">R$ 378.000,00</td>
                </tr>
                
            </tbody>
        </table>

        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Fábricas/Indústrias e Empresas</h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Recita Bruta total em 12 meses</th>
                    <th scope="col">Alíquota %</th>
                    <th scope="col">Parcela a deduzir em R$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até 180.000,00</th>
                    <td>4,5%</td>
                    <td>R$ 0</td>
                </tr>
                <tr>
                    <th scope="row">De 180.000,01 até 360.000,00</th>
                    <td>7,9%</td>
                    <td>R$ 5.940,00</td>
                </tr>
                <tr>
                    <th scope="row">De 360.000,01 até 720.000,00</th>
                    <td>10%</td>
                    <td>R$ 13.860,00</td>
                </tr>
                <tr>
                    <th scope="row">De 720.000,01 até 1.800.000,00</th>
                    <td>11,2%</td>
                    <td>R$ 22.500,00</td>
                </tr>
                <tr>
                    <th scope="row">De 1.800.000,01 até 3.600.000,00</th>
                    <td>14,7%</td>
                    <td>R$ 85.000,00</td>
                </tr>
                <tr>
                    <th scope="row">De 3.600.000,01 até 4.800.000,00</th>
                    <td colspan="">30%</td>
                    <td colspan="">R$ 720.000,00</td>
                </tr>
            </tbody>
        </table>
    </div>
                <?php
                require 'incs/inc_rodape.php';
                ?>