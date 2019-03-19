<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio3</title>
    </head>
    <body>
        <?php
        $num1 = $_GET ["num1"];
        $num2 = $_GET ["num2"];
        $num3 = $_GET ["num3"];
        $num4 = $_GET ["num4"];
        $operacao = $_GET ["operacao"] ; 
       
            if($operacao == "soma"){
               $calculadora = $num1 + $num2 + $num3 + $num4; 
               echo "O resultado dessa operação é: " .$calculadora ;
            } elseif ($operacao == "subtracao"){
                $calculadora = $num1 - $num2 - $num3 - $num4;
                echo "O resultado dessa operação é: " .$calculadora ;
            } elseif ($operacao == "divisao"){
                $calculadora = $num1 / $num2 / $num3 / $num4;
                echo "O resultado dessa operação é: " .$calculadora ;
            }elseif ($operacao == "multiplicacao"){
                $calculadora = $num1 * $num2 * $num3 * $num4;
                echo "O resultado dessa operação é: " .$calculadora ;
            }
        ?>
    </body>
</html>
