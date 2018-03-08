<!DOCTYPE html>
<!--
Autor:? Tiago Silva
Data: 08/03/18
Filinadade: projeto de Aprendizagem PHP
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 03</title>
    </head>
    <body>
        <?php
        #quando queremosdefinir uma váriavel devemos utilizar o simbolo $
        $variavel = "Variável Exeplo";
        
        #Porem  quando queremos  definir uma váriavel ultizamos a simbologia $$
        $$variavel = 8;
        
        echo "O valor da $variavel é " . $$variavel;
        echo"<br>O valor da $variavel é {$$variavel}";
        echo"<br>";
        var_dump(boolval(0));
        echo "<br>";
        var_dump(boolval(1));
        
       
        ?>
        
    </body>
</html>
