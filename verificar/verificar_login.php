<?php

require '../conexao.php';

$email = $_POST['email'];
//var_dump($email);

$password = $_POST['password'];

$sql = "insert into usuario (USU_EMAIL,USU_PASS) values ( '$email', '$password')";

$query = mysqli_query($con, $sql);
//
//var_dump($sql);
//var_dump($email);
//var_dump($senha);
//var_dump($con);
if ($password != $password) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    require '../Paginaerro.php';
    exit;
} else {
    ?>
    <html> 
    <head>
        <link rel="icon" href="img/iconec.png">

        <title> Login </title>  
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css" />
        <link href="../css/css.css" rel="stylesheet" type="text/css"/>
        <script src="../bootstrap-3.3.7-dist/js/bootstrap.min.js" type="text/javascript"></script>  
        <link href="../css/carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="../assets/js/ie10-viewport-bug-workaround.js" type="text/javascript"></script>
        <script src="../assets/js/ie-emulation-modes-warning.js" type="text/javascript"></script>
    </head>
    <!-- Carousel
        ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#" data-slide-to="0" class="active"></li>
            <li data-target="#" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="../img/slide/lap.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption">
                        <a href="login.php"><button class="left btn "><span  class="glyphicon glyphicon-user" ></span></button></a>
                        <h1>Saiba sobre o Projeto Cild.a</h1>
                        <p>O projeto Cild.a surgiu em 2018 do curso de Auxiliar de serviços contábeis. Os seus criadores são
                            Anna Ellen, Isabella Moretti, Luana Neves e Carla Roberta</p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="../img/slide/banner.png" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <a href="login.php"><button class="left btn "><span  class="glyphicon glyphicon-user" ></span></button></a>
                        <h1>Saiba sobre o Projeto Cild.a</h1>
                        <p>O projeto Cild.a surgiu em 2018 do curso de Auxiliar de serviços contábeis. Os seus criadores são
                            Anna Ellen, Isabella Moretti, Luana Neves e Carla Roberta</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <center>
        <h1 style=" color: teal">Olá Seja Bem Vindo, gostaria de ir a tela inicial?<a href="../index.php">Sim</a></h1>            
    </center>
    <?php require '../incs/inc_rodape.php';
} ?>
