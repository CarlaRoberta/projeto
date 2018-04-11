<?php require 'incs/inc_menu2.php'; ?>

<html>
    <head>
        <title> Calculo Simples </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>

    <?php
    error_reporting(0);
    $rb = $_POST["rb"];
//    var_dump($rb);
    $ne = $_POST["ne"];
//    var_dump($ne);
    $fm = $_POST["fm"];
//    var_dump($fm);
    $em = $_POST["em"];
//    var_dump($em);

    $V1 = 180000;
    $V2 = 360000;
    $V3 = 720000;
    $V4 = 1800000;
    $V5 = 3600000;
    $V6 = 4800000;

    if ($em == "c") {
        /* Declara as porcentagens para aplicar no calculo */
        $F1 = 0.04;
        $F2 = 0.073;
        $F3 = 0.095;
        $F4 = 0.107;
        $F5 = 0.143;
        $F6 = 0.19;

        if ($rb <= $V1) {

            $n1 = $rb * $F1;
            $n2 = $n1 / $rb;
            $resultsimplesapagar = $fm * $n2;
            $resul = number_format($resultsimplesapagar, 2);
//            var_dump($resultsimplesapagar);
        } else {
            if ($rb >= $V1 and $rb <= $V2) {
                $n1 = $rb * $F2;
                $n2 = $n1 - 5940;
                $n3 = $n2 / $rb;
//                var_dump($n3);
                $resultsimplesapagar = $fm * $n3;
//                var_dump($fm);
//                var_dump($resultsimplesapagar);
                $resul = number_format($resultsimplesapagar, 2);
//                var_dump($resul);
//                var_dump($resultsimplesapagar);
            } else {
                if ($rb >= $V2 and $rb <= $V3) {
                    $n1 = $rb * $F3;
                    $n2 = $n1 - 13860;
                    $n3 = $n2 / $rb;
                    $resultsimplesapagar = $fm * $n3;
                    $resul = number_format($resultsimplesapagar, 2);
//                    var_dump($resultsimplesapagar);
                } else {
                    if ($rb >= $V3 and $rb <= $V4) {
                        $n1 = $rb * $F4;
                        $n2 = $n1 - 22500;
                        $n3 = $n2 / $rb;
                        $resultsimplesapagar = $fm * $n3;
                        $resul = number_format($resultsimplesapagar, 2);
//                        var_dump($resultsimplesapagar);
                    } else {
                        if ($rb >= $V4 and $rb <= $V5) {
                            $n1 = $rb * $F5;
                            $n2 = $n1 - 87300;
                            $n3 = $n2 / $rb;
                            $resultsimplesapagar = $fm * $n3;
                            $resul = number_format($resultsimplesapagar, 2);
//                            var_dump($resultsimplesapagar);
                        } else {
                            if ($rb >= $V5 and $rb <= $V6) {
                                $n1 = $rb * $F6;
//                                var_dump($n1);
                                $n2 = $n1 - 378000;
                                $n3 = $n2 / $rb;
//                                var_dump($n2);
                                $resultsimplesapagar = $fm * $n3;
                                $resul = number_format($resultsimplesapagar, 2);
//                                var_dump($resultsimplesapagar);
                            }
                        }
                    }
                }
            }
        }
    }
    if ($em == "i") {
        /* Declara as porcentagens para aplicar no calculo */
        $F1 = 0.045;
        $F2 = 0.079;
        $F3 = 0.10;
        $F4 = 0.112;
        $F5 = 0.147;
        $F6 = 0.30;

        if ($rb <= $V1) {

            $n1 = $rb * $F1;
            $n2 = $n1 / $rb;
            $resultsimplesapagar = $fm * $n2;
            $resul = number_format($resultsimplesapagar, 2);
//            var_dump($resultsimplesapagar);
        } else {
            if ($rb >= $V1 and $rb <= $V2) {
                $n1 = $rb * $F2;
                $n2 = $n1 - 5940;
                $n3 = $n2 / $rb;
//                var_dump($n3);
                $resultsimplesapagar = $fm * $n3;
//                var_dump($fm);
//                var_dump($resultsimplesapagar);
                $resul = number_format($resultsimplesapagar, 2);
//                var_dump($resul);
//                var_dump($resultsimplesapagar);
            } else {
                if ($rb >= $V2 and $rb <= $V3) {
                    $n1 = $rb * $F3;
                    $n2 = $n1 - 13860;
                    $n3 = $n2 / $rb;
                    $resultsimplesapagar = $fm * $n3;
                    $resul = number_format($resultsimplesapagar, 2);
//                    var_dump($resultsimplesapagar);
                } else {
                    if ($rb >= $V3 and $rb <= $V4) {
                        $n1 = $rb * $F4;
                        $n2 = $n1 - 22500;
                        $n3 = $n2 / $rb;
                        $resultsimplesapagar = $fm * $n3;
                        $resul = number_format($resultsimplesapagar, 2);
//                        var_dump($resultsimplesapagar);
                    } else {
                        if ($rb >= $V4 and $rb <= $V5) {
                            $n1 = $rb * $F5;
                            $n2 = $n1 - 85000;
                            $n3 = $n2 / $rb;
                            $resultsimplesapagar = $fm * $n3;
                            $resul = number_format($resultsimplesapagar, 2);
//                            var_dump($resultsimplesapagar);
                        } else {
                            if ($rb >= $V5 and $rb <= $V6) {
                                $n1 = $rb * $F6;
//                                var_dump($n1);
                                $n2 = $n1 - 720000;
                                $n3 = $n2 / $rb;
//                                var_dump($n2);
                                $resultsimplesapagar = $fm * $n3;
                                $resul = number_format($resultsimplesapagar, 2);
//                                var_dump($resultsimplesapagar);
                            }
                        }
                    }
                }
            }
        }
    }
    ?>
    <body>
        <div class="col-sm-11 col-sm-offset-3 col-md-10 col-md-offset-2 main">           
            <h2 class="sub">Calculo Simples </h2>
            <div class="table-responsive">
                <table class="table tab-pane">
                    <thead>
                        <tr>
                            <th><h3>A empresa <?php echo $ne ?>, pagara <?php echo $resul ?></h3></th>
                        </tr>
                </table>
            </div>
        </div>
        <?php require 'incs/inc_rodape.php'; ?>