<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <div>
       <form action="02-exercicio.php" method="get" >
        <!--Repetir a caixa 5 vezes-->
        <?php
         $c = 1;
          while ($c <= 5) {

                
        echo "Valor $c: <input type='number' name='$c' max='100' min='0' value='0'> <br>";

        $c++;

          }
        ?>

        <input type="submit" value="Enviar">

       </form>




    </div>
    
</body>
</html>