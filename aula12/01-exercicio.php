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
         $c = 1;
          do {
              echo "$c" . "</br>";

              $c++;
          } while ($c <= 10);

          echo "Decrescente</br>";

           $c = 10;
          do {
              echo "$c" . "</br>";

              $c--;
          } while ($c >= 1);

            echo "Com salto de 2</br>";

           $c = 10;
          do {
              echo "$c" . "</br>";

              $c-= 2 ;
          } while ($c >= 0);


          ?>
        
    </div>
    
</body>
</html>