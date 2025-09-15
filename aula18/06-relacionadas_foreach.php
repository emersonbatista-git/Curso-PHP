<?php

$cad = array ( "nome" => "Ana",
               "idade" => 23,
               "peso" => 65.5);

               $cad["fuma"] = true;

foreach ($cad as $k => $c) {
    echo "O campo $k possui o conteudo $c <br/>";
}



?>