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
        <h1 style="color: black;"> Tabelas IRRF </h1>
    </div>

    <div class="container">
        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela IRRF - 2015 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Base de cálculo mensal em R$</th>
                    <th scope="col">Alíquota %</th>
                    <th scope="col">Parcela a deduzir do imposto em R$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até 1.903,98</th>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">De 1.903,99 até 2.826,65</th>
                    <td>7,5%</td>
                    <td>142,80</td>
                </tr>
                <tr>
                    <th scope="row">De 2.826,66 até 3.751,05</th>
                    <td>15%</td>
                    <td>354,80</td>
                </tr>
                <tr>
                    <th scope="row">De 3.751,06 até 4.664,68</th>
                    <td>22,5%</td>
                    <td>636,13</td>
                </tr>
                <tr>
                    <th scope="row">Acima de 4.664,68</th>
                    <td colspan="">27,5%</td>
                    <td colspan="">869,36</td>
                </tr>
                <tr>
                    <td colspan="4">Dedução por dependente na determinação da base de cálculo do IRRF - 189,59</td>
                </tr>
            </tbody>
        </table>

        <div class="py-5 text-center">
            <b> <h3 style="color: black;"> Tabela IRRF - 2014 </h3> </b>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Base de cálculo mensal em R$</th>
                    <th scope="col">Alíquota %</th>
                    <th scope="col">Parcela a deduzir do imposto em R$</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Até 1.787,77</th>
                    <td>-</td>
                    <td>-</td>
                </tr>
                <tr>
                    <th scope="row">De 1.787,78 Até 2.679,29</th>
                    <td>7,5%</td>
                    <td>134,08</td>
                </tr>
                <tr>
                    <th scope="row">De 2.679,30 Até 3.572,43</th>
                    <td>15%</td>
                    <td>335,03</td>
                </tr>
                <tr>
                    <th scope="row">De 3.572,44 Até 4.463,81</th>
                    <td>22,5%</td>
                    <td>602,96</td>
                </tr>
                <tr>
                    <th scope="row">Acima De 4.463,81</th>
                    <td colspan="">27,5%</td>
                    <td colspan="">826,15</td>
                </tr>
                <tr>
                    <td colspan="3">Dedução por dependente na determinação da base de cálculo do IRRF - 179,71</td>
                </tr>
            </tbody>
        </table>

        <?php
        require 'incs/inc_rodape.php';
        ?>