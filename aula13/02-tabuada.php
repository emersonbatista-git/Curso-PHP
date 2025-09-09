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
         $n = $_GET ["num"];

         for ($c=1; $c<=10; $c++) {;
           $r = $n * $c;
            
           echo "$n x $c = $r <br/>";
         }      
       
       ?>

       <a href="02-index.php">Voltar</a>
    </div>

   
    
</body>
</html>