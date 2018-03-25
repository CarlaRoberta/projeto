<?php

if ($valor_salario <= 1693.72) {
    $res1 = $valor_salario * 0.8;
}

if ($valor_salario >= 1693.73 || $valor_salario = 2822.90) {
    $res1 = $valor_salario * 0.9;
}

if ($valor_salario >= 2822.91 || $valor_salario = 5645.80) {
    $res1 = $valor_salario * 0.11;
}

echo 'valor'.$res;