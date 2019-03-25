<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Soma</title>
    </head>
    <body>         
        <?php
            $n1 = filter_input( INPUT_POST, "n1");
            $n2 = filter_input( INPUT_POST, "n2");
            $n3 = filter_input( INPUT_POST, "n3");
            $n4 = filter_input( INPUT_POST, "n4");
            $n5 = filter_input( INPUT_POST, "n5");
            
            print ("<h3>Maior número:</h3>");
            print (max($n1, $n2, $n3, $n4, $n5));
            print ("<br><br><h3>Número par:</h3>");
            
            if ($n1%2==0){
                print($n1."<br>");
            }
            if ($n2%2==0){
                print($n2."<br>");
            }
            if ($n3%2==0){
                print($n3."<br>");
            }
            if ($n4%2==0){
                print($n4."<br>");
            }
            if ($n5%2==0){
                print($n5."<br>");
            }         
        ?>
    </body>
</html>
