<?php
require '../conexao.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "insert into usuario (USU_FNAME, USU_SNAME, USU_EMAIL, USU_PASS) values ('$firstName', '$lastName', '$email', '$password')";

//var_dump($sql);
//var_dump($con);

$result = mysqli_query($con, $sql);
if ($result == true) {
  
    header("Location: ../index.php");
} else {
    if (!mysqli_query($con, $sql)) {
    require '../Paginaerro.php';
    }
}
?>
