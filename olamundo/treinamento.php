<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

$a = $_GET ["a"];
$b = $_GET ["b"];


echo"A soma de $a e $b é " . ($r = $a + $b); 
echo"<br>A Multiplicação de $a e $b é " . ($r = $a * $b);
echo"<br>A Divisão de $a por $b é " . ($r = $a / $b);
echo "<br>A média entre $a e $b é " . ($m = ($a + $b)/2);
echo "<br>A potencia de $a elevado a $b é " . ($p = pow($a, $b));
echo"<br>A é maior que B: ". (($s = $a > $b) ? "Verdadeiro":"Falso"); 




?>
    
</body>
</html>