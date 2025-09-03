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
        $ano = $_GET["ano"];
        
        $idade = date("Y") - $ano;

         echo "Você nasceu em $ano e terá $idade anos.";
        
    
        if($idade>=18) {
    $vota = 'já pode votar';
    $dirige = 'já pode dirigir';
    }
    
    else {
     $vota = 'não pode votar';
     $dirige = 'não pode dirigir';
    }
    
    echo "<br/>Com essa idade você $vota e também $dirige."; 
   
    
    
    ?>
</div>
    
</body>
</html>