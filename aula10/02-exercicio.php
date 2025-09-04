<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       $d = isset($_GET ["ds"]) ? $_GET ["ds"]:0;

       switch ($d) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "Levanta e vai estudar! :)";
            break;

            case 6:
            case 7:
                echo "Descanse, bom final de semana! ;) ";
            break;
            default:
                echo "Dia da semana invalido.";


       }
    
    
    
    
    ?>
    
</body>
</html>