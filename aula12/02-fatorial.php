<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 

    <div>
     <?php 
      
      $v = $_GET ["val"];
      
       
        echo "<h1>Calculando o vetorial de $v</h1>"; 

        $c = $v;
        $fat = 1;

        do {
          $fat = $fat * $c;
          $c--;


      } while ($c >= 1 );

      echo "<h2>$v ! = $fat";
     
     
     ?>

     <p><a href="02-fatorial.html">Voltar</a></p>

    </div>
    
</body>
</html>