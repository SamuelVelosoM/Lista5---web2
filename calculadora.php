<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title>
    </head>
    <body>
        <form method="POST">
            <input type="number" name="n1">
            <select name="x">
                <option name="calculo" value="*">*</option>;
                <option name="calculo">+</option>;
                <option name="calculo">-</option>;
                <option name="calculo">/</option>;
                
            </select>
            <input type="number" name="n2">
            <input type="submit">                   
        </form>
        <?php
            $cont=0;
            $n1= filter_input(INPUT_POST, "n1");
            $n2= filter_input(INPUT_POST, "n2");
            $calculo= filter_input(INPUT_POST, "x");
            if ($calculo== '*'){
            $soma= $n1*$n2;
            $cont++;
            }
            if ($calculo== "+"){
            $soma= $n1+$n2;
            $cont++;
            }
            if ($calculo== "-"){
            $soma= $n1-$n2;
            $cont++;
            }
            if ($calculo== "/"){
            $soma= $n1/$n2;
            $cont++;
            }
            if ($cont>0){
            print ($soma);
            }
        ?>
    </body>
</html>

