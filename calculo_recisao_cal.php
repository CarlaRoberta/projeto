<?php
require 'incs/inc_menu2.php';

error_reporting(0);
$ta = $_POST["ta"];
//$dia = $_POST["dia"];
$salario = $_GET["salario"];
$meses = $_POST["meses"];

$meses = explode('-', $meses);
list($ano, $mes, $dia) = $meses;
//echo $mes;

if ($ta == "q") {
    $sr = $salario / 30;
    $va = $salario / 12;
    $sr2 = $sr * $dia;
    $sr12 = number_format($sr2, 2);
    $total1 = $sr2;
//    echo 'Salário:' . $sr12 . '<br>';
//Cálculo do 13 Salário Proporcional
    $dt = $va * $mes;
    $dt1 = number_format($dt, 2);
    $total2 = $total1 + ($dt * 2);

//    echo '13 Salário Proporcional:' . $dt1 . '<br>';
//Tem que ver quando esse valor pode ser diferente
//    echo 'Férias Proporcionais:' . $dt1 . '<br>';
//1/3 de Férias Proporcionais
    $ferias = $dt / 3;
    $total3 = $total2 + $ferias;
    $ferias1 = number_format($ferias, 2);
//    echo '1/3 Férias Proporcionais:' . $ferias1 . '<br>';
//Salário Indenizado
//    echo 'Salário Indenizado:' . $salario . '<br>';
    $total4 = $total3 + $salario;
//13 Salário Indenizado
    $va1 = number_format($va, 2);
    $total5 = $total4 + ($va * 2);

//    echo '13 Salário Indenizado:' . $va1 . '<br>';
//Férias Indenizada
//    echo 'Férias Indenizadas:' . $va1 . '<br>';
//1/3 Férias Indenizada
    $fi = $va / 3;
    $total6 = $total5 + $fi;
    $fi1 = number_format($fi, 2);
//    echo '1/3 Férias Indenizada:' . $fi1 . '<br>';
    $total = number_format($total6, 2);

//Total
    echo '';
} else {

    if ($ta == "w") {

// $english_format_number = number_format($number, 2, '.', '');
        $sr = $salario / 30;
        $va = $salario / 12;
        $sr2 = $sr * $dia;
        $sr12 = number_format($sr2, 2);
//        echo 'Salário:' . $sr12 . '<br>';
        $total1 = $sr2;

//Cálculo do 13 Salário Proporcional
        $dt = $va * $mes;
        $dt1 = number_format($dt, 2);
//        echo '13 Salário Proporcional:' . $dt1 . '<br>';
        $total2 = $total1 + ($dt * 2);

//Tem que ver quando esse valor pode ser diferente
//        echo 'Férias Proporcionais:' . $dt1 . '<br>';

//1/3 de Férias Proporcionais
        $ferias = $dt / 3;
        $total3 = $total2 + $ferias;
        $ferias1 = number_format($ferias, 2);
//        echo '1/3 Férias Proporcionais:' . $ferias1 . '<br>';
    }
    $total = number_format($total3, 2);
}
if ($ta == "w") {
    ?>

    <body>
        <div class="col-sm-11 col-sm-offset-3 col-md-10 col-md-offset-2 main">           
            <h2 class="sub-header">Folha de pagamento <?php echo $nome ?></h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Salario - <?php echo $dia ?>/30</th>
                            <th scope="col">13 Salário Proporcional - <?php echo $mes ?>/12</th>
                            <th scope="col">Férias Proporcionais - <?php echo $mes ?>/12</th>
                            <th scope="col">1/3 de Férias Proporcionais</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php ?>
                            <th scope="row"><?php echo $sr12; ?></th>
                            <td><?php echo $dt1 ?></td>
                            <td><?php echo $dt1 ?></td>
                            <td><?php echo $ferias1 ?></td>
                            <td><?php echo $total ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    <center>
        <a class="left center" href="calculo_recisao.php"><button class="btn btn-primary btn-lg " type="button"><span class="glyphicon glyphicon-hand-left"> Voltar</span></button></a>
    </center>
    <?php
} else {
    if ($ta == "q") {
        ?>
        <body>
            <h2 class = "sub-header">Folha de pagamento <?php echo $nome
        ?></h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Salario - <?php echo $dia ?>/30</th>
                            <th scope="col">13 Salário Proporcional - <?php echo $mes ?>/12</th>
                            <th scope="col">Férias Proporcionais - <?php echo $mes ?>/12</th>
                            <th scope="col">1/3 de Férias Proporcionais</th>
                            <th scope="col">Salario Indenizado - 1/12</th>
                            <th scope="col">13 Salário Indenizado - 1/12</th>
                            <th scope="col">Férias Indenizado - 1/12</th>
                            <th scope="col">1/3 de Férias Indenizado</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php ?>
                            <th scope="row"><?php echo $sr12; ?></th>
                            <td><?php echo $dt1 ?></td>
                            <td><?php echo $dt1 ?></td>
                            <td><?php echo $ferias1 ?></td>
                            <td><?php echo $salario ?></td>
                            <td><?php echo $va1 ?></td>
                            <td><?php echo $va1 ?></td>
                            <td><?php echo $fi1 ?></td>
                            <td><?php echo $total ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <center>
            <a class="left center" href="calculo_recisao.php"><button class="btn btn-danger btn-lg " type="button"><span class="glyphicon glyphicon-hand-left"> Voltar</span></button></a>
        </center>
        <?php
    }
}
?>
<?php require 'incs/inc_rodape.php'; ?>