
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <header>
        <?php require 'incs/inc_menu.php'; ?>
    </header>
    

    <div class="escopo"> 
        <div class="panel panel-danger">
            <div class="panel-heading">Oi</div>
            <div class="panel-body">
                <p>VÁ COM CALMA, VOCÊ ESTÁ APRENDENDO.</p>
            </div>
        </div>

        <center>
            <div class="row">
                <div class="col-sm-6 col-md-4" >
                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Calculadora</h3>
                            <FORM NAME="Calc">
                                <TABLE BORDER=5 WIDTH="155" bgcolor="green">
                                    <TR>
                                        <TD ALIGN="CENTER">
                                            <INPUT TYPE="text"  NAME="Input" SIZE="16">
                                        </TD>
                                    </TR>
                                    <TR>
                                        <TD ALIGN="CENTER">
                                            <INPUT TYPE="button" NAME="one"
                                                   VALUE="  1  " onClick="Calc.Input.value += '1'">
                                            <INPUT TYPE="button" NAME="two"
                                                   VALUE="  2  " onClick="Calc.Input.value += '2'">
                                            <INPUT TYPE="button" NAME="three"
                                                   VALUE="  3  " onClick="Calc.Input.value += '3'">
                                            <BR>
                                            <INPUT TYPE="button" NAME="four"
                                                   VALUE="  4  " onClick="Calc.Input.value += '4'">
                                            <INPUT TYPE="button" NAME="five"
                                                   VALUE="  5  " onClick="Calc.Input.value += '5'">
                                            <INPUT TYPE="button" NAME="six"
                                                   VALUE="  6  " onClick="Calc.Input.value += '6'">

                                            <BR>
                                            <INPUT TYPE="button" NAME="seven"
                                                   VALUE="  7  " onClick="Calc.Input.value += '7'">
                                            <INPUT TYPE="button" NAME="eight"
                                                   VALUE="  8  " onClick="Calc.Input.value += '8'">
                                            <INPUT TYPE="button" NAME="nine"
                                                   VALUE="  9  " onClick="Calc.Input.value += '9'">
                                            <BR>
                                            <INPUT TYPE="button" NAME="clear"
                                                   VALUE="  c  " onClick="Calc.Input.value = ''">
                                            <INPUT TYPE="button" NAME="zero"
                                                   VALUE="  0  " onClick="Calc.Input.value += '0'">
                                            <INPUT TYPE="button" NAME="DoIt"
                                                   VALUE="  =  " onClick="Calc.Input.value = eval(Calc.Input.value)">
                                        </TD>                    
                                        <td ALIGN="CENTER">
                                            <INPUT TYPE="button" NAME="div"
                                                   VALUE="  /   " onClick="Calc.Input.value += ' / '">                        
                                            <INPUT TYPE="button" NAME="times"
                                                   VALUE="  x  " onClick="Calc.Input.value += ' * '">                        
                                            <INPUT TYPE="button" NAME="plus"
                                                   VALUE="  +  " onClick="Calc.Input.value += ' + '">
                                            <INPUT TYPE="button" NAME="minus"
                                                   VALUE="  -   " onClick="Calc.Input.value += ' - '">
                                        </td>
                                    </TR>
                                </TABLE>
                            </FORM>                
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4" >
                    <div class="thumbnail">
                        <div class="caption">
                            <h3>Você já se cadastrou?</h3>
                            <a href="cadastro.php"><span  style="color:brown; font-size: 1000%" class="glyphicon glyphicon-user"  ></span></a>     
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4" >
                    <div class="list-group">
                        <a href="#" class="list-group-item active">
                            Menu Lateral
                        </a>
                        <a href="verde.php" class="list-group-item list-group-item-success">Qual é a Cor que você mais gosta? VERDE</a>
                        <a href="azul.php" class="list-group-item list-group-item-info">Qual é a Cor que você mais gosta? AZUL</a>
                        <a href="amarelo.php" class="list-group-item list-group-item-warning">Qual é a Cor que você mais gosta? AMARELO</a>
                        <a href="vermelho.php" class="list-group-item list-group-item-danger">Qual é a Cor que você mais gosta? VERMELHO</a>
                    </div>
                </div>
            </div>
        </center>   
    </div>

    <?php
    require 'incs/inc_rodape.php';
    ?>
