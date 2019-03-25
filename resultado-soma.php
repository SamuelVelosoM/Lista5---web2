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
            
            $soma=$n1+$n2;
            
            print($soma);
            
        ?>
    </body>
</html>
