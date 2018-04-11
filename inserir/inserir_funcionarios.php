<?php
require '../conexao.php';

$firstName = $_POST['firstName'];
$insalubridade = $_POST['insalubridade'];
$periculosidade = $_POST['periculosidade'];
$dependentes = $_POST['dependentes'];
$salario= $_POST['salario'];
$cargo = $_POST['cargo'];


$sql = "insert into funcionarios (FU_NAME, FU_ISA, FU_PERI, FU_DES, FU_SALARIO, FU_CARGO) values ('$firstName', '$insalubridade', '$periculosidade', '$dependentes', '$salario', '$cargo')";

$result = mysqli_query($con, $sql);
var_dump($result);
if ($result == true) {
    header("Location: ../funcionarios.php");
} else {
    if (!mysqli_query($con, $sql)) {
            require '../Paginaerro.php';

    }
}
?>
