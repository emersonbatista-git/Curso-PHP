<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <?php
        $r = $_GET ["estado"];
        switch ($r) {
            case 1:
                echo "Você mora na <span class=cor>Região Norte</span><br>";
                break;
            case 2:
                echo "Você mora na <span class=cor>Região Nordeste</span><br>";
                break;
            case 3:
                echo "Você mora na <span class=cor>Região Centro Oeste</span><br>";
                break;
            case 4:
                echo "Você mora na <span class=cor>Região Sudeste</span><br>";
                break;
            case 5:
                echo "Você mora na <span class=cor>Região Sul</span><br>";
        
        }
        
        ?>
    </div>
      
      <a href="03-exercicio.html">Voltar</a>
    
</body>
</html>