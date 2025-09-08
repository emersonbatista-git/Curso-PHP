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
   
    $v = $_GET ["num"];
    $c = 1;
      echo "<h1>Mostrando a Tabuada de $v</h1>";

    do {
        
        $m = $v * $c;
        echo "$v x $c = $m <br>"; 

        $c++;

    } while ($c <= 10);
    
    
    
    ?>

    <p><a href="03-tabuada.html">Voltar</a></p>
    
</body>
</html>