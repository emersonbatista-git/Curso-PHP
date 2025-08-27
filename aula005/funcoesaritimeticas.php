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
       $v1 = $_GET["a"];
       $v2 = $_GET["b"];

       echo "Valores recibidos: $v1 e $v2";
       echo "<br>O valor absoluto de $v2 é " . abs($v2);
       echo "<br>O valor de $v1<sup>$v2</sup> e  " . pow($v1, $v2);
       echo "<br>A raiz de $v1 é " . sqrt($v1);
       echo "<br>O valor de $v2 arredondado é " . round($v2);
       echo "<br>A parte inteira de $v2  " . intval($v2);
       echo "<br>O valor de $v1 em moeda é " . number_format($v1,2,",",".");

        ?>
    </div>
    
</body>
</html>