<?php
error_reporting(0);
session_start();
if (isset($_SESSION['USU_EMAIL']) || $_SESSION['USU_EMAIL'] == TRUE) {
    return header('location: login.php');
}
require 'incs/inc_menu2.php';

?>
<html>
    <head>
        <title> Seguro Desemprego </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
    </head>
    <?php require 'tabelinha/tabeladesemprego.php'; ?>
    <?php require 'incs/inc_rodape.php'; ?>