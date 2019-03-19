<!DOCTYPE html>


<html>
    <head>
        <meta charset="UTF-8">
     
        <title>Filmes</title>
    </head>
    <body>
        
        
        
        <?php

        
            
            $filme = $_GET ["id"];
            
            if ($filme == "1") {
                echo "Vingadores ou Os Vingadores (Avengers no original em inglês) são um grupo de super-heróis "
                ."de história em quadrinhos publicados nos Estados Unidos pela editora Marvel Comics. O grupo também "
                . "aparece em adaptações da Marvel para cinema, desenho animado e videogames. " ;
   
          } elseif ($filme == "2") {
              
              echo "Carol Danvers (Brie Larson) é uma ex-agente da Força Aérea norte-americana, que, sem se lembrar de sua vida na Terra, "
              . "é recrutada pelos Kree para fazer parte de seu exército de elite. Inimiga declarada dos Skrull, ela acaba voltando ao seu "
              . "planeta de origem para impedir"
              . " uma invasão dos metaformos, e assim vai acabar descobrindo a verdade sobre si, com a ajuda do agente Nick Fury (Samuel L."
              . " Jackson) e da gata Goose." ;
              
            } elseif ($filme == "3") {
                echo "Bella é uma cadelinha especial que vive com Lucas, um estudante de medicina veterinária"
                . " que trabalha como voluntário em um hospital local. Um dia ela é encontrada pelo Controle de Animais na rua e"
                . " acaba sendo levada para um abrigo a 400 milhas de distância de seu dono. No entanto, Bella, "
                . "uma cachorra extremamente leal e corajosa, decide iniciar sozinha uma longa jornada de volta para a casa,"
                . " emocionando a todos que cruzam o seu caminho."  ;
                
            } elseif ($filme == "4") {
                
             echo "Cintia Dorella (Maisa Silva) é uma adolescente que descobre uma traição no casamento dos pais. "
                . "Descrente no amor, ela vai morar na casa da tia e passa a trabalhar como DJ, se tornando a Cinderela Pop."
                . " Mas ela não esperava que um príncipe encantado pudesse fazê-la se apaixonar.Classificação indicativa"
                . " a definir por http://www.culturadigital.br/classind." ;
           
             
            } elseif ($filme == "5") {
                
                echo "Preocupada com o repentino comportamento estranho e violento de seu filho Miles (Jackson Robert Scott),"
                . " Sarah (Taylor Schilling) inicia uma investigação por conta própria para entender "
                . "o que está acontecendo. Mas o que ela descobre é que alguma espécie de força sobrenatural está agindo sobre ele,"
                . " influenciando, cada vez mais, suas ações." ;
               
            }  elseif ($filme == "6") {
                
                echo "A jovem otimista e sonhadora June encontra escondido na floresta um parque de diversões chamado Wonderland,"
                ." que é cheio de passeios e animais que falam. O único problema é que o parque está confuso e desorganizado. "
                ."  June logo descobre que o parque veio de sua imaginação e que ela é a única que pode deixar o lugar mágico de novo." ;
               
            }   elseif ($filme == "7") {
                
                echo "Nels (Liam Neeson), um tranquilo homem de família, trabalha como motorista de um removedor de neve e vê seu mundo"
                . "virado de cabeça para baixo quando seu filho é morto por um poderoso traficante de drogas. "
                ." Impulsionado pelo desejo de vingança e sem nada para perder, ele fará tudo o que por preciso para destruir o cartel." ;
                
            }  elseif ($filme == "8") {
                
                echo " Depois de morrer diversas vezes para quebrar o feitiço temporal que a mantinha presa no dia de seu aniversário,"
                ."Tree Gelbman (Jessica Rothe) olha para o futuro, tentando escrever uma nova história ao lado de Carter (Israel Broussard). "
                ."No entanto, quando um experimento científico dá errado, a jovem é forçada a retornar ao fluxo de repetição e, desta vez, "
                ."morrer não será o bastante para escapar.Classificação indicativa a definir por http://www.culturadigital.br/classind" ;
              
            }   elseif ($filme == "9") {
            
                echo "  Ruth Bader Ginsburg (Felicity Jones) se formou em direito nas instituições mais prestigiosas do país: Harvard e Columbia,"
                ."sempre como primeira aluna de sua turma. Mesmo assim, ela enfrentou o machismo dos anos 1950 e 1960 quando tentou encontrar emprego,"
                ."sendo recusada pelos principais escritórios de advocacia. Na função de professora, ela se especializou em direito relacionado ao gênero,"
                ."decidindo atacar o Estado norte-americano para derrubar centenas de leis que permitem a discriminação às mulheres." ;
                
            }  elseif ($filme == "10") {
            
                echo " Marcos (Ricardo Darín) e Ana (Mercedes Morán) estão casados há 25 anos e seu relacionamento já não está mais funcionando."
                ."Quando seu filho deixa a Argentina para estudar fora, os dois decidem se divorciar. Porém, a vida de solteiro não é tão fácil "
                ."quanto eles esperavam e Marcos acaba chamando Ana para sair com ele novamente." ;
            }
            
        ?>
    </body>
</html>
