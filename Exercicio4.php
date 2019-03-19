<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>exercicio4</title>
    </head>
    <body>
        <a href="form.php?prontuario=id">
                        
        </a>
        <?php
             $pront = $_GET ["id"];
        
        if ($pront == 1) {
            
            echo "Nome = Mariana Kerne <br> Prontuário= 1235891";
            
        } elseif ($pront == 2) {
                
            echo "Nome = Jhonny Willian <br> Prontuário = 3698521";
            
            } elseif ($pront == 3) {
                
                echo "Nome = Nathalia Silva <br> Prontuário = 7412589";
                 
            } elseif ($pront == 4) { 
                
               echo "Nome = Jessica Cristiny <br> Prontuário = 9632471";
            }
           

        ?>
    </body>
</html>
