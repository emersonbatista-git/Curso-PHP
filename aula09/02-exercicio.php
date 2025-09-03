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
        
    
        if ($idade<16) {
            $vota = 'não pode votar';
        }
    else {

        if (($idade >= 16 && $idade < 18) || ($idade > 65 )) {
            $vota = 'tem o voto opcional';
    }
        else {
         $vota = 'voto obrigatorio';
        
        }
    
    }
    
    echo "<br/>Com essa idade  $vota."; 
   
    
    
    ?>
</div>
    
</body>
</html>