<?php

error_reporting(0);
$ta = $_POST["ta"];
//$dia = $_POST["dia"];
$salario = $_POST["salario"];
$meses = $_POST["meses"];

$meses = explode('-', $meses);
list($ano, $mes, $dia) = $meses;
echo $mes;

if ($ta == "q") {
    // $english_format_number = number_format($number, 2, '.', '');
    $sr = $salario / 30;
    $va = $salario / 12;
    $sr2 = $sr * $dia;
    $sr12 = number_format($sr2, 2);
    echo 'Salário:' . $sr12 . '<br>';

    //Cálculo do 13 Salário Proporcional
    $dt = $va * $mes;
    $dt1 = number_format($dt, 2);
    echo '13 Salário Proporcional:' . $dt1 . '<br>';

    //Tem que ver quando esse valor pode ser diferente
    echo 'Férias Proporcionais:' . $dt1 . '<br>';

    //1/3 de Férias Proporcionais
    $ferias = $dt / 3;

    $ferias1 = number_format($ferias, 2);
    echo '1/3 Férias Proporcionais:' . $ferias1 . '<br>';

    //Salário Indenizado
    echo 'Salário Indenizado:' . $salario . '<br>';

    //13 Salário Indenizado
    $va1 = number_format($va, 2);
    echo '13 Salário Indenizado:' . $va1 . '<br>';

    //Férias Indenizada
    echo 'Férias Indenizadas:' . $va1 . '<br>';

    //1/3 Férias Indenizada
    $fi = $va / 3;
    $fi1 = number_format($fi, 2);
    echo '1/3 Férias Indenizada:' . $fi1 . '<br>';

    //Total
    echo '';
} else {

    if ($ta == "w") {

        // $english_format_number = number_format($number, 2, '.', '');
        $sr = $salario / 30;
        $va = $salario / 12;
        $sr2 = $sr * $dia;
        $sr12 = number_format($sr2, 2);
        echo 'Salário:' . $sr12 . '<br>';

        //Cálculo do 13 Salário Proporcional
        $dt = $va * $mes;
        $dt1 = number_format($dt, 2);
        echo '13 Salário Proporcional:' . $dt1 . '<br>';

        //Tem que ver quando esse valor pode ser diferente
        echo 'Férias Proporcionais:' . $dt1 . '<br>';

        //1/3 de Férias Proporcionais
        $ferias = $dt / 3;

        $ferias1 = number_format($ferias, 2);
        echo '1/3 Férias Proporcionais:' . $ferias1 . '<br>';
    }
}