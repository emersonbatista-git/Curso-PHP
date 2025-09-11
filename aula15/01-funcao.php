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

        function teste ($x) {
         $x +=2;
         echo "<p>O valor de X é $x</p>";
        }
         $a = 3;
         teste ($a);
         echo "<p>O valor de A é $a</p>"; 



        function teste1 (&$y) {
         $y +=2;
         echo "<p>O valor de Y é $y</p>";
        }
         $b = 3;
         teste1 ($b);
         echo "<p>O valor de B é $b</p>"; 


?>
    
    
</body>
</html>