<html>
    <head>
        <title> Folha de Pagamento </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>


    <?php
    error_reporting(0);
    //descendente
    $des = $_POST["des"];
    //periculosidade
    $peri = $_POST["peri"];
    //insalubridade
    $insa = $_POST["insa"];
//    $nd = $_POST["nd"];
//    $dez = $_POST["dez"];
//    $vinte = $_POST["vinte"];
//    $quatro = $_POST["quatro"];
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
    // se ele não tiver insalubridade e pericolusidade

    if ($insa == 0 && ($peri == "Não" || $peri == "não" || $peri == "nao" || $peri == "Nao" || $peri == "N" || $peri == "n")) {
        if ($valor_salario <= $V1) {
            $calculo = $valor_salario * ($F1 / 100) * 100;
            if ($des == 0) {
                $bc_irrf = $valor_salario - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($valor_salario - $calculo) - $calculo6;
            }
        }
        $salario = $valor_salario;
    }
    // se ele for indenizado com periculosidade
    else {
        if ($insa != 0) {
            if ($insa == 10) {
                $resultadodosalario = $valor_salario + 95.40;
            } else {
                if ($insa == 20) {
                    $resultadodosalario = $valor_salario + 190.80;
                } else {
                    if ($insa == 40) {
                        $resultadodosalario = $valor_salario + 381.60;
                    }
                }
            }
            $salario = $resultadodosalario;
            if ($resultadodosalario <= $V1) {
                $calculo = $resultadodosalario * ($F1 / 100) * 100;
                if ($des == 0) {
                    $bc_irrf = $resultadodosalario - $calculo;
                }
                if ($des > 0) {
                    $calculo6 = $des * 189.59;
                    $bc_irrf = ($resultadodosalario - $calculo) - $calculo6;
                }
            }
        }
        // se ele for indenizado com periculosidade
        else {
            if ($peri == "Sim" || $peri == "sim" || $peri == "s" || $peri == "S") {
                $resultadopericulosidade = $valor_salario + ($valor_salario * 0.30);
            }
            if ($resultadopericulosidade <= $V1) {
                $calculo = $resultadopericulosidade * ($F3 / 100) * 100;
                if ($des == 0) {
                    $bc_irrf = $resultadopericulosidade - $calculo;
                }
                if ($des > 0) {
                    $calculo6 = $des * 189.59;
                    $bc_irrf = ($resultadopericulosidade - $calculo) - $calculo6;
                }
            }
            $salario = $resultadopericulosidade;
        }
    }

// SEGUNDA CONDIÇÃO
    // se ele não tiver insalubridade e pericolusidade
    if ($insa == 0 && ($peri == "Não" || $peri == "não" || $peri == "nao" || $peri == "Nao" || $peri == "N" || $peri == "n")) {
        if ($valor_salario >= $V1 and $valor_salario <= $V2) {

            $calculo = $valor_salario * ($F2 / 100) * 100;
            if ($des == 0) {
                $bc_irrf = $valor_salario - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($valor_salario - $calculo) - $calculo6;
            }
        }
        $salario = $valor_salario;
    }
    // se ele for indenizado com periculosidade
    else {
        if ($insa != 0) {
            if ($insa == 10) {
                $resultadodosalario = $valor_salario + 95.40;
            } else {
                if ($insa == 20) {
                    $resultadodosalario = $valor_salario + 190.80;
                } else {
                    if ($insa == 40) {
                        $resultadodosalario = $valor_salario + 381.60;
                    }
                }
            }
            $salario = $resultadodosalario;
            if ($resultadodosalario >= $V1 and $resultadodosalario <= $V2) {

                $calculo = $resultadodosalario * ($F2 / 100) * 100;
                if ($des == 0) {
                    $bc_irrf = $resultadodosalario - $calculo;
                }
                if ($des > 0) {
                    $calculo6 = $des * 189.59;
                    $bc_irrf = ($resultadodosalario - $calculo) - $calculo6;
                }
            }
        }
        // se ele for indenizado com periculosidade
        else {
            if ($peri == "Sim" || $peri == "sim" || $peri == "s" || $peri == "S") {
                $resultadopericulosidade = $valor_salario + ($valor_salario * 0.30);
            }
            if ($resultadopericulosidade >= $V1 and $resultadodosalario <= $V2) {
                $calculo = $resultadopericulosidade * ($F3 / 100) * 100;
                if ($des == 0) {
                    $bc_irrf = $resultadopericulosidade - $calculo;
                }
                if ($des > 0) {
                    $calculo6 = $des * 189.59;
                    $bc_irrf = ($resultadopericulosidade - $calculo) - $calculo6;
                }
            }
            $salario = $resultadopericulosidade;
        }
    }
// TERCEIRA CONDIÇÃO
    // se ele não tiver insalubridade e pericolusidade
    if ($insa == 0 && ($peri == "Não" || $peri == "não" || $peri == "nao" || $peri == "Nao" || $peri == "N" || $peri == "n")) {
        if ($valor_salario >= $V2 and $valor_salario <= $V3) {
            $calculo = $valor_salario * ($F3 / 100) * 100;
            if ($des == 0) {
                $bc_irrf = $valor_salario - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($valor_salario - $calculo) - $calculo6;
            }
        }
        $salario = $valor_salario;
    }

    // se ele foi indenizado com insalubridade
    else {
        if ($insa != 0) {
            if ($insa == 10) {
                $resultadodosalario = $valor_salario + 95.40;
            } else {
                if ($insa == 20) {
                    $resultadodosalario = $valor_salario + 190.80;
                } else {
                    if ($insa == 40) {
                        $resultadodosalario = $valor_salario + 381.60;
                    }
                }
            }
        }
        $salario = $resultadodosalario;
        if ($resultadodosalario >= $V2 and $resultadodosalario <= $V3) {
            $calculo = $resultadodosalario * ($F3 / 100) * 100;
            if ($des == 0) {
                $bc_irrf = $resultadodosalario - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($resultadodosalario - $calculo) - $calculo6;
            }
        }
        // se ele for indenizado com periculosidade
        else {
            if ($peri == "Sim" || $peri == "sim" || $peri == "s" || $peri == "S") {
                $resultadopericulosidade = $valor_salario + ($valor_salario * 0.30);
            }
            if ($resultadopericulosidade >= $V2 and $resultadodosalario <= $V3) {
                $calculo = $resultadopericulosidade * ($F3 / 100) * 100;
                if ($des == 0) {
                    $bc_irrf = $resultadopericulosidade - $calculo;
                }
                if ($des > 0) {
                    $calculo6 = $des * 189.59;
                    $bc_irrf = ($resultadopericulosidade - $calculo) - $calculo6;
                }
            }
            $salario = $resultadopericulosidade;
        }
    }
//QUARTA CONDIÇÃO
    // se ele não tiver insalubridade e pericolusidade
    if ($insa == 0 && ($peri == "Não" || $peri == "não" || $peri == "nao" || $peri == "Nao" || $peri == "N" || $peri == "n")) {
        if ($valor_salario > $V3) {
            $calculo = $VlrFixo;
            if ($des == 0) {
                $bc_irrf = $valor_salario - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($valor_salario - $calculo) - $calculo6;
            }
        }
        $salario = $valor_salario;
    }
    // se ele foi indenizado com insalubridade
    if ($insa != 0) {
        if ($insa == 10) {
            $resultadodosalario = $valor_salario + 95.40;
        } else {
            if ($insa == 20) {
                $resultadodosalario = $valor_salario + 190.80;
            } else {
                if ($insa == 40) {
                    $resultadodosalario = $valor_salario + 381.60;
                }
            }
        }
        $salario = $resultadodosalario;
        if ($resultadodosalario > $V3) {
            $calculo = $resultadodosalario * ($F3 / 100) * 100;
            if ($des == 0) {
                $bc_irrf = $resultadodosalario - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($resultadodosalario - $calculo) - $calculo6;
            }
        }
    }
    // se ele for indenizado com periculosidade
    else {
        if ($peri == "Sim" || $peri == "sim" || $peri == "s" || $peri == "S") {
            $resultadopericulosidade = $valor_salario + ($valor_salario * 0.30);
        }
        if ($resultadopericulosidade > $V3) {
            $calculo = $resultadopericulosidade * ($F3 / 100) * 100;
            if ($des == 0) {
                $bc_irrf = $resultadopericulosidade - $calculo;
            }
            if ($des > 0) {
                $calculo6 = $des * 189.59;
                $bc_irrf = ($resultadopericulosidade - $calculo) - $calculo6;
            }
        }
        $salario = $resultadopericulosidade;
    }

///////////////////// IR SEM DEDUÇÃO /////////////////////////

    /* Declara variáveis (faixa dos valores da tabela do inss */
    $N1 = 1903.98;
    $N2 = 2826.65;
    $N3 = 3751.05;
    $N4 = 4664.68;

    /* Declara as porcentagens para aplicar no calculo */
    $P1 = 0.075;
    $P2 = 0.15;
    $P3 = 0.225;
    $P4 = 0.275;

    /* Busca valor do Salário informado */
    $valor_salario = $_POST["valor_salario"];

//$calculo = 0.00;
// PRIMEIRA CONDIÇÃO
    if ($bc_irrf <= $N1) {
        $calculo2 = 0;
    }
// SEGUNDA CONDIÇÃO
    if ($bc_irrf >= $N1 and $bc_irrf <= $N2) {

        $calculo2 = $bc_irrf * ($P1 / 100) * 100;
    }
// TERCEIRA CONDIÇÃO
    if ($bc_irrf >= $N2 and $bc_irrf <= $N3) {
        $calculo2 = $bc_irrf * ($P2 / 100) * 100;
    }

    if ($bc_irrf >= $N3 and $bc_irrf <= $N4) {
        $calculo2 = $bc_irrf * ($P3 / 100) * 100;
    }

    if ($bc_irrf > $N4) {
        $calculo2 = $bc_irrf * ($P4 / 100) * 100;
    }

////////////////// IR a pagar /////////////////////////////////

    if ($bc_irrf <= $N1) {
        $calculo3 = 0;
    }
// SEGUNDA CONDIÇÃO
    if ($bc_irrf >= $N1 and $bc_irrf <= $N2) {
        $calculo3 = $calculo2 - 142.80;
    }
// TERCEIRA CONDIÇÃO
    if ($bc_irrf >= $N2 and $bc_irrf <= $N3) {
        $calculo3 = $calculo2 - 354.80;
    }

    if ($bc_irrf >= $N3 and $bc_irrf <= $N4) {
        $calculo3 = $calculo2 - 636.13;
    }

    if ($bc_irrf > $N4) {
        $calculo3 = $calculo2 - 869.36;
    }

////////////////////////////// FGTS //////////////////////////////
    $fgts = $valor_salario * 0.08;
    ?>
    <body>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Salario</th>
                    <th scope="col">INSS</th>
                    <th scope="col">BC IRRF</th>
                    <th scope="col">IR sem dedução</th>
                    <th scope="col">Ir a pagar</th>
                    <th scope="col">FGTS</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?php echo $salario; ?></th>
                    <td><?php echo $calculo ?></td>
                    <td><?php echo $bc_irrf ?></td>
                    <td><?php echo $calculo2 ?></td>
                    <td><?php echo $calculo3 ?></td>
                    <td><?php echo $fgts ?></td>
                </tr>

            </tbody>
        </table>