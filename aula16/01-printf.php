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
       $p = "Leite";
       $pr = 4.5;

     /*  echo "O $p custa R$ " . number_format($pr,2);  */

       printf("O %s R$ %.2f", $p, $pr);



?>
    
    
</body>
</html>