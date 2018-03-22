<?php

require '../conexao.php';

$email = $_POST['email'];
var_dump($email);

$password = $_POST['password'];

$sql = "SELECT * FROM usuario WHERE USU_EMAIL = '$email' AND USU_PASS = '$password'";
$query = mysqli_query($con, $sql);
//
//var_dump($sql);
//var_dump($email);
//var_dump($senha);
//var_dump($con);
if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    echo "Login inválido!";
    exit;
} else {
   header("Location: ../index.php?juncao=$email");
}
?>
