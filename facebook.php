<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style type="text/css"> 
            a:link { 
                text-decoration:none; 
            }
            
            input::-webkit-input-placeholder{
                font-weight: bold;
                font-size: 17px;
                font-family: arial;
            }
        </style>
        <title>Questão3</title>
    </head>
    <body style="background-color: whitesmoke;">
        <div class="row" style="width: 80%; margin-left: 13.5%">
            <div class="column" style="width: 580px; margin-top: 4%; height: 500px; /*background-color: red;*/ float: left;">            
                <div style="width: 537px; height: 195px; margin-top: -2%">
                    <div style="width: 450px; height: 70px; line-height: 1.5;"><h3 style="font-family: arial; font-size: 19px; font-weight: bold;">O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3></div>
                    
                    <img class="img" src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/GwFs3_KxNjS.png" alt="" width="537" height="195" style="margin-top: 2%">
                </div>
            </div>
        
            <div class="column" style="width: 430px; margin-top: 1.25%; height: 500px; /*background-color: cyan;*/ float: left; position: absolute; display: inline">            
                <div style="width: 537px; height: 195px; margin-top: -2%">
                    <h1 style="font-family: arial; font-weight: bold;" >Abra uma conta</h1>
                    <p style="margin-top: -2%; font-family: arial; font-size: 19px;">É gratuito e sempre será.</p>
                    
                    <form action="" method="POST" id="form">
                        <input type="text" name="nome" placeholder="  Nome" style="border-radius: 6px;border:solid 1.2px gray; width: 192px; height: 40px; margin-left: 1px; ">
                        <input type="text" name="sobrenome" placeholder="  Sobrenome" style="border-radius: 6px;border:solid 1.2px gray; width: 192px; height: 40px; margin-left: 4px; ">
                        <input type="text" name="email_celular" aria-required="true" placeholder="  Celular ou email" style="border-radius: 6px;border:solid 1.2px gray; width: 393px; height: 40px; margin-left: 1px;margin-top: 2%; ">
                        <br>
                        <input type="password" name="senha" placeholder="  Nova senha" style="border-radius: 6px;border:solid 1.2px gray; width: 393px; height: 40px; margin-left: 1px;margin-top: 2%; ">
                       
                        <p style="font-family: arial; font-size: 17.4px; font-weight: bold;">Data de nascimento</p>
                        <div style="float: left; position: absolute; width: 200px; margin-top: -3.3%;margin-left: 1.6%; /*background-color: window*/">
                            <select form="form" style="margin-left: -6px; border:solid 1px gray; border-right: solid 2px gray; width:52px; height: 30px; ">
                                <option>Dia</option>
                                    <?php
                                        $cont=1;
                                        while ($cont < 32){
                                            print ('<option name="dia" value="'.$cont.'">'.$cont.'</option>');
                                            $cont++;
                                        }
                                    ?>          
                            </select>
                
                            <select form="form" style="margin-left: -6px; border:solid 1px gray; border-right: solid 2px gray; width:60px; height: 30px;">
                                <option>Mês</option>
                                    <?php
                                        $cont2=1;
                                        while ($cont2 < 13){
                                        print ('<option name="mes" value="'.$cont2.'">'.$cont2.'</option>');
                                        $cont2++;
                                        }
                                    ?>          
                            </select>                        
                        
                            <select form="form" style="margin-left: -6px; border:solid 1px gray; height: 30px;">
                                <option>Ano</option>
                                    <?php
                                        $cont3=2019;
                                        while ($cont3 > 1904){
                                            print ('<option name="ano" "value="'.$cont3.'">'.$cont3.'</option>');
                                            $cont3--;
                                        }
                                    ?>          
                            </select>
                        </div>
                        <div style="width: 175px; /*background-color: purple;*/ float: left; position:absolute; line-height: 13px; margin-left: 185px; margin-top: -13px;"><a href="#" style="font-size: 9px; color: blueviolet;">Por que preciso informar minha data de nascimento?</a></div>
                        <br><br>
                        <div style="width: 430px; margin-top: -13px; margin-left: 10px; /*background-color: gold*/">
                            <div><input type="radio" name="sex" value="1" style="margin-right: 5px; "><div style="margin-top:-20px; margin-left: 18px"><font style="vertical-align: inherit;"><b style="font-size: 15px;">Feminino</b></font></div></div>
                            <div style="float: left; width: 5px; position: absolute; margin-left: 115px; margin-top: -24px;"><input type="radio" name="sex" value="2" style="margin-right: 5px; "><div style="margin-top:-20px; margin-left: 18px"><font style="vertical-align: inherit;"><b style="font-size: 15px;">Masculino</b></font></div></div>
                        </div>
                        <div style="width: 330px; /*background-color: purple;*/ float: left; position:absolute; line-height: 13px; margin-top: 7px;">
                            <p style="font-size: 9px; color: gray">Ao clicar em Inscreva-se, você concorda com nossos <a href="#" style="color: blueviolet ">Termos , Política de Dados e Política de Cookies</a> Você pode receber notificações por SMS e pode cancelar isso quando quiser.</p>
                        </div> 
                        <div class="button">
                            <button type="submit" name="submit" style="border-radius: 6px 6px; border-color: darkgreen; width: 190px;height: 42px;margin-top: 78px; background-color: limegreen"><b style="color: white; font-family: arial; font-size: 17.5px; font-style: italic">Inscreva-se</b></button>
                        </div>
                    </form>
                </div>
                
            </div>
        
        </div>
    </body>
</html>
