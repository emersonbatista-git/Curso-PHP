<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<div>
    <?php 
         $n1 = $_GET ["nt1"];
         $n2 = $_GET ["nt2"];
         $m = ($n1 + $n2) / 2;
         

        if ($m <5) {
            $sit= "REPROVADO";
            
            
        }

        elseif ($m >= 5 && $m <7) {
            
            $sit = "RECUPERAÇÃO";
            
            
           

        }
            else {
                $sit = "APROVADO";
               
            }
             


        

        echo "A média entre " . number_format ( $n1,1);;
        echo " e "  . number_format($n2,1);;
        echo " é igual a " . number_format($m,1);;
        echo "<br/>Situação do aluno: $sit";

   
    
    
    ?>
    
   
         
</div>
<a href="desafio.html">Voltar</a>



    
</body>
</html>