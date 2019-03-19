<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
       <?php
       
        $v1 = $_GET ["v1"];
        $v2 = $_GET ["v2"];
        $v3 = $_GET ["v3"];
        $v4 = $_GET ["v4"];
        $v5 = $_GET ["v5"];
        
        $vetorC= array();
        $vetorC [0]= $v1 ;
        $vetorC [1]= $v2 ;
        $vetorC [2]= $v3 ;
        $vetorC [3]= $v4 ;
        $vetorC [4]= $v5 ;
        
        $maior = 0;
       
       
        for($i= 0; $i < count ($vetorC); $i++){
         
            //maior elemento 
          if ($vetorC[$i] > $maior) {
              $maior = $vetorC[$i];
          }
            
        }
        
       echo "O maior número é: " . $maior ."<br>"; 
       
                 //pares 
       
       for ($i=0; $i< count ($vetorC); $i++) {
           
           if ($vetorC [$i] % 2 ==0) {
              
         echo " Os números pares são :" . $vetorC[$i] ."<br>";
           }
       }
           
           for ($i=0; $i< count ($vetorC); $i++) {
           
           if ($vetorC [$i] % 3 ==0 && $vetorC [$i] % 5 ==0) {
              
         echo " Os números multiplos de 3 e 5 são :" . $vetorC[$i] ."<br>";
           }
           
           
           
       }
      
       ?>
        
    </body>
</html>

