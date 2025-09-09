<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="style2.css">
</head>
<body>
    
    <?php
   
    $n = $_GET ["primo"];
    $cont = 0;
    $mult = [];
   

    for ($c=1;$c<=$n; $c++) {
          if ($n % $c ==0 ) {
            $mult [] = $c;
            $cont = $cont + 1;
            
          }
        }

        echo "Analisando o numero $n ...<br/>";
        echo "Valores multiplus: " . implode(', ', $mult);
        echo "<br/>Total de multiplos: $cont <br/>";
    
        if ($cont > 2) {
            echo "O valor $n nao é primo";
        }

        else {
            echo "O valor $n é primo";
        }

    

    
   
   
   ?>
</body>
</html>