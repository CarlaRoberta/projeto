<?php

// 1 - pego os três últimos meses trabalhados, somo os slários
// 2 - pego o valor da soma e faço divido pelos três meses trabalhados
// 3 - vejo a situação dele dentro da tabela e estipulo a porcentagem
// 4 - informo em quantas parcelas serão realizadas
//LINK VIDEO: https://www.youtube.com/watch?v=JyKaNIjwS8g
//LINK SITE: http://segurodesemprego2017.com.br/seguro-desemprego-2018/

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
$ad = $_POST["ad"];
$as = $_POST["as"];
$ps = $_POST["ps"];
$us = $_POST["us"];
$mt = $_POST["mt"];




//Cálculo 1
$cal1 = $as + $ps + $us;
$cal2 = $cal1 / 3;

// PRIMEIRA CONDIÇÃO
if ($ad == 'um') {
    if ($mt >= 18 and $mt <= 23) {
        if ($cal2 <= $valor1) {
            $cal3 = $cal2 * ($p1 / 100) * 100;
            //SE MENOR QUE O SALÁRIO MINÍMO, DEVE RECEBER O SALÁRIO MINÍMO
            echo 'O número de parcelas: 4';
            echo 'O valor da parcela será' . $cal3 . '<br>';
        }

        if ($cal2 >= $valor1 and $cal2 <= $valor2) {
            $cal3 = $cal2 * ($p2 / 100) * 100;
            $cal4 = $cal3 + 1088.56;
            echo 'O número de parcelas: 4';
            echo (double) 'O valor da parcela será' . $cal4 . '<br>';
        }

        if ($cal2 > $valor3) {
            echo 'O número de parcelas: 4';
            echo 'O valor da parcela será' . $valorFixo . '<br>';
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//SEGUNDA CONDIÇÃO DA TABELA - PARA A PRIMEIRA SOLICITAÇÃO
if ($ad == 'um') {
    if ($mt >= 24) {
        if ($cal2 <= $valor1) {
            $cal3 = $cal2 * ($p1 / 100) * 100;
            //SE MENOR QUE O SALÁRIO MINÍMO, DEVE RECEBER O SALÁRIO MINÍMO
            echo 'O número de parcelas: 5';
            echo 'O valor da parcela será' . $cal3 . '<br>';
        }

        if ($cal2 >= $valor1 and $cal2 <= $valor2) {
            $cal3 = $cal2 * ($p2 / 100) * 100;
            $cal4 = $cal3 + 1088.56;
            echo 'O número de parcelas: 5';
            echo (double) 'O valor da parcela será' . $cal4 . '<br>';
        }

        if ($cal2 > $valor3) {
            echo 'O número de parcelas: 5';
            echo 'O valor da parcela será' . $valorFixo . '<br>';
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//PRIMEIRA CONDIÇÃO DA TABELA - PARA A PRIMEIRA SOLICITAÇÃO
if ($ad == 'dois') {
    if ($mt >= 18 and $mt <= 23) {
        if ($cal2 <= $valor1) {
            $cal3 = $cal2 * ($p1 / 100) * 100;
            //SE MENOR QUE O SALÁRIO MINÍMO, DEVE RECEBER O SALÁRIO MINÍMO
            echo 'O número de parcelas: 4';
            echo 'O valor da parcela será' . $cal3 . '<br>';
        }

        if ($cal2 >= $valor1 and $cal2 <= $valor2) {
            $cal3 = $cal2 * ($p2 / 100) * 100;
            $cal4 = $cal3 + 1088.56;
            echo 'O número de parcelas: 4';
            echo (double) 'O valor da parcela será' . $cal4 . '<br>';
        }

        if ($cal2 > $valor3) {
            echo 'O número de parcelas: 4';
            echo 'O valor da parcela será' . $valorFixo . '<br>';
        }
    }
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//SEGUNDA CONDIÇÃO DA TABELA - PARA A PRIMEIRA SOLICITAÇÃO
if ($ad == 'dois') {
    if ($mt <= 11) {
        if ($cal2 <= $valor1) {
            $cal3 = $cal2 * ($p1 / 100) * 100;
            //SE MENOR QUE O SALÁRIO MINÍMO, DEVE RECEBER O SALÁRIO MINÍMO
            echo 'O número de parcelas: 5';
            echo 'O valor da parcela será' . $cal3 . '<br>';
        }

        if ($cal2 >= $valor1 and $cal2 <= $valor2) {
            $cal3 = $cal2 * ($p2 / 100) * 100;
            $cal4 = $cal3 + 1088.56;
            echo 'O número de parcelas: 5';
            echo (double) 'O valor da parcela será' . $cal4 . '<br>';
        }

        if ($cal2 > $valor3) {
            echo 'O número de parcelas: 5';
            echo 'O valor da parcela será' . $valorFixo . '<br>';
        }
    }
}
?>

