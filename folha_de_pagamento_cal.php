<?php

//$valor_salario = $_POST["valor_salario"];
//if ($valor_salario <= 1693.72) {
//    $res1 = $valor_salario * 0.08;
//}
//if ($valor_salario >= 1693.73 && $valor_salario = 2822.90) {
//    $res1 = $valor_salario * 0.09;
//}
//if ($valor_salario >= 2822.91 && $valor_salario = 5645.80) {
//    $res1 = $valor_salario * 0.11;
//}
//echo 'valor do INSS:' .$res1;
//////////////////////////////////////////////////////////////////////////////////////////////
// CÓDIGO FONTE DO CALCULO DO INSS VERSÃO 0.1
/* Declara variáveis (faixa dos valores da tabela do inss */
$V1 = 1693.72;
$V2 = 2822.90;
$V3 = 5645.80;

/* Declara as porcentagens para aplicar no calculo */
$F1 = 0.08;
$F2 = 0.09;
$F3 = 0.11;

/* Declara o valor fixo */
$VlrFixo = 621.03;

/* Busca valor do Salário informado */
$valor_salario = $_POST["valor_salario"];

//$calculo = 0.00;
// PRIMEIRA CONDIÇÃO
if ($valor_salario <= $V1) {
    $calculo = $valor_salario * ($F1 / 100) * 100;
    echo 'Valor do INSS';
    echo (double) "$calculo";
}
// SEGUNDA CONDIÇÃO
if ($valor_salario >= $V1 and $valor_salario <= $V2) {

    $calculo = $valor_salario * ($F2 / 100) * 100;
    echo 'Valor do INSS';
    echo (double) "$calculo";
}
// TERCEIRA CONDIÇÃO
if ($valor_salario >= $V2 and $valor_salario <= $V3) {
    $calculo = $valor_salario * ($F3 / 100) * 100;
    echo 'Valor do INSS';
    echo (double) "$calculo  ";
}
//QUARTA CONDIÇÃO
if ($valor_salario > $V3) {
    echo 'Valor do INSS';
    echo (double) "$VlrFixo";
}

///////////////////  BC IRRF ////////////////////////////////
if ($valor_salario <= $V1 || $valor_salario == $V3) {
    $bc_irrf = $valor_salario - $calculo;

    echo   '<br>' . 'BC IRRF:' .  '<br>' .$bc_irrf ;
    
} else {
    $bc_irrf = $valor_salario - $VlrFixo;

    echo   '<br>' . 'BC IRRF:' .  '<br>' .$bc_irrf;
}

///////////////////// IR SEM DEDUÇÃO /////////////////////////

/* Declara variáveis (faixa dos valores da tabela do inss */
$N1 = 1903.98;
$N2 = 2826.65;
$N3 = 3751.05;
$N4 = 3751.05;

/* Declara as porcentagens para aplicar no calculo */
$P1 = 7.5;
$P2 = 0.15;
$P3 = 22.5;
$P4 = 27.5;

/* Busca valor do Salário informado */
$valor_salario = $_POST["valor_salario"];

//$calculo = 0.00;
// PRIMEIRA CONDIÇÃO
if ($bc_irrf <= $N1) {
    $calculo2 = 0;
    echo 'IR sem dedução';
    echo (double) "$calculo2";
}
// SEGUNDA CONDIÇÃO
if ($bc_irrf >= $N1 and $bc_irrf <= $N2) {

    $calculo2 = $bc_irrf * ($P1 / 100) * 100;
    echo 'IR sem dedução';
    echo (double) "$calculo2";
}
// TERCEIRA CONDIÇÃO
if ($bc_irrf >= $N2 and $bc_irrf <= $N3) {
    $calculo2 = $bc_irrf * ($P2 / 100) * 100;
    echo 'IR sem dedução';
    echo (double) "$calculo2";
}

if ($bc_irrf >= $N3 and $bc_irrf <= $N4) {
    $calculo2 = $bc_irrf * ($P3 / 100) * 100;
    echo 'IR sem dedução';
    echo (double) "$calculo2";
}

if ($bc_irrf > $N4) {
   $calculo2 = $bc_irrf * ($P4 / 100) * 100;
    echo 'IR sem dedução';
    echo (double) "$calculo2";
}

////////////////// IR a pagar /////////////////////////////////

if ($bc_irrf <= $N1) {
    $calculo3 = 0;
    echo 'IR a pagar';
    echo (double) "$calculo3";
}
// SEGUNDA CONDIÇÃO
if ($bc_irrf >= $N1 and $bc_irrf <= $N2) {
    $calculo3 = $calculo2 - 142.80;
    echo 'IR a pagar';
    echo (double) "$calculo3";
}
// TERCEIRA CONDIÇÃO
if ($bc_irrf >= $N2 and $bc_irrf <= $N3) {
    $calculo3 = $calculo2 - 354.80;
    echo 'IR a pagar';
    echo (double) "$calculo3";
}

if ($bc_irrf >= $N3 and $bc_irrf <= $N4) {
    $calculo3 = $calculo2 - 636.13;
    echo 'IR a pagar';
    echo (double) "$calculo3";
}

if ($bc_irrf > $N4) {
   $calculo3 = $calculo2 - 869.36;
    echo 'IR a pagar';
    echo (double) "$calculo3";
}
 
/////////////////////////////// Calculo Insalubridade ///////////////////////////



////////////////////////////// Adcional de Periculosidade ///////////////////////



?>
