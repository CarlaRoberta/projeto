<?php
require '../conexao.php';

$firstName = $_POST['firstName'];
$insalubridade = $_POST['insalubridade'];
$periculosidade = $_POST['periculosidade'];
$dependentes = $_POST['dependentes'];
$salario= $_POST['salario'];


$sql = "insert into funcionarios (FU_NAME, FU_ISA, FU_PERI, FU_DES, FU_SALARIO) values ('$firstName', '$insalubridade', '$periculosidade', '$dependentes', '$salario')";

var_dump($sql);
var_dump($con);

$result = mysqli_query($con, $sql);
var_dump($result);
if ($result == true) {
    header("Location: ../funcionarios.php");
} else {
    if (!mysqli_query($con, $sql)) {
        $erro = mysqli_error($con);
        echo "Ocorreu o seguinte erro: ", '"', $erro, '"';
    }
}
?>
