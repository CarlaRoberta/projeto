<?php require 'incs/inc_menu2.php'; ?>

<html>
    <head>
        <title> Calculo do PIS e COFINS </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>

    <?php
    error_reporting(0);
    $mv = $_POST["mv"];
    $ne = $_POST["ne"];
    $ma = $_POST["ma"];
    $re = $_POST["re"];

    if ($re == "ac") {
        $n1 = $mv * 0.0065;
        $n2 = $mv * 0.03;
        $resul1 = $n1 + $n2;
        $result = number_format($resul1, 2);
    } elseif ($re == "nc") {
        $n1 = $mv * 0.0165;
        $n2 = $mv * 0.076;

        $n3 = $ma * 0.0165;
        $n4 = $ma * 0.076;

        $m1 = $n1 - $n3;
        $m2 = $n2 - $n4;
        $resul2 = $m1 + $m2;
        $result = number_format($resul2, 2);
    }
    ?>
    <body>
        <div class="col-sm-11 col-sm-offset-3 col-md-10 col-md-offset-2 main">           
            <h2 class="sub">Calculo do PIS e COFINS  </h2>
            <div class="table-responsive">
                <table class="table tab-pane">
                    <thead>
                        <tr>
                            <th><h3>A empresa <?php echo $ne ?>, pagara <?php echo $result ?></h3></th>
                        </tr>
                </table>
            </div>
        </div>
        <?php require 'incs/inc_rodape.php'; ?>