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
             $v1 = $_GET ["vi"];
             $v2 = $_GET ["vf"];
             $s = $_GET ["salto"];

            
            if ($v1 < $v2) {
             $c = $v1;

             while ($c <= $v2) {
              echo "$c ";

              $c = $c + $s;


          }

        }

        else
            $c = $v1;

             while ($c >= $v2) {
              echo "$c ";

              $c = $c - $s;
             
            
            }



          

             

             
   



?>



    </div>
    
</body>
</html>