<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['email'] == false) {
    return header('location: index.php');
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