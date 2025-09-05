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
          while ($c <= 10) {
              echo "$c" . "</br>";

              $c++;


          }

          echo "Decrescente</br>";

           $c = 10;
          while ($c >= 1) {
              echo "$c" . "</br>";

              $c--;


          }

            echo "Com salto de 2</br>";

           $c = 10;
          while ($c >= 0) {
              echo "$c" . "</br>";

              $c-= 2 ;


          }


          ?>
        
    </div>
    
</body>
</html>