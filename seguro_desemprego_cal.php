<?php
// 1 - pego os três últimos meses trabalhados, somo os slários
// 2 - pego o valor da soma e faço divido pelos três meses trabalhados
// 3 - vejo a situação dele dentro da tabela e estipulo a porcentagem
// 4 - informo em quantas parcelas serão realizadas

/* Declara variáveis (faixa dos valores da tabela do seguro desemprego */
// VERIFICAR NA TABELA 2018

$valor1 = 1360.70;
$valor2 = 2268.05;
$valor3 = 2268.05;

/* Declara as porcentagens para aplicar no calculo */
$p1 = 0.08;
$p2 = 0.05;

/* Declara o valor fixo */
$valorFixo = 1542.24;

/* Pega valores */
$Salario = $_POST["Salario"];
$as = $_POST["as"];
$ps = $_POST["ps"];
$us = $_POST["us"];

//Cálculo 1
$cal1 = $as + $ps + $us;
$cal2 = $cal1 / 3; 

// PRIMEIRA CONDIÇÃO
if ($cal2 <= $valor1) {
    $cal3 = $cal2 * ($p1 / 100) * 100;
    //SE MENOR QUE O SALÁRIO MINÍMO, DEVE RECEBER O SALÁRIO MINÍMO
    echo 'O valor da parcela será' . $cal3 . '<br>';
}
// SEGUNDA CONDIÇÃO
if ($cal2 >= $valor1 and $cal2 <= $valor2) {
    $cal3 = $cal2 * ($p2 / 100) * 100;
    echo (double) 'O valor da parcela será' . $cal3 . '<br>';
}

//TERCEIRA CONDIÇÃO
if ($cal2 > $valor3) {
    echo 'O valor da parcela será' . $valorFixo . '<br>';
}
?>

